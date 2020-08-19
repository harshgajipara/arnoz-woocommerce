<?php get_header(); ?>

 <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">

                        <?php if( have_rows('hero_slider') ): ?>
                            
                            <?php while( have_rows('hero_slider') ): the_row();
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                $link = get_sub_field('link');
                                $image = get_sub_field('image');
                                ?>

                                <div class="single_banner_slider">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-8">
                                            <div class="banner_text">
                                                <div class="banner_text_iner">
                                                    <h1><?php echo $title; ?></h1>
                                                    <p><?php echo $description; ?></p>
                                                    <a href="<?php echo $link; ?>" class="btn_2">buy now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner_img d-none d-lg-block">
                                            <img src="<?php echo $image; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                            <?php endwhile; ?>
                            
                        <?php endif; ?>

                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Featured Category</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">

                <?php if( have_rows('featured') ): ?>
                    
                    <?php while( have_rows('featured') ): the_row();
                        $image = get_sub_field('image');
                        $link = get_sub_field('link');
                        $title = get_sub_field('title');
                        $heading = get_sub_field('heading');
                        ?>

                        <?php if(($i%2)==0): ?>
                        <div class="col-lg-7 col-sm-6">
                            <div class="single_feature_post_text">
                                <p><?php echo $title; ?></p>
                                <h3><?php echo $heading; ?></h3>
                                <a href="<?php echo $link; ?>" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                                <img src="<?php echo $image; ?>" alt="">
                            </div>
                        </div>
                    
                    <?php endif; $i++; ?>

                        <?php if(($i%2)==0): ?>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_feature_post_text">
                                <p><?php echo $title; ?></p>
                                <h3><?php echo $heading; ?></h3>
                                <a href="<?php echo $link; ?>" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                                <img src="<?php echo $image; ?>" alt="">
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php endwhile; ?>

                        <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>awesome <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">

                                 <?php echo do_shortcode('[products limit="8" columns="4" orderby="popularity"]'); ?>

                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product_list part start-->


    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>my category<span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">

                                <?php echo do_shortcode('[products limit="8" columns="4" orderby="popularity"]'); ?>

                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <?php $offer = get_field('offer'); ?>
                        <img src="<?php echo $offer['image']; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2><?php echo $offer['title']; ?></h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->

   <?php echo do_shortcode('[bestProducts]'); ?>

    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <?php echo do_shortcode('[mc4wp_form id="51"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">

                    <?php if( have_rows('clients_logo') ): ?>
                        
                        <?php while( have_rows('clients_logo') ): the_row();
                            $image = get_sub_field('image');
                            ?>

                            <div class="single_client_logo">
                                <img src="<?php echo $image; ?>" alt="">
                            </div>
                        
                        <?php endwhile; ?>
                        
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

<?php get_footer(); ?>