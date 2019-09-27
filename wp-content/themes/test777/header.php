<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test777
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>


<script type="text/javascript">
  jQuery(document).ready(function($) {

  	$('.menu-mobile-menu-container ul').prepend("<li class='m-menu__button--close'>&times;</li>");

    $(".m-menu__button--close").click(function() {
       $('.m-menu').removeClass('m-menu__active');
    });
  });
</script>

</head>

<body <?php body_class(); ?>>

		<header class="header">
			<a class="gumburger"><i class="fa fa-bars"></i></a>
		<div class="container">

			<div class="logo">Лого</div>

		</div>

		<div class="header__line">
			<div class="container">

				<?php
				wp_nav_menu( array(
						'theme_location' => 'headermenu',
						'menu_id' => 'header-menu',
						'menu_class' => 'main-menu__list',
						'container_class' => 'main-menu'
				))
				?>

				<?php
				wp_nav_menu( array(
						'theme_location' => 'mobilemenu',
						'menu_id' => 'mobilemenu',
						'menu_class' => 'm-menu',
				))
				?>

			</div>
		</div>

	</header>


	<div id="content" class="site-content">
