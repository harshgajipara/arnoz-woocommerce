<?php get_header(); ?>

   <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2><?php the_title(); ?></h2>
                            <p>Home <span>-</span> <?php the_title(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                    	<?php

                    	$blog = new WP_Query(array(
                    		'post_type'=>'post',
                    		'posts_per_page'=>5,
                    	));

                    	 while($blog->have_posts()){
                    		$blog->the_post();
                    	 ?>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?php the_time('d'); ?></h3>
                                    <p><?php the_time('M'); ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> <?php echo get_the_category_list(', '); ?></a></li>
                                    <li><i class="far fa-comments"></i> <?php echo get_comments_number(); ?> Comments</li>
                                </ul>
                            </div>
                        </article>

                    <?php } ?>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<?php get_footer(); ?>