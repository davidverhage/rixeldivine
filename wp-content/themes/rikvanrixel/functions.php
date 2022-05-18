<?php
/**
 * Load any and all php files stored in the lib folder
 */

	$folder = get_template_directory() .'/library/';
	$files  = glob( $folder . "*.php" ); // return array files
	foreach ( $files as $phpFile ) {
		require_once( "$phpFile" );
	}