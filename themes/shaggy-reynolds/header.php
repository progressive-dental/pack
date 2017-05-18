<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shaggy_reynolds
 */

global $progressive

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel='preconnect' href='//www.google-analytics.com' />
  <link rel='preconnect' href='//fonts.googleapis.com' />
  <?php if( !empty( $progressive['theme-color'] ) ) : ?>
  <meta content="<?php echo $progressive['theme-color']; ?>" name="theme-color">
  <meta content="<?php echo $progressive['theme-color']; ?>" name="msapplication-TileColor">
  <?php endif; ?>
  <?php if( !empty( $progressive['favicon']['url'] ) ) : ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $progressive['favicon']['url']; ?>">
  <?php endif; ?>
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php 
  if( $progressive['header-scripts'] ) :
    echo $progressive['header-scripts'];
  endif; 
  if( $progressive['header-styles'] ) :
    echo $progressive['header-styles'];
  endif;
  ?>
</head>
<body <?php body_class(); ?>>
  <div id="page">
    <header class="page-head  Fixed">
      <div class="container">
        <div class="page-head__logo">
          <a href="<?php echo esc_url( home_url() ); ?>" class="logo  logo--header">
            <img src="<?php echo $progressive['nav-logo']['url']; ?>" alt="<?php echo $progressive['site-name']; ?>">
          </a>
        </div>
        <div class="page-head__nav">
          <?php if( has_nav_menu( 'contact-menu' ) ) : ?>
          <ul class="site-nav__contact">
            <?php wp_nav_menu( array( 'theme_location' => 'contact-menu', 'items_wrap' => '%3$s', 'container' => false, 'menu_class' => false, 'walker' => new Wpse8170_Menu_Walker() ) ); ?>
          </ul>  
          <?php endif; ?>
          <?php if( has_nav_menu( 'contact-menu' ) ) : ?>
          <ul class="site-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'items_wrap' => '%3$s', 'container' => false, 'menu_class' => false, 'walker' => new Wpse8170_Menu_Walker() ) ); ?>
          </ul>
          <a href="#menu" class="site-nav__open">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </header>
