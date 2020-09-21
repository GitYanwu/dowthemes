<?php
/**
 * The category template file
 */
?>
<?php 
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

<div class="quickSearch">
    <div class="type">
        <div class="typeName">
            <span>类 型</span>
        </div>
        <div id="soft" class="typeNodes">
            <?php 
                $args = array(
                    'title_li'=>"",
                    'child_of'=> $cat,
                    'hide_empty'=> 0
                );
                wp_list_categories( $args );
            ?>
        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<?php
    $this_category = get_category($cat); 
    if($this_category->category_parent){
        echo "存在父分类";
    }else{
        echo "不存在父分类";
    }
?>

