
<div class="<?php if ( is_single() ) { ?> 
                  feautured-image-single <?php } 
                  else { ?> 
                  feautured-image-index <?php 
                  } ?>">
    <?php the_post_thumbnail(); ?>
</div>

<?php if ( is_single() ) { ?>
   <div class="informations">
       <p> Autor: <?php the_author_posts_link(); ?> <br/> 
       Objavljeno: <?php the_time("j. m. Y");?> <br/>
       Kategorije: 
       <?php 
			$categories = get_the_category();
			$separator= ", ";
			$output = "";

			if($categories) {

				foreach ( $categories as $category)  {     	  	  
					$output .= '<a href="'. get_category_link($category) .'">'. $category->cat_name .' </a> ' . $separator;
				}

				echo trim($output, $separator);
			}

			?> 
	   </p>
   </div>
<?php } ?>

<div class="the-content-index">
     
     <?php if ( is_single() ) { ?>
           <h2> <?php echo get_the_title(); ?> </h2>
     <?php } else  { ?>
           <a href="<?php the_permalink(); ?>"> 
               <h3> <?php echo max_title_length(60, get_the_title()); ?> </h3> 
           </a>      
     <?php } ?>

     <p>
     <?php if ( is_single() ) {
     	       the_content();
            } else {
     	        echo max_title_length(180, get_the_excerpt()); 
            } ?>
      </p>

   <?php if ( is_single() ) { ?>
    <div class="related-div">
             <p style="opacity: 0.5; font-size: 11px;"> 
     Povezano: </p>
      <?php 
      $categories = get_the_category();
      $last_cat_ID;

      if($categories) {

        foreach ( $categories as $category)  {            
          $last_cat_ID = $category->cat_ID;
        }

        $show_related_post = NEW WP_Query("cat=".$last_cat_ID."&posts_per_page=4");
        if ( $show_related_post->have_posts() ) {
             while ( $show_related_post->have_posts() ) {
                  $show_related_post->the_post(); ?>
                  <a href="<?php the_permalink(); ?>">
                    <div class="related-post">
                          <div class="related-image">
                            <?php the_post_thumbnail(); ?>
                          </div>
                          <strong> <?php echo max_title_length(45, get_the_title()); ?> </strong>
                    </div>
                  </a>
            <?php }
        }
      } 
      ?> 
    </div>
   <?php } ?>
</div>

