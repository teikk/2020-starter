<?php
  get_header();
  $context = \Timber\Timber::get_context();
  $queried = get_queried_object();
  $context['post'] = \Timber\Timber::get_post();
  echo '<pre>'.print_r($_SESSION,true).'</pre>';
  \Timber\Timber::render(
    [
      'single/'.$queried->post_type.'.twig',
      'single/post.twig'
    ],
    $context);
  get_footer();
?>
