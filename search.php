<?php get_header(); ?>

<div class="before-sidebar">
       <p class="text-center" style="opacity: 0.5"> Rezultati pronađeni za: <?php the_search_query(); ?> </p>
<ul>
<?php
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
      <li>
      <?php get_template_part('content'); ?>
      </li>  
   <?php endwhile;
endif;
?>
</ul>
   <div style="width: 100%;text-align: center;">
       <?php echo paginate_links(); ?>  
   </div>
</div>
<?php 
get_sidebar(); 
get_footer(); ?>