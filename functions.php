<?php

function add_style () {

    wp_enqueue_style('custem', get_template_directory_uri() . '/css/custem.css'; );

}

function add_script () {

    wp_enqueue_script('custem', get_template_directory_uri() . '/js/custem.js', array() ,false ,true );

}


add_action('wp_enqueue_scripts', 'add_style') ;
add_action('wp_enqueue_scripts', 'add_script') ;