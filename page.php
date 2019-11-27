<?php
  get_header();
  $context = \Timber\Timber::get_context();
  $queried = get_queried_object();
  $context['post'] = \Timber\Timber::get_post();
  $context['queried_object'] = $queried;

  \Timber\Timber::render(
    ['page.twig'],
    $context);
  get_footer();
?>
