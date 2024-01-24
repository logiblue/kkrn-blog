<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kkkrn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kkkrn' ); ?></a>

	<header id="masthead" class="site-header container center">
		<div class="site-header__container">
			<div class="site-header__img-cpt"></div>
			<img src="<?php echo get_bloginfo('url') ?>/wp-content/themes/kkrn/images/kk.webp" alt="">
			<a href="<?php echo get_bloginfo('url') ?>/wp-content/themes/kkrn/images/kk.webp"><h6>Konstantinos Karanikolas</h6>
		</div>
	</header><!-- #masthead -->
