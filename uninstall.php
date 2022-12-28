<?php
// if uninstall.php is not called by WordPress, die
//if anything other than WordPress tries to access the file, the script will exit immediately.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
die;
}

$option_name = 'wporg_option';

delete_option( $option_name );

// for site options in Multisite
delete_site_option( $option_name );

// drop a custom database table
global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}mytable" );