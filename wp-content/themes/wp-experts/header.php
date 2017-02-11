<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1, width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body id="cms-theme" <?php body_class('header-'.wp_experts_header_class() .' '. wp_experts_body_class() .' ' . wp_experts_body_border_class() . ''); ?>>
<?php 
	wp_experts_get_page_loading(); 
	wp_experts_body_border();
?>
<div id="page-wrapper" class="<?php wp_experts_page_class(); ?>">
	<header id="masthead" class="site-header">
		<?php wp_experts_header(); ?>
	</header><!-- #masthead -->
    <div id="cms-page-title-wrapper">
    	<?php wp_experts_page_title(); ?>
    </div> 
	<div id="main">