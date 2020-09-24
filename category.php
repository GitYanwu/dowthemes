<?php
/**
 * The category template file
 */
?>
<?php 
	// 头部区域
	get_header();
?>
<div class="ggb">
    <div class="content-box1200" style="background-color: #e7e7e7;">
        <div class="webPath">
            <a href="<?php echo home_url(); ?>">首页</a>
            <i class="Hui-iconfont Hui-iconfont-arrow2-right"></i> 
            <a><?php single_cat_title(); ?></a>
        </div>
    </div>
</div>

<div class="newList content-box1200">
    <div class="quickSearch">
        <div class="type">
            <div class="typeName">
                <span>类 型</span>
            </div>
            <div id="soft" class="typeNodes">
                <?php
                    // 当前分类 
                    $this_category = get_category($cat); 
                    // 父分类
                    $parent = $this_category->category_parent;
                    $args = array(
                        'title_li' => '',
                        'hide_empty'=> 0,
                    );
                    if($parent){
                        // 存在父分类 代表是二级分类 需要传入 父分类 ID
                        $args['child_of'] = $parent;
                        // 二级分类需要高亮当前分类
                        $args['current_category'] = $cat;
                        $cat_links = get_category_link($parent->term_id);
                        // 二级分类不高亮【不限】选项
                ?>
                <li>
                    <a href="<?php echo get_category_link( $parent ) ?>">不限</a>
                </li>
                <?php
                    }else{
                        // 不存在父分类 代表是一级分类 需要传入此分类 ID
                        $args['child_of'] = $cat;
                        $cat_links = get_category_link($this_category->term_id);
                        // 一级分类需要高亮【不限】这个选项
                ?>
                <li class="current-cat">
                    <a href="<?php echo $cat_links ?>">不限</a>
                </li>
                <?php
                    }
                    wp_list_categories( $args );
                ?>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
</div>

<div class="content-box1200 postlist">
    <?php
        $args = array('category' => $cat);
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) :	setup_postdata($post); 
    ?>
        
            <li>
                <?php the_post_thumbnail() ?>    
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php 
        endforeach;
        wp_reset_postdata(); 
    
    ?>
</div>    
</body>

