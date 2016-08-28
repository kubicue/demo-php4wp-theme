<!--

1. Show the site name in the header
2. Get the stylesheet back in (hint: enqueue)

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>

<header>
  <h1><a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('title'); ?></a></h1>
  <?php echo get_bloginfo('description'); ?>
</header>
