<?php

function wp_plugin_development_callback(){
    //do something
}

add_action( 'init', 'wporg_callback' );

function wporg_filter_title( $title ) {
    return 'The ' . $title . ' was filtered';
}
add_filter( 'the_title', 'wporg_filter_title' );