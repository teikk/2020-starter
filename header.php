<!DOCTYPE html>

<!--[if lt IE 7]><html class="ie6"><![endif]-->
<!--[if IE 7]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

  <?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
  $thumb_url = $thumb_url_array[0];
  ?>

  <!-- General Meta START -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- General Meta END -->

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo teik_asset('icons/apple-icon-57x57.png');?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo teik_asset('icons/apple-icon-60x60.png');?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo teik_asset('icons/apple-icon-72x72.png');?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo teik_asset('icons/apple-icon-76x76.png');?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo teik_asset('icons/apple-icon-114x114.png');?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo teik_asset('icons/apple-icon-120x120.png');?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo teik_asset('icons/apple-icon-144x144.png');?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo teik_asset('icons/apple-icon-152x152.png');?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo teik_asset('icons/apple-icon-180x180.png');?>">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo teik_asset('icons/android-icon-192x192.png');?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo teik_asset('icons/favicon-32x32.png');?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo teik_asset('icons/favicon-96x96.png');?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo teik_asset('icons/favicon-16x16.png');?>">
  <link rel="manifest" href="<?php echo teik_asset('icons/manifest.json');?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo teik_asset('icons/ms-icon-144x144.png');?>">
  <meta name="theme-color" content="#f29209">

  <!-- Wordpress Head START -->
  <?php wp_head(); ?>
  <!-- Wordpress Head END -->

</head>
<body <?php body_class('page'); ?> data-contrast="normal">