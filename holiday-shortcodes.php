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
global $test2;
$usl_codes[]=$usl_days_until_christmas;
$usl_codes[]=$test2;
return $usl_codes;
}
add_filter('usl_extend_codes', 'usl_add_holiday_codes');

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
$usl_days_until_christmas = array(
		'Title'=>'Days until Christmas',
		'Code'=>'usl_days_until_christmas',
		'Description'=>'Displays the number of days remaining until Christmas day.',
		'Category'=>'Holiday'
		);
$test2 = array(
		'Title'=>'Test',
		'Code'=>'[yippee]',
		'Description'=>'This might work',
		'Category'=>'Holiday'
		);
?>