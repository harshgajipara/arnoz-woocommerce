<?php get_header(); ?>

<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="breadcrumb_iner">
               <div class="breadcrumb_iner_item">
                  <h2>BLOG</h2>
                  <p>Home <span>-</span> Blog</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- breadcrumb start-->
<!--================Blog Area =================-->
<section class="blog_area single-post-area padding_top">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">

           <?php while(have_posts()){
             the_post();
             ?>

             <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
               </div>
               <div class="blog_details">
                  <h2><?php the_title(); ?></h2>
                  <ul class="blog-info-link mt-3 mb-4">
                     <li><a href="#"><i class="far fa-user"></i> <?php echo get_the_category_list(', '); ?></a></li>
                     <li><i class="far fa-comments"></i> <?php echo get_comments_number(); ?> Comments</li>
                  </ul>

                  <?php the_content(); ?>

               <?php } ?>
            </div>
         </div>
         <div class="navigation-top">
            <div class="d-sm-flex justify-content-between text-center">
               <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> Lily and 4
               people like this</p>
               <div class="col-sm-4 text-center my-2 my-sm-0">
                  <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
               </div>
               <ul class="social-icons">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fab fa-behance"></i></a></li>
               </ul>
            </div>
            <div class="navigation-area">
               <div class="row">
                  <div
                  class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                  <div class="thumb">
                     <a href="#">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri(); ?>/img/post/preview.png" alt="">
                     </a>
                  </div>
                  <div class="arrow">
                     <a href="#">
                        <span class="lnr text-white ti-arrow-left"></span>
                     </a>
                  </div>
                  <div class="detials">
                     <p>Prev Post</p>
                     <a href="#">
                        <h4><?php previous_post_link(); ?></h4>
                     </a>
                  </div>
               </div>

               <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
               <div class="detials">
                  <p>Next Post</p>
                  <a href="#">
                     <h4><?php next_post_link(); ?></h4>
                  </a>
               </div>
               <div class="arrow">
                  <a href="#">
                     <span class="lnr text-white ti-arrow-right"></span>
                  </a>
               </div>
               <div class="thumb">
                  <a href="#">
                     <img class="img-fluid" src="<?php echo get_theme_file_uri(); ?>/img/post/next.png" alt="">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="blog-author">
      <div class="media align-items-center">
         <?php echo get_avatar(get_the_author_meta('ID')); ?>
         <div class="media-body">
            <a href="<?php ?>">
               <h4><?php the_author_posts_link(); ?></h4>
            </a>
            <p><?php the_author_description(); ?></p>
         </div>
      </div>
   </div>

   <?php comments_template(); ?>

</div>
<?php get_sidebar(); ?>
</div>
</div>
</section>
<!--================Blog Area end =================-->

<?php get_footer(); ?>