﻿<?php
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
				'orderby' => 'id',
				'hide_empty'=>0,
				'title_li'=>"", 
				'depth'=>1,
				'exclude'=>1  
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
	<?php // 图片oss Base 路径?>
	<?php $imgOssBaseUrl = "https://51dow-1300501914.cos.ap-nanjing.myqcloud.com/wp-content/uploads/" ?> 
	<?php // 标题分割线 ?>
	<?php $titleLineImgUrl = $imgOssBaseUrl.'2020/10/20201024143046131.png'; ?>
	<?php // 前端 ?>
	<?php $webMainImgUrl = $imgOssBaseUrl.'2020/10/20201024143043452.png'; ?>
	<?php // 后端 ?>
	<?php $rearendMainImgUrl = $imgOssBaseUrl.'2020/10/20201024143044553.png'; ?>
	<?php // 移动 ?>
	<?php $mobileMainImgUrl = $imgOssBaseUrl.'2020/10/20201024143045904.png'; ?>
	<?php // 云计算 ?>
	<?php $cloudMainImgUrl = $imgOssBaseUrl.'2020/10/20201024143044253.png'; ?>
	<?php // 运行维护 ?>
	<?php $devopsMainImgUrl = $imgOssBaseUrl.'2020/10/20201024143045147.png'; ?>
	<?php // UI设计 ?>
	<?php $uiMainImgUrl = $imgOssBaseUrl.'2020/10/20201024143043695.png'; ?>
	<?php // 播放小图标 ?>
	<?php $playIconUrl = $imgOssBaseUrl.'2020/10/20201024143045857.png'; ?>
<div>
	<div class="new-post" style="background: url(<?php echo $titleLineImgUrl ?>) no-repeat center center;">最新课程</div>
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
					<img class="sy_show imgguankan" src="<?php echo $playIconUrl ?>">
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
	<div class="new-post" style="background: url(<?php echo $titleLineImgUrl ?>) no-repeat center center;">热门推荐</div>
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
							<img class="sy_show imgguankan" src="<?php echo $playIconUrl ?>">
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

<?php // 课程分类 ?>
<div>
	<div class="new-post" style="background: url(<?php echo $titleLineImgUrl ?>) no-repeat center center;">课程分类</div>
	<?php // web ?>
	<div class="tag">
	     <a href="<?php echo get_category_link(get_term_by('id', 14, 'category')->term_id) ?>" class="keyword">Typescript</a>
	     <a href="<?php echo get_category_link(get_term_by('id', 15, 'category')->term_id) ?>" class="keyword">HTML/CSS</a>
	     <a href="<?php echo get_category_link(get_term_by('id', 28, 'category')->term_id) ?>" class="keyword">JavaScript</a>
	     <a href="<?php echo get_category_link(get_term_by('id', 16, 'category')->term_id) ?>" class="keyword">Vue.js</a>
	     <a href="<?php echo get_category_link(get_term_by('id', 17, 'category')->term_id) ?>" class="keyword">React.JS</a>
		 <a href="<?php echo get_category_link(get_term_by('id', 18, 'category')->term_id) ?>" class="keyword">Angular</a>
		 <div style="clear: both"></div>
		 <div class="line"></div>
		 <a href="<?php echo get_category_link(get_term_by('id', 8, 'category')->term_id) ?>" class="more">
			 更多
			 <span class="iconfont icon-right more-icon"></span>
			 <span class="iconfont icon-right more-icon"></span>
		</a>
	</div>
	<div class="type-row">
		<li>
			<img src="<?php echo $webMainImgUrl ?>" alt="#">
		</li>
		<?php
			$args = array('category' => 8,'numberposts' => 4);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); 
		?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<div class="post-item" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">
				</div>  
			</a>
			<h2 class="courseName">
				<?php the_title(); ?>
			</h2>
			<div class="post-item-mask">
				<img class="tips-img" src="<?php echo $playIconUrl ?>">
			</div>
		</li>
		<?php 
			endforeach;
			wp_reset_postdata(); 
		?>
	</div>



	<?php // 后端 ?>
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
	<div class="type-row">
		<li>
			<img src="<?php echo $rearendMainImgUrl ?>" alt="#">
		</li>
		<?php
			//  banner 区域
			$args = array('category' => 9,'numberposts' => 4);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); 
		?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<div class="post-item" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>  
			</a>
			<h2 class="courseName">
				<?php the_title(); ?>
			</h2>
			<div class="post-item-mask">
				<img class="tips-img" src="<?php echo $playIconUrl ?>">
			</div>
		</li>
		<?php 
			endforeach;
			wp_reset_postdata(); 
		?>
	</div>


	<?php // 移动端 ?>
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
	<div class="type-row">
		<li>
			<img src="<?php echo $mobileMainImgUrl ?>" alt="#">
		</li>
		<?php
			//  banner 区域
			$args = array('category' => 9,'numberposts' => 4);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); 
		?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<div class="post-item" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>  
			</a>
			<h2 class="courseName">
				<?php the_title(); ?>
			</h2>
			<div class="post-item-mask">
				<img class="tips-img" src="<?php echo $playIconUrl ?>">
			</div>
		</li>
		<?php 
			endforeach;
			wp_reset_postdata(); 
		?>
	</div>


	<?php // 云计算 ?>
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
	<div class="type-row">
		<li>
			<img src="<?php echo $cloudMainImgUrl ?>" alt="#">
		</li>
		<?php
			//  banner 区域
			$args = array('category' => 9,'numberposts' => 4);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); 
		?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<div class="post-item" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>  
			</a>
			<h2 class="courseName">
				<?php the_title(); ?>
			</h2>
			<div class="post-item-mask">
				<img class="tips-img" src="<?php echo $playIconUrl ?>">
			</div>
		</li>
		<?php 
			endforeach;
			wp_reset_postdata(); 
		?>
	</div>

	<?php // 运维 ?>
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
	<div class="type-row">
		<li>
			<img src="<?php echo $devopsMainImgUrl ?>" alt="#">
		</li>
		<?php
			//  banner 区域
			$args = array('category' => 9,'numberposts' => 4);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); 
		?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<div class="post-item" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>  
			</a>
			<h2 class="courseName">
				<?php the_title(); ?>
			</h2>
			<div class="post-item-mask">
				<img class="tips-img" src="<?php echo $playIconUrl ?>">
			</div>
		</li>
		<?php 
			endforeach;
			wp_reset_postdata(); 
		?>
	</div>

	<?php // UI设计 ?>
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
	<div class="type-row">
		<li>
			<img src="<?php echo $uiMainImgUrl ?>" alt="#">
		</li>
		<?php
			//  banner 区域
			$args = array('category' => 9,'numberposts' => 4);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); 
		?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<div class="post-item" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>  
			</a>
			<h2 class="courseName">
				<?php the_title(); ?>
			</h2>
			<div class="post-item-mask">
				<img class="tips-img" src="<?php echo $playIconUrl ?>">
			</div>
		</li>
		<?php 
			endforeach;
			wp_reset_postdata(); 
		?>
	</div>
</div>
<footer>
	<div class="footer-content">
		<p class="website">
			<span class="title">网站信息</span>
			<span style="margin-right: 20px;">建站时间:<span class="ml5">2020-10-15</span></span>
			<span>访问量:<span class="ml5"><?php the_views(); ?>人访问过</span> </span>
		</p>
		<p class="webdescribe">
			<span class="title">联系方式</span>
			<span style="margin-right: 20px;">wmdtdwm@163.com</span>
		</p>
		<p class="webdescribe">
			<span class="title">备案号</span>
			<span style="margin-right: 20px;">鄂ICP备2020015836号</span>
		</p>
		<p class="webdescribe">
			<span>本网站所有教程均来自互联网,如有侵权,请联系站长进行删除</span>
		</p>
	</div>
</footer>