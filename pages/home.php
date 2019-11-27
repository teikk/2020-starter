<?php
/**
 * Template name: Home
 */
?>
<?php
use Teik\Controller\HomeController;
use Timber\Timber;
get_header();
$controller = HomeController::instance();
$context = Timber::get_context();
$context['post'] = Timber::get_post();
$context['Controller'] = $controller;
Timber::render('home.twig', $context);
get_footer();
?>
