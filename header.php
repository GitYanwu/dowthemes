<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <?php add_css_enqueue() ?>
</head>
<div class="content-box">
    <div class="top">
        <div class="user-info">
            <a class="logo" href="/"></a>
            <div class="search">
                <form id="webSearchForm" action="/NewAn/WebSearch/Course" method="post" novalidate="novalidate">
                    <input type="text" id="keyWordsT" placeholder="课程太多? 搜一搜">
                    <input type="hidden" id="keyWordsH" name="keyWords">
                    <button type="submit"><i class="Hui-iconfont Hui-iconfont-search2"></i></button>
                </form>
            </div>

            <div class="user pos-r">
                
                <a style="text-decoration: none; color: #000; font-size: 14px;" href="/login">登录/注册</a>
                
            </div>

            <a target="_blank" class="help" style="color: #000" href="/newan/helpcenter">帮助中心</a>

        </div>
        <div style="clear: both"></div>
    </div>
</div>