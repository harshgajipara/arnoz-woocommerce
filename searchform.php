 <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
   <div class="form-group">
      <div class="input-group mb-3">
         <input id="<?php echo $unique_id; ?>" type="text" class="form-control" placeholder='Search Keyword'
         onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" value="<?php echo get_search_query(); ?>" name="s">
         <div class="input-group-append">
            <button class="btn" type="button"><i class="ti-search"></i></button>

         </div>
      </div>
   </div>
   <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
   <input type="hidden" value="post" name="post_type" id="post_type" />
</form>