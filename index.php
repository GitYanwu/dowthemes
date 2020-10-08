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
		$args = array('category' => 'banner','numberposts' => 1);
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
    
<?php 

?>
