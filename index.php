<?php
/**
 * The main template file
 */
?>
<?php 
	// 头部区域
	get_header();
?>

<div class="nav">
	<div class="content-box1200">
		<?php
			// 导航区域
			$args = array(
				'hide_empty'=>0,
				'title_li'=>"", 
				'depth'=>1,
				'exclude'=>29  
			);
			wp_list_categories( $args ); 
		?>
	</div>
</div>
<div class="banner-list">
	<?php
		//  banner 区域
		$args = array('category' => 29,'numberposts' => 20);
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) :	setup_postdata($post); 
	?>
	<li>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail() ?>    
		</a>
	</li>
	<?php 
        endforeach;
        wp_reset_postdata(); 
    ?>
</div>  
<div>
	<div class="new-post" style="background: url(<?php echo get_template_directory_uri() . './redline.png'; ?>) no-repeat center center;">最新课程</div>
</div>            
<?php // 最新文章区域 显示最新的 10 篇文章 ?>
<div class="new-post-content">
	<?php
		// 1 - 4
		$args = array('numberposts' => 10);
		$myposts = get_posts($args);
		foreach( $myposts as $post ) :	setup_postdata($post); 
	?>
	<li>
		<a href="<?php the_permalink(); ?>" class="post-link">
			<div class="post-img" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">
				<div class="sy_mask">
					<img class="sy_show imgguankan" src="<?php echo get_template_directory_uri() . './sy_box3guankan.png'; ?>">
				</div>
			</div>
			<h2 class="courseName">
				<?php the_title(); ?>
			</h2>
		</a>
	</li>
	<?php 
        endforeach;
        wp_reset_postdata(); 
    ?>	
</div>

<?php // 热门文章区域 显示最热门的 10 篇文章 ?>
<div class="hot-content">
	<div class="new-post" style="background: url(<?php echo get_template_directory_uri() . './redline.png'; ?>) no-repeat center center;">热门推荐</div>
	<div class="hot-post-content">
		<ul>
			<?php
				$most_viewed_posts = new WP_Query(); //使用 WP_Query 自定义 WordPress Loop
				$most_viewed_posts->query('showposts=10&orderby=meta_value&meta_key=views');
				while ($most_viewed_posts->have_posts()): $most_viewed_posts->the_post();
			?>
			<li>
				<a href="<?php the_permalink(); ?>" class="post-link">
					<div class="post-img" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">
						<div class="sy_mask">
							<img class="sy_show imgguankan" src="<?php echo get_template_directory_uri() . './sy_box3guankan.png'; ?>">
						</div>
					</div>
					<h2 class="courseName">
						<?php the_title(); ?>
					</h2>
				</a>
			</li>
			<?php 
				endwhile; 
				wp_reset_postdata(); 
			?>
		</ul> 
	</div>
</div>
<?php // 课程分类 暂时先写死数据 ?>
<div>
	<div class="new-post" style="background: url(<?php echo get_template_directory_uri() . './redline.png'; ?>) no-repeat center center;">课程分类</div>
    <div class="tag">
	     <a href="" class="keyword">Typescript</a>
	     <a href="" class="keyword">HTML/CSS</a>
	     <a href="" class="keyword">JavaScript</a>
	     <a href="" class="keyword">Vue.js</a>
	     <a href="" class="keyword">React.JS</a>
		 <a href="" class="keyword">Angular</a>
		 <div style="clear: both"></div>
		 <div class="line"></div>
	</div>
	<img src="<?php echo get_template_directory_uri() . './web.png'; ?>" alt="#">
</div>