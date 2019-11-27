<?php
  get_header();
  $context = \Timber\Timber::get_context();
  \Timber\Timber::render('404.twig', $context);
  get_footer();
?>
