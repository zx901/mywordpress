<?php
/**
 * Loads the WordPress environment and template.
 *根据博客参数定义博客页面显示内容,即用于加载WP环境和模板
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	require_once( dirname(__FILE__) . '/wp-load.php' );

	wp();

	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
