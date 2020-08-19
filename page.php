<?php get_header(); ?>

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

<div class="container">
	<div class="row">
		
		<?php 
				while(have_posts()){
					the_post();
					?>

					<article class="col">
						<p class="card-text"><?php the_content(); ?></p>
					</article>
			
			<?php  } ?>

	</div>
</div>

<?php get_footer(); ?>