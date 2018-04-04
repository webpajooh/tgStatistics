<?php
/*
Plugin Name: tgStatistics
Description: Statistics about your telegram channel
Version: 1.0
Author: WebPajooh
Author URI: https://t.me/webpajooh
Text Domain: tgStatistics
*/

function tgsGetUsers($botAPI, $channelUsername){
	if (false === ($value = get_transient('tgsT'))){
		$request = 'https://api.telegram.org/bot' . $botAPI . '/getChatMembersCount?chat_id=@' . $channelUsername;
		$response = wp_remote_get($request);
		if(is_array($response)){
			$array = wp_remote_retrieve_body($response);
			$array = json_decode($array);
			set_transient('tgsT', $array->result, 60*60);
			return $array->result;
		}
	}else{
		return get_transient('tgsT');
	}
}
function tgStatistics($botAPI1, $channelUsername1){
	return tgsGetUsers($botAPI1, $channelUsername1);
}

function tgStatistics_shortcode_init(){
	function tgStatistics_shortcode($atts, $content=null){
		$atts = shortcode_atts(array(
			'botapi' => 'xxxxxx',
			'username' => 'yyyyyy'
		), $atts);
		return tgsGetUsers($atts['botapi'], $atts['username']);
	}
	add_Shortcode('tgstatistics', 'tgStatistics_shortcode');
}
add_action('init', 'tgStatistics_shortcode_init');
?>