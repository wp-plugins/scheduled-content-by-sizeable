<?php
/*
Plugin Name: Scheduled Content (by Sizeable)
Plugin URI: http://www.sizeablelabs.com/plugins/scheduled-content/
Description: Use a shortcode [szbl_scheduled_content] and various attribtues to embed content on a schedule. Supports nested shortcodes.
Author: Sizeable Labs
Author URI: http://www.sizeablelabs.com
License: GPL2
Version: 1.0
*/
class Szbl_Scheduled_Content
{
	public static $instance;
	
	public static function init()
	{
		if ( is_null( self::$instance ) )
			self::$instance = new Szbl_Scheduled_Content();
		return self::$instance;
	}
	
	public static function getInstance()
	{
		return self::init();
	}
	
	private function __construct()
	{
		add_shortcode( 'szbl_scheduled_content', array( $this, 'process_shortcode' ) );
	}
	
	public static function str_to_bool( $string )
	{
		return ( strtolower( $string ) == 'true' ) ? true : false;
	}
	
	public function process_shortcode( $atts, $content = '' )
	{
		extract(shortcode_atts(array(
			'start' => date_i18n( 'F j, Y g:ia' ),
			'end' => null,
			'content_filters' => 'true',
			'shortcodes' => 'true'
		), $atts));

		$content_filters = self::str_to_bool( $content_filters );
		$shortcodes = self::str_to_bool( $shortcodes );
		
		if ( !$content )
			return '';

		$current_time = date_i18n( 'U' );
		$start = strtotime( $start );
		
		if ( $start > $current_time )
		{
			return '';
		}
		
		if ( !is_null( $end ) && !empty( $end ) )
		{
			$end = strtotime( $end );
			if ( $end <= time() )
				return '';
		}

		if ( $content_filters)
			$content = apply_filters( 'the_content', $content );
			
		if ( $shortcodes )
			$content = do_shortcode( $content );
		
		return $content;
	}
	
}
Szbl_Scheduled_Content::init();