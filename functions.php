<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php'); 

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add button class to read more excerpt links
add_filter( 'the_content_more_link', 'add_morelink_classes' );
function add_morelink_classes( $more_link_html ) {

	$new_classes = array( 'button' );
	$more_link_html = str_replace( 'class="more-link', 'class="' . implode( ' ', $new_classes ) . ' more-link', $more_link_html );

	return $more_link_html;
}

?>