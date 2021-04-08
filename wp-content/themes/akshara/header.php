<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?php echo bloginfo('template_directory');?>/assets/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header">
  <div class="wrapper">
    <div class="header-col-1"><a href="<?php echo home_url();?>"><img src="<?php echo bloginfo('template_directory');?>/assets/images/logo.png" alt=""/></a></div>
    <div class="header-col-2">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav', 'menu_id' => 'primary-menu' ) ); ?>
    </div>
    <div class="header-col-3">
      <ul class="top-nav">
        <li><a href="#"></a></li>
        <li><a href="#">Apply Now</a></li>
        <li><a href="#">ENROLL</a></li>
      </ul>
    </div>
  </div>
</div>
