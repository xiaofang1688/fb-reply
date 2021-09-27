<?php
/*
Plugin Name: fb-reply
Plugin URI: https://www.fang1688.cn/study-code/2332.html
Description:wordpress评论可见内容插件
Version: 1.0
Author: 方包
Author URI: http://www.fang1688.cn
License: GPLv2
*/

//设置时区为 亚洲/上海
date_default_timezone_set('Asia/Shanghai');


//评论被添加的时候触发
add_action( 'wp_insert_comment', 'auto_reply', 10, 2 );

  function auto_reply($comment_id, $comment_object) {
			
			setcookie("fbreply","1");

		}

//文章内容回复可见
add_shortcode('reply', 'reply_to_read');
 
function reply_to_read($atts, $content=null) {
extract(shortcode_atts(array("notice" => '<div class="reply-to-read"><p>温馨提示：此处内容需要<a href="#respond" title="评论本文">评论本文</a>后才能查看。</p></div>'), $atts));


if($name = $_COOKIE['fbreply']=="1"){
	return do_shortcode($content);
}
else{
	return $notice;
}
}

//自定义引用样式表
function hc_enqueue_style() {
	wp_enqueue_style( 'core', plugins_url('css/fbao_reply.css', __FILE__) , false ); 
} 

//引用文件的钩子
add_action( 'wp_enqueue_scripts', 'hc_enqueue_style' );