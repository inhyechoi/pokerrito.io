<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function pokerrito_frontpage_css() {
	if (is_page_template('front-page.php')){
        return;
    } elseif (!is_page_template('front-page.php')){
        $hero_fb = CFS()->get('hero_fb');

        $hero_css = "
        .home .hero-banner {
            background: url($hero_fb) no-repeat center bottom;
            background-size: cover;
        }";

        wp_add_inline_style( 'vpw-style', $hero_css );
    }
}
add_action( 'wp_enqueue_scripts', 'pokerrito_frontpage_css' );