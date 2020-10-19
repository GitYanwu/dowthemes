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
		<!-- 以下代码用于代码模式编辑文章 不再页面上显示 -->
		<div style="overflow: hidden;margin: 0 15px;padding-bottom: 100px;">
			<input type="radio" name="postdetail" id="postList" checked="checked">
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
								<span class="pl10">第1节 - 计算机组成</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第2节 - Python简介</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第3节 - 课程介绍</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第4节 - 解释器的作用和分类</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第5节 - Python解释器的下载和安装</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第6节 - PyCharm的作用</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第7节 - 下载和安装PyCharm</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第8节 - 新建项目</span>
							</li>
							<li>
								<span><span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第9节 - 新建书写运行文件</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第10节 - PyCharm界面设置</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第11节 - PyCharm修改解释器</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第12节 - PyCharm项目管理</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第13节 - PyCharm总结</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第14节 - 注释</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第15节 - 变量的作用</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第16节 - 定义变量</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第17节 - 使用变量</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第18节 - 认识bug</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第19节 - Debug工具</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第20节 - 认识数据类型开始学习</span>
							</li>
							<li>
								<span class="iconfont icon-Bookmark"></span>
								<span class="pl10">第21节 - 变量章节总结</span>
							</li>
						</ul>
					</div>
					<div class="post-detail-list-item-more">
						<span>更多章节请下载完整视频观看 ＞＞</span>
					</div>
				</div>
				<div class="post-list-content" id="postDownloadContent">
					<ul>
						<li>
							<div class="post-detail-download-item-icon">
								<span class="iconfont icon-Bookmark"></span>							
							</div>
							<div class="post-detail-download-item-content">
								<a href="https://www.iconfont.cn/api/project/download.zip?spm=a313x.7781069.1998910419.d7">
									<div class="title">download.zip</div>
									<div class="download-link">
										https://www.iconfont.cn/api/project/download.zip?spm=a313x.7781069.1998910419.d7
									</div>
								</a>
							</div>
						</li>
						<li>
							<div class="post-detail-download-item-icon">
								<span class="iconfont icon-Bookmark"></span>							
							</div>
							<div class="post-detail-download-item-content">
								<a href="https://www.iconfont.cn/api/project/download.zip?spm=a313x.7781069.1998910419.d7">
									<div class="title">download.zip</div>
									<div class="download-link">
										https://www.iconfont.cn/api/project/download.zip?spm=a313x.7781069.1998910419.d7
									</div>
								</a>
							</div>
						</li>
						<li>
							<div class="post-detail-download-item-icon">
								<span class="iconfont icon-Bookmark"></span>							
							</div>
							<div class="post-detail-download-item-content">
								<a href="https://www.iconfont.cn/api/project/download.zip?spm=a313x.7781069.1998910419.d7">
									<div class="title">download.zip</div>
									<div class="download-link">
										https://www.iconfont.cn/api/project/download.zip?spm=a313x.7781069.1998910419.d7
									</div>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- <?php echo $post->post_content;?> -->
	</div>
</div>