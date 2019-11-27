<?php
  get_header();
  $context = \Timber\Timber::get_context();
  $queried = get_queried_object();
  $context['posts'] = new \Timber\PostQuery;
  $context['term'] = new \Timber\Term($queried->id);

  \Timber\Timber::render(
    [
      'archives/'.$queried->taxonomy.'.twig',
      'index.twig'
    ]
    , $context);
  get_footer();
?>
