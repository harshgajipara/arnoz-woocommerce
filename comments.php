<div class="comments-area">
<a id="comments"></a>
<h4><?php echo get_comments_number(); ?> Comments</h4>


<?php if($comments) : ?>
    <div class="comment-list">
      <?php foreach($comments as $comment) : ?>
         <div id="comment-<?php comment_ID(); ?>" class="<?php if ($comment->user_id == 1) echo "authcomment";?>">
            <?php if ($comment->comment_approved == '0') : ?>
                <p>Your comment is awaiting approval</p>
                <?php endif; ?>
         <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
               <div class="thumb">
                  <img src="<?php echo get_avatar_url(get_comment_author_email()); ?>" alt="">
               </div>
               <div class="desc">
                  <p class="comment">
                     <?php comment_text(); ?>
                  </p>
                  <div class="d-flex justify-content-between">
                     <div class="d-flex align-items-center">
                        <h5>
                           <a href="<?php comment_author_link($comment); ?>"><?php echo get_comment_author($comment); ?></a>
                        </h5>
                        <p class="date"><?php echo get_comment_date(); ?><?php echo get_comment_time(); ?> </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    <?php endforeach; ?>
   </div>

<?php endif; ?> 

<?php if(comments_open()) : ?>
   <h4>Add Your Comment</h4>
    <?php if(get_option('comment_registration') && !$user_ID) : ?>  
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>  
        <form class="form-contact comment_form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            <?php if($user_ID) : ?>  
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>  
            <?php else : ?>  
                <div class="row">
        
         <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="author" id="author" type="text" value="<?php echo $comment_author; ?>" placeholder="Name" tabindex="2">
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="email" id="email" type="email" value="<?php echo $comment_author_email; ?>" placeholder="Email" tabindex="3">
            </div>
         </div>
         <div class="col-12">
            <div class="form-group">
               <input class="form-control" name="url" id="url" type="text" value="<?php echo $comment_author_url; ?>" placeholder="Website" tabindex="4">
            </div>
         </div>
      
            <?php endif;  ?>
             <div class="col-12">
            <div class="form-group">
               <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
               placeholder="Write Comment" tabindex="1"></textarea>
            </div>
         </div>
      </div>
            <?php //show_subscription_checkbox(); ?>
            <div class="form-group mt-3">
            <input class="btn_3 button-contactForm" name="submit" type="submit" id="submit" tabindex="5" value="Submit Message" />  
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
            <?php do_action('comment_form', $post->ID); ?>
        </form>
    <?php endif; ?>
<?php else : ?>  
    <p>The comments are closed.</p>
<?php endif;  ?>
</div>
</div>