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
				<div class="verInfo">
					<div class="name">教程程度:</div>
					<div class="content">初级</div>
					<div class="name">所需基础:</div>
					<div class="content">零基础</div>
					<br>
					<div class="name">适合人群:</div>
					<div class="content">所有人</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<div class="single-detail-content-box">
	<div class="single-detail-content">
		<div class="single-detail-left-content">
			<!-- 以下代码用于代码模式编辑文章 不再页面上显示 -->
			<!-- <div style="overflow: hidden;margin: 0 15px;padding-bottom: 100px;">
				<input type="radio" name="postdetail" id="postList" checked='true'>
				<label for="postList" class="post-detail-label">课程目录</label>
				<span class="post-detail-line"></span>
				<input type="radio" name="postdetail" id="postDownload">
				<label for="postDownload" class="post-detail-label">下载地址</label>
				<div class="post-detaillist-content">
					<div class="post-list-content" id="postListContent">
						<div class="post-detail-list-item">
							<ul>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第1节 - 01-JavaScript</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第2节 - 02-面向对象编程介绍</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第3节 - 03-类和对象</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第4节 - 04-创建类和生成实例</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第5节 - 05-类中添加共有方法</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第6节 - 06-类继承extends和super关键字</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第7节 - 07-super调用父类普通函数以及继承中属性方法查找原则</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第8节 - 08-super必须放到子类this之前</span>
								</li>
								<li>
									<span><span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第9节 - 09-使用类2个注意点</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第10节 - 10-类里面this指向问题</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第11节 - 11-面向对象tab栏-思路分析以及布局介绍</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第12节 - 12-面向对象tab栏-模块划分</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第13节 - 13-面向对象tab栏-切换功能模块</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第14节 - 14-面向对象tab栏-添加功能模块(上)</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第15节 - 15-面向对象tab栏-添加功能模块(中)</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第16节 - 16-面向对象tab栏-添加功能模块(下)</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第17节 - 17-面向对象tab栏-删除功能模块(上)</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第18节 - 18-面向对象tab栏-删除功能模块(中)</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第19节 - 19-面向对象tab栏-删除功能模块(下)</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第20节 - 20-面向对象tab栏-编辑功能模块(上)</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第21节 - 21-面向对象tab栏-编辑功能模块(中)</span>
								</li>
								<li>
									<span class="iconfont icon-Bookmark"></span>
									<span class="pl10">第22节 - 22-面向对象tab栏-编辑功能模块(下)</span>
								</li>
							</ul>
						</div>
						<div class="post-detail-list-item-more">
							<span id="postDetailMoreBtn">更多章节请下载完整视频观看 ＞＞</span>
						</div>
					</div>
					<div class="post-list-content" id="postDownloadContent">
						<ul>
							<li>
								<div class="post-detail-download-item-icon">
									<span class="iconfont icon-Group-" style="font-size: 28px;"></span>							
								</div>
								<div class="post-detail-download-item-content">
									<a href="https://089u.com/dir/14538876-40866962-edbf84"
										target="_blank">
										<div class="title">点击下载</div>
										<div class="download-link">
											https://089u.com/dir/14538876-40866962-edbf84
										</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div> -->
			<?php echo $post->post_content;?>
			<div class="comments_template">
				<?php comments_template();?>
			</div>		
		</div>
		<!-- 相关推荐 -->
		<div class="single-detail-right-content">
			<div class="recommend-title">相关推荐</div>
			<ul>
				<?php
					$category = get_the_category();
					$args = array('category' => $cat,'numberposts'=>3,'exclude'=>$post->ID);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); 
				?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<div class="recommend-post-image" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>  
					</a>
					<h2 class="recommend-post-name">
						<?php the_title(); ?>
					</h2>
				</li>
				<?php 
					endforeach;
					wp_reset_postdata(); 
				?>
			</ul>
		</div>
		<div style="clear: both;"></div>
	</div>
</div>
<?php wp_footer(); ?>
</body>