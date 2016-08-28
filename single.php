<?php get_header(); ?>

<h1>SINGLEEEEE</h1>

<?php

if( have_posts() ):
  while( have_posts() ) : the_post();

    the_title('<h1>', '</h1>');
    the_date();
    the_content();

    // print_r($post);
    // echo '</pre>';

  endwhile;
endif;

 ?>

<?php get_footer(); ?>
