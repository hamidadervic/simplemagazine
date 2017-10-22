<?php get_header(); ?>

<div id="front-page">
     <div class="inside-front">
          <div id="slider">
              <?php
                  $cat1 = NEW WP_Query("cat=2&posts_per_page=4");
                  if ( $cat1->have_posts() ) {
                  	  while ( $cat1->have_posts() ) {
                  	  	  $cat1->the_post(); ?>
                  	  	  <div class="slider-post">
                               <div class="slider-image">
                                   <?php the_post_thumbnail(); ?>
                               </div>
                               <div class="newest-post-title">
                               <a href="<?php the_permalink(); ?>"> 
                                 <h4>  
                                   <?php echo max_title_length(55,get_the_title()); ?>  
                                 </h4>
                              </a>
                           </div>
                  	  	  </div>
                  	  <?php }
                  }
               ?>
          </div>

          <div id="newest">
           <?php 
                $cat2 = NEW WP_Query("cat=2&posts_per_page=4");
                    if ( $cat2->have_posts() ) {
                    	 while ( $cat2->have_posts() ) {
                    	 	$cat2->the_post(); ?>
                    	 	<div class="new-post">
                           <div class="newest-post-image">
                               <?php the_post_thumbnail(); ?>
                           </div>
                    	 	   <div class="newest-post-title">
                               <a href="<?php the_permalink(); ?>"> 
                                 <h4>  
                                   <?php echo max_title_length(55,get_the_title()); ?>  
                                 </h4>
                              </a>
                           </div>
                    	 	</div>
                    	 <?php }
                    } ?>             
           </div>
     </div>

     <div class="inside-front">

          <?php $cat3 = NEW WP_Query("cat=1&posts_per_page=6");
                if ( $cat3->have_posts() ) {
                    while ( $cat3->have_posts() ) {
                        $cat3->the_post(); ?>
                        <div class="inline-post">
                              <div class="inline-post-img">
                                    <?php the_post_thumbnail(); ?>
                              </div>
                              <div class="inline-post-content">
                                  <a href="<?php the_permalink(); ?>">
                                      <h3> <?php echo max_title_length(55, get_the_title()); ?> </h3>
                                  </a>
                                  <p> <?php echo max_title_length(60, get_the_excerpt()); ?></p>
                              </div>
                        </div>
                   <?php }
                } ?>
     </div>

      <div class="inside-front">

          <?php $cat3 = NEW WP_Query("cat=1&posts_per_page=6");
                if ( $cat3->have_posts() ) {
                    while ( $cat3->have_posts() ) {
                        $cat3->the_post(); ?>
                        <div class="inline-post">
                              <div class="inline-post-img">
                                    <?php the_post_thumbnail(); ?>
                              </div>
                              <div class="inline-post-content">
                                  <a href="<?php the_permalink(); ?>">
                                      <h3> <?php echo max_title_length(55, get_the_title()); ?> </h3>
                                  </a>
                                  <p> <?php echo max_title_length(60, get_the_excerpt()); ?></p>
                              </div>
                        </div>
                   <?php }
                } ?>
     </div>
</div>


<?php get_footer(); ?>