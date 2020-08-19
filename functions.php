<?php

function load_files(){

wp_enqueue_style('bootstrap',get_theme_file_uri('css/bootstrap.min.css'));
wp_enqueue_style('animate',get_theme_file_uri('css/animate.css'));
wp_enqueue_style('owl.carousel',get_theme_file_uri('css/owl.carousel.min.css'));
wp_enqueue_style('all',get_theme_file_uri('css/all.css'));
wp_enqueue_style('flaticon',get_theme_file_uri('css/flaticon.css'));
wp_enqueue_style('themify-icons',get_theme_file_uri('css/themify-icons.css'));
wp_enqueue_style('magnific-popup',get_theme_file_uri('css/magnific-popup.css'));
wp_enqueue_style('slick',get_theme_file_uri('css/slick.css'));
wp_enqueue_style('style',get_theme_file_uri('css/style.css'));
wp_enqueue_style('style1',get_theme_file_uri('style.css'));
wp_enqueue_style('nice-select',get_theme_file_uri('css/nice-select.css'));

wp_enqueue_script('jquery',get_theme_file_uri('js/jquery-1.12.1.min.js'),array(),'1.0',true);
wp_enqueue_script('popper',get_theme_file_uri('js/popper.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('bootstrap',get_theme_file_uri('js/bootstrap.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('jquery.magnific-popup',get_theme_file_uri('js/jquery.magnific-popup.js'),array('jquery'),'1.0',true);
wp_enqueue_script('js/swiper.min.js',get_theme_file_uri('js/swiper.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('masonry',get_theme_file_uri('js/masonry.pkgd.js'),array(),'1.0',true);
wp_enqueue_script('owl.carousel',get_theme_file_uri('js/owl.carousel.min.js'),array(),'1.0',true);
wp_enqueue_script('jquery.nice-select',get_theme_file_uri('js/jquery.nice-select.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('slick',get_theme_file_uri('js/slick.min.js'),array(),'1',true);
wp_enqueue_script('jquery.counterup',get_theme_file_uri('js/jquery.counterup.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('waypoints',get_theme_file_uri('js/waypoints.min.js'),array(),'1',true);
//wp_enqueue_script('contact',get_theme_file_uri('js/contact.js'),array(),'1',true);
//wp_enqueue_script('jquery.ajaxchimp',get_theme_file_uri('js/jquery.ajaxchimp.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('jquery.form',get_theme_file_uri('js/jquery.form.js'),array('jquery'),'1.0',true);
wp_enqueue_script('jquery.validate',get_theme_file_uri('js/jquery.validate.min.js'),array(),'1.0',true);
//wp_enqueue_script('mail-script',get_theme_file_uri('js/mail-script.js'),array('jquery'),'1.0',true);
wp_enqueue_script('custom',get_theme_file_uri('js/custom.js'),array(),'1.0',true);

}

add_action('wp_enqueue_scripts','load_files');

add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

function register_menus(){

	register_nav_menu('headerMenuLocation','Header Menu Location');
	register_nav_menu('footerMenuLocation1','Footer Menu 1');
	register_nav_menu('footerMenuLocation2','Footer Menu 2');
	register_nav_menu('footerMenuLocation3','Footer Menu 3');
	register_nav_menu('footerMenuLocation4','Footer Menu 4');
}

add_action('after_setup_theme','register_menus');

require_once 'wp-bootstrap-navwalker.php';


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

add_theme_support('woocommerce');

//product thumbnail effect support
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

function best_seller(){ ?>

	<!-- product_list part start-->
    <section class="product_list best_seller">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">

                    	<?php $best = new WP_Query(array(
                    		'post_type'=>'product',
                    		'posts_per_page'=>-1,
                    		'order'=>'desc',
                    		'orderby'=>'meta_value_num',
                    		'meta_key'=>'total_sales'
                    	));
                        global $product;
                    	while($best->have_posts()){
                    		$best->the_post();
                    	?>

                        <div class="single_product_item">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <div class="single_product_text">
                                <h4><?php the_title(); ?></h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>

                    <?php } wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

<?php }

add_shortcode('bestProducts','best_seller');

include_once 'include/wc-modification.php';

function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Shop page Sidebar', 'my-shop' ),
        'id'            => 'sidebar-shop',
        'before_widget' => '<aside id="%1$s" class="shop-widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="shop-widget-title">',
        'after_title'   => '</h3>',
    ) );

    /*register_sidebar( array(
        'name'          => __( 'Shop page top bar', 'my-shop' ),
        'id'            => 'topbar-shop',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="shop-widget-title">',
        'after_title'   => '</h3>',
    ) );*/
}
add_action('widgets_init','themename_widgets_init');