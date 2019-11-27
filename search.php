<?php
  get_header();
  $context = \Timber\Timber::get_context();
  $context['posts'] = new \Timber\PostQuery;
  $context['title'] = 'Wyniki wyszukiwania';
  $context['search_query'] = get_search_query();
  $context['has_slider'] = false;
  \Timber\Timber::render('search.twig', $context);
  get_footer();
?>
