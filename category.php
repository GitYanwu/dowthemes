<?php
/**
 * The category template file
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <?php add_css_enqueue() ?>
</head>
<body style="background-color:#FFF;">
    <div class="bgb">
        <div class="content-box1200">
            <div class="top">
                <div class="user-info">
                    <a class="logo" href="/"></a>
                    <div class="search">
                        <form id="webSearchForm" action="/NewAn/WebSearch/Course" method="post" novalidate="novalidate">
                            <input type="text" id="keyWordsT" placeholder="课程太多? 搜一搜">
                            <input type="hidden" id="keyWordsH" name="keyWords">
                            <button type="submit"><i class="Hui-iconfont Hui-iconfont-search2"></i></button>
                        </form>
                    </div>
                    <div class="user pos-r">
                        <a style="text-decoration: none; color: #000; font-size: 14px;" href="/login">登录/注册</a>
                    </div>
                    <a target="_blank" class="help" style="color: #000" href="/newan/helpcenter">帮助中心</a>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
    </div>

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

<ul>
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
</ul>    
</body>

