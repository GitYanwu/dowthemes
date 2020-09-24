<?php
    // post detail
?>
<?php 
	// 头部区域
	get_header();
?>
标题: <?php the_title(); ?>
内容：<?php echo $post->post_content;?>
调用文章摘要：<?php the_excerpt(); ?>

调用作者姓名：<?php the_author(); ?>

调用文章发布时间：<?php the_time(); ?>

发表于：<?php the_time('Y-h-d'); ?>
分类：<?php the_category(','); ?>