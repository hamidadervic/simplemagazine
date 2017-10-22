<?php get_header(); ?>

<div class="before-sidebar">
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