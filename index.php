<?php get_header(); ?>


 <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2><?php the_title(); ?></h2>
              <p>Home <span>-</span>Cart Products</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->	

<div class="container">
	<div class="row">
 
		
		<?php 
				while(have_posts()){
					the_post();
					?>
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						<p class="card-text"><?php the_content(); ?></p>
			
		<?php  } ?>

	</div>
</div>

<?php get_footer(); ?>