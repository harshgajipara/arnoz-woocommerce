<div class="col-lg-4">
   <div class="blog_right_sidebar">
      <aside class="single_sidebar_widget search_widget">
        <?php get_search_form(); ?>
      </aside>
      <aside class="single_sidebar_widget post_category_widget">
         <h4 class="widget_title">Category</h4>
         <ul class="list cat-list">

            <?php
            $categories = get_categories($id);
            foreach($categories as $category) {
               echo '<li>
               <a href="'. get_category_link($category->term_id) .'" class="d-flex">
               <p>'.$category->name.'</p>
               <p>('.$category->category_count.')</p>
               </a>
               </li>';
            }
            ?>
         </ul>
      </aside>
      <aside class="single_sidebar_widget popular_post_widget">
         <h3 class="widget_title">Recent Post</h3>

         <?php $blog = new WP_Query(array(
            'post_type'=>'post',
            'posts_per_page'=>4,
            'order'=>'desc',
         )); 

            while($blog->have_posts()){
               $blog->the_post();
         ?>

         <div class="media post_item">
            <img height="80px" width="100px" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="post">
            <div class="media-body">
               <a href="<?php the_permalink(); ?>">
                  <h3><?php echo wp_trim_words(get_the_title(), 15); ?></h3>
               </a>
               <p><?php the_time('F j, Y'); ?></p>
            </div>
         </div>
      <?php } ?>

         
      </aside>
      <aside class="single_sidebar_widget tag_cloud_widget">
         <h4 class="widget_title">Tag Clouds</h4>
         <ul class="list">
             <?php
             $tags = get_tags();
                    
              foreach ( $tags as $tag ) : ?>
               <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"><?php echo esc_html( $tag->name ); ?></a>
               </li>
             <?php endforeach; ?>
        
         </ul>
      </aside>
      <aside class="single_sidebar_widget instagram_feeds">
         <h4 class="widget_title">Instagram Feeds</h4>
         <ul class="instagram_row flex-wrap">
            <?php echo do_shortcode('[instagram-feed]'); ?>
         </ul>

         <?php

        /*function fetchData($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch); 
        return $result;
        }

        $result = fetchData("https://api.instagram.com/v1/users/harsh_gajipara/media/recent/?access_token=ACCES TOKEN HERE&count=14");


        $result = json_decode($result);
        foreach ($result->data as $post) {
           if(empty($post->caption->text)) {
             // Do Nothing
           }
           else {
              echo '<li>
              <a target="blank" href="'.$post->link.'">
              <img class="img-fluid" src="'.$post->images->low_resolution->url.'" alt="'.$post->caption->text.'">
              </a>
              </li>';
           }

        }*/
      ?>


      </aside>
      <aside class="single_sidebar_widget newsletter_widget">
         <h4 class="widget_title">Newsletter</h4>
         <?php echo do_shortcode('[mc4wp_form id="51"]'); ?>
      </aside>
   </div>
</div>