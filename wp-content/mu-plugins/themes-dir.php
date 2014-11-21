<?php
/* Plugin Name: Local Theme Roots */

/**
 * Create a custom theme directory on a custom domain.
 * Best used as mu plugin in a local development stack.
 * @param  string $root URL or path
 * @return string
 */

add_filter( 'theme_root_uri', 'switch_theme_root_local' );
add_filter( 'theme_root',     'switch_theme_root_local' );
function switch_theme_root_local( $root )
{
	if ( 0 !== stripos( strrev( $_SERVER['HTTP_HOST'] ), 'ved.' ) )
		return $root;

	// URl/URI handling
	if ( 'theme_root_uri' === current_filter() )
		return 'http://'.$_SERVER['HTTP_HOST'].'/wp-content/themes';

	// Path handling
	global $wp_theme_directories;

	// If we made it so far we are in the 'theme_root' filter.
	$new_root = dirname( __DIR__ ).'/themes';

	if ( ! isset( $wp_theme_directories ) )
		$wp_theme_directories = [ dirname( __DIR__ ).'/../wp/wp-content/themes/', ];

	# Too early to use register_theme_directory()
	if (
		isset( $wp_theme_directories )
		AND ! in_array( $new_root, $wp_theme_directories )
	)
		$wp_theme_directories[] = $new_root;

	return $new_root;
}