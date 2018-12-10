<?php

    function naga_load_admin_script( $hook ){
      if( 'toplevel_page_naga-theme' == $hook ){
          wp_enqueue_style( 'naga', get_template_directory_uri() . '/assets/css/naga-style.css', array(), '1.0.0', 'all' );
      }
      //echo $hook;
    }

    add_action('admin_enqueue_scripts', 'naga_load_admin_script');


    add_theme_support( 'post-thumbnails' );
