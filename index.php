<?php get_header(); ?>

<h1>INDEXXXX</h1>

<?php

if( have_posts() ):
  while( have_posts() ) : the_post();

    the_date();
    the_title('<h1>', '</h1>');
    the_content();
    echo get_the_category_list( ', ');
  endwhile;
endif;

 ?>

<?php get_footer(); ?>
