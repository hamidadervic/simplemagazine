
<?php

get_header(); ?>

<div class="before-sidebar">
 <?php if ( have_posts() ) : ?>
  <p class="text-center" style="opacity: 0.5">
   <?php

  if( is_category() ){
    single_cat_title();
  }
  else if( is_author() ){
    echo "Author:" . get_the_author();
  }
  else if( is_tag() ){
    single_tag_title();
  }
  else if( is_month() ){
    echo "Mjesec:" . get_the_date("F Y");
  }
  else if( is_year() ){
    echo "Godina:" . get_the_date("Y");
  }
  else if( is_day() ){
    echo "Dan:" . get_the_date();
  }
  else {
    echo "Arhiva:";
  }

  ?>
</p>

<ul>
<?php while ( have_posts() ) : the_post(); ?>
  <li>
  <?php get_template_part('content'); ?>
  </li>
<?php endwhile;
  else :
    echo "<p> Nema razultata </p>";
 endif; ?>
</ul>
</div>
<?php 
get_sidebar();
get_footer();
?>

