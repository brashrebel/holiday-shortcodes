<?php
/*
Plugin Name: Holiday Shortcodes
Description: A collection of shortcodes that integrates with Ultimate Shortcode Library
Version: 1.0
Author: Kyle Maurer
Author URI: http://realbigmarketing.com/staff/kyle
*/
//Add our new category
function usl_add_holiday_cat($usl_cats) {
$usl_cats[]='Holiday';
return $usl_cats;
}
add_filter('usl_extend_cats', 'usl_add_holiday_cat');

/*-------------------------------
Days until Christmas
-------------------------------*/
function usl_days_until_christmas() {
	//How long until Christmas?
	$year = date("Y");
	$target = mktime(0, 0, 0, 12, 25, $year);
	$today = time();
	$difference =($target-$today);
	$days =(int) ($difference/86400);
	return $days;
}
add_shortcode( 'usl_days_until_christmas', 'usl_days_until_christmas' );

function usl_add_duc($usl_codes) {
$usl_codes[] = array(
		'Title'=>'Days until Christmas',
		'Code'=>'usl_days_until_christmas',
		'Description'=>'Displays the number of days remaining until Christmas day.',
		'Category'=>'Holiday'
		);
return $usl_codes;
}
add_filter('usl_extend_codes', 'usl_add_duc');
/*-------------------------------
Days until Halloween
-------------------------------*/
function usl_days_until_halloween() {
	//How long until Halloween?
	$year = date("Y");
	$target = mktime(0, 0, 0, 10, 31, $year);
	$today = time();
	$difference =($target-$today);
	$days =(int) ($difference/86400);
	return $days;
}
add_shortcode( 'usl_days_until_halloween', 'usl_days_until_halloween' );

function usl_add_duh($usl_codes) {
$usl_codes[] = array(
		'Title'=>'Days until Halloween',
		'Code'=>'usl_days_until_halloween',
		'Description'=>'Displays the number of days remaining until Halloween.',
		'Category'=>'Holiday'
		);
return $usl_codes;
}
add_filter('usl_extend_codes', 'usl_add_duh');
/*-------------------------------
Random Christmas lyrics
-------------------------------*/
include_once('christmas-lyrics.php');
function usl_add_cl($usl_codes) {
$usl_codes[] = array(
		'Title'=>'Random Christmas Lyrics',
		'Code'=>'usl_christmas_lyric',
		'Description'=>'Displays random lyrics from popular Christmas songs.',
		'Category'=>'Holiday'
		);
return $usl_codes;
}
add_filter('usl_extend_codes', 'usl_add_cl');
/*-------------------------------
Days until...
-------------------------------*/
function usl_days_until($atts, $content = null) {
  extract(shortcode_atts(array(
     'month' => '',
     'day'   => '',
     'year'  => ''
    ), $atts));
    $remain = ceil((mktime( 0,0,0,(int)$month,(int)$day,(int)$year) - time())/86400);
    if( $remain >= 1 ){
        return $daysremain = "$remain";
    }else{
        return $content;
    }
}
add_shortcode('usl_days_until', 'usl_days_until');
function usl_add_du($usl_codes) {
$usl_codes[] = array(
		'Title'=>'Days until specific date',
		'Code'=>'usl_days_until',
		'Description'=>'Birthday coming? Wedding? Anniversary? This shortcode accepts a date and outputs the days remaining until that day comes.',
		'Atts'=>'month, day, year',
		'Example'=>'[usl_days_until day="4" month="7" year="2015"]',
		'Category'=>'Holiday'
		);
return $usl_codes;
}
add_filter('usl_extend_codes', 'usl_add_du');
?>