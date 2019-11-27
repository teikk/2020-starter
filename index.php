<?php
  get_header();
  $context = \Timber\Timber::get_context();
  $context['posts'] = new \Timber\PostQuery;
  $context['title'] = get_the_title( get_option('page_for_posts') );
  \Timber\Timber::render('index.twig', $context);
  get_footer();
?>
