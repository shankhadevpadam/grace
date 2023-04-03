<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Page Link redirection
function ilovemylook_redirect_url($template)
{
    $current_url = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $parsed_url = parse_url($current_url);
    $query_params = isset($parsed_url['query']) ? wp_parse_args($parsed_url['query']) : '';
    $action = $query_params['page_id'] ?? '';

    switch ($action) {
        case '14': // enter page id here, here 6 is page id
            $template = __DIR__ . '/templates/template-services.php';
            break;
        
        case '16':
            $template = __DIR__ . '/templates/template-support-star.php';
            break;

        case '6':
            $template = __DIR__ . '/templates/template-404.php';
            break;
            
        case '13':
            $template = __DIR__ . '/templates/template-gallery.php';
            break;
        
        case '11':
            $template = __DIR__ . '/templates/template-blogs.php';
            break;
    
        case '27':
            $template = __DIR__ . '/templates/template-about.php';
            break;
        
        case '24':
            $template = __DIR__ . '/templates/template-contact.php';
            break;
            
        case '22':
            $template = __DIR__ . '/templates/template-blog-single.php';
            break;
        
        case '15':
            $template = __DIR__ . '/templates/template-services-single.php';
            break;
    
        case '20':
            $template = __DIR__ . '/templates/template-services-core.php';
            break;
        
        case '17':
            $template = __DIR__ . '/templates/template-privacy-policy.php';
            break;

        case '34':
            $template = __DIR__ . '/templates/template-pricing.php';
            break;

        default:
            break;
    }
    return $template;
}
add_filter('template_include', 'ilovemylook_redirect_url');
