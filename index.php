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
	<div class="content-box">
		<?php
			// 导航区域
			$args = array(
				'hide_empty'=>0,
				'title_li'=>"", 
				'depth'=>1 
			);
			wp_list_categories( $args ); 
		?>
	</div>
</div>

<?php 

?>
