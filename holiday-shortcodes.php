<?php
/*
Plugin Name: Holiday Shortcodes
Description: A collection of shortcodes that integrates with Ultimate Shortcode Library
Version: 1.0
Author: Kyle Maurer
Author URI: http://realbigmarketing.com/staff/kyle
*/

function usl_add_holiday_cat($usl_cats) {
$usl_cats[]='Holiday';
return $usl_cats;
}
add_filter('usl_extend_cats', 'usl_add_holiday_cat');

function usl_add_holiday_codes($usl_codes) {
global $usl_days_until_christmas;
$usl_codes[]=$usl_days_until_christmas;
return $usl_codes;
}
//add_filter('usl_extend_codes', 'usl_add_holiday_codes');

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
Next shortcode
-------------------------------*/
function usl_add_test($usl_codes) {
$usl_codes[] = array(
		'Title'=>'Another one',
		'Code'=>'usl_another',
		'Description'=>'Does nothing.',
		'Category'=>'Holiday'
		);
return $usl_codes;
}
add_filter('usl_extend_codes', 'usl_add_test');
?>