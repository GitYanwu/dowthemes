<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Expirse" content="0"><meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-control" content="no-cache"><meta http-equiv="Cache" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>51视频下载站-视频教程|免费教程|IT教程|计算机教程|开发教程|学习教程-51视频下载站</title>
    <meta name="description" content="51视频下载站-提供免费开发视频教程,包括前端、后端、移动、运维、UI等一系列免费教程">
    <meta name="keywords" content="51视频下载站-视频教程|免费教程|前端|后端|移动端|运维|开发|UI设计|-51视频下载站">
    <meta name="renderer" content="webkit">
    <meta property="og:name" content="51视频下载站">
    <meta property="og:image" content="https://logoicon-1300501914.cos.ap-nanjing.myqcloud.com/favicon.ico">
    <link rel="icon" href="https://logoicon-1300501914.cos.ap-nanjing.myqcloud.com/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://logoicon-1300501914.cos.ap-nanjing.myqcloud.com/favicon.ico" type="image/x-icon">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <?php add_css_enqueue() ?>
</head>
<?php // 非首页需要加上背景色 ?>
<div <?php if(!is_home()){?>  style="background-color: #414141;"  <?php } ?> >
    <div class="content-box1200">
        <div class="top">
            <div class="user-info">
                <?php if(is_home()){ ?>
                        <img src="<?php echo get_template_directory_uri() . './images/logo.jpg'; ?>"/>
                <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri() . './images/logo.png'; ?>"/>
                <?php } ?>
				<!-- <div class="search">
                    <form id="webSearchForm" action="/NewAn/WebSearch/Course" method="post" novalidate="novalidate">
                        <input type="text" id="keyWordsT" placeholder="课程太多? 搜一搜">
                        <input type="hidden" id="keyWordsH" name="keyWords">
                        <button type="submit"><i class="Hui-iconfont Hui-iconfont-search2"></i></button>
                    </form>
                </div>

                <div class="user pos-r">
                    <a style="text-decoration: none; color: #000; font-size: 14px;" href="/login">登录/注册</a>
                </div>
                <a target="_blank" class="help" style="color: #000" href="/newan/helpcenter">帮助中心</a> -->
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
</div>