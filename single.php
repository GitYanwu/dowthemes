<?php
    // post detail
?>
<?php 
	// 头部区域
	get_header();
?>
<div class="single-content-box">
	<div class="single-content">
		<div class="webpath">
			<a class="category-path-main" href="<?php echo home_url(); ?>">首页</a>
			<i class="iconfont icon-right category-path-icon"></i>
			<?php
				$category = get_the_category();
				$category_link = get_category_link($category[0]->term_id);
				$parent = get_cat_name($category[0]->category_parent);
				$parent_link = get_category_link($category[0]->category_parent);
				if (!empty($parent)) {
			?>
					<a class="category-path-main" href="<?php echo $parent_link ?>"><?php echo $parent; ?></a>
					<i class="iconfont icon-right category-path-icon"></i>
			<?php
				} 
			?>
				<a class="category-path-main" href="<?php echo $category_link ?>"><?php echo $category[0]->cat_name; ?></a>
				<i class="iconfont icon-right category-path-icon"></i>
				<a class="category-path-main" href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
		</div>
	</div>
</div>
<div class="single-content-box">
	<div class="single-content pb20">
		<div class="title-content">
			<?php
				$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
			?>
			<div class="single-post-image mr30" style="background-image: url('<?php echo $full_image_url[0]; ?>');"></div>
			<div class="single-post-detail">
				<div class="title"><?php the_title(); ?></div>
				<div class="countNum">
					<span class="mr10">
						发表于：<b class="number"><?php the_time('Y-h-d'); ?></b> 
					</span>
					<span class="mr10">
						已有人<b class="number"><?php the_views(); ?></b> 浏览过
					</span>
				</div>
				<div class="mt10">
					<div class="f14">课程概要</div>
					<div class="description">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
标题: <?php the_title(); ?>
内容：<?php echo $post->post_content;?>
调用文章摘要：<?php the_excerpt(); ?>

调用作者姓名：<?php the_author(); ?>

调用文章发布时间：<?php the_time(); ?>

发表于：<?php the_time('Y-h-d'); ?>
分类：<?php the_category(','); ?>