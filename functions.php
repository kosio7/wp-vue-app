<?php

if ( ! function_exists( 'myfirsttheme_setup' ) ) :    
    function myfirsttheme_setup() {
        wp_enqueue_script( 'vue', get_template_directory_uri() . '/lib/vue.js');
        wp_enqueue_script( 'vue-router', get_template_directory_uri() . '/lib/vue-router.js');
        wp_enqueue_script( 'vue-resource', get_template_directory_uri() . '/lib/vue-resource.js');
        wp_enqueue_script( 'vuetify', "https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js");
        wp_enqueue_script( 'moment', get_template_directory_uri() . '/lib/moment.js');
        wp_enqueue_script( 'App', get_template_directory_uri() . '/js/App.js');

        wp_enqueue_style('vuetify', "https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css");
        wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons');
    }
    endif;
    add_action( 'wp_enqueue_scripts', 'myfirsttheme_setup' );
