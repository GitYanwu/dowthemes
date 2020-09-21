<?php 
    // add css enqueue
    function add_css_enqueue(){
        wp_register_style('enqueue_style', get_template_directory_uri() . '/style.css', '', '1.0.0');
        wp_enqueue_style('enqueue_style');
    }
    add_action('wp_enqueue_scripts', 'add_css_enqueue');


    //remove header
    remove_action( 'wp_head', 'feed_links', 2 ); //去除文章feed
    remove_action( 'wp_head', 'rsd_link' ); //针对Blog的远程离线编辑器接口
    remove_action( 'wp_head', 'wlwmanifest_link' ); //Windows Live Writer接口
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); //移除后面文章的url
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); //移除最开始文章的url
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );//自动生成的短链接
    remove_action( 'wp_head', 'wp_generator' ); // 移除版本号
    remove_action('wp_head', 'index_rel_link');//当前文章的索引
    remove_action('wp_head', 'feed_links_extra', 3);// 额外的feed,例如category, tag页
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // 上、下篇.
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );//rel=pre
    wp_deregister_script('l10n');
    remove_filter('the_content', 'wptexturize');//禁用半角符号自动转换为全角
    remove_action('wp_head', 'wp_resource_hints', 2);//禁用类似rel='dns-prefetch' href='//fonts.googleapis.com'
 
    //移除wp-json
    add_filter('json_enabled', '__return_false' );
    add_filter('json_jsonp_enabled', '__return_false' );
 
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
 
    /**去除window._wpemojiSettings**/
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script');
    remove_action( 'admin_print_styles', 'print_emoji_styles');
    remove_action( 'wp_head', 'print_emoji_detection_script', 7);
    remove_action( 'wp_print_styles', 'print_emoji_styles');
    remove_filter( 'the_content_feed', 'wp_staticize_emoji');
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji');
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email');

    // 移除 block_library_css admin-bar-css
    function fanly_remove_block_library_css() {
        wp_dequeue_style('admin-bar');
        wp_dequeue_style('wp-block-library');
    }
    add_action('wp_enqueue_scripts', 'fanly_remove_block_library_css', 100);

    
    /**
     * 移除 WordPress 加载的JS和CSS链接中的版本号
     * https://www.wpdaxue.com/remove-js-css-version.html
     */
    function wpdaxue_remove_cssjs_ver( $src ) {
        if( strpos( $src, 'ver=' ) )
            $src = remove_query_arg( 'ver', $src );
        return $src;
    }
    add_filter( 'style_loader_src', 'wpdaxue_remove_cssjs_ver', 999 );
?>
