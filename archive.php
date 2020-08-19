<?php get_header(); ?>

  <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2><?php the_archive_title(); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_area padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                    	<?php

                    	 while(have_posts()){
                    		the_post();
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
                                    <li><a href="#"><i class="far fa-comments"></i> <?php echo get_comments_number(); ?> Comments</a></li>
                                </ul>
                            </div>
                        </article>

                    <?php } ?>

                </div>
            </div>
        <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>