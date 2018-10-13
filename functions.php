<?php 
    function university_files(){
        wp_enqueue_script('main-univ-javascript', get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
        wp_enqueue_style('font awesome style', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('google font style', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    };

    add_action('wp_enqueue_scripts', 'university_files');

    function university_features(){
        add_theme_support('title_tag');
        // menu included

        register_nav_menu('headerMenuLoc', 'Header Menu 1');
        register_nav_menu('footerMenuLoc1', 'Footer Menu 1');
        register_nav_menu('footerMenuLoc2', 'Footer Menu 2');
    };

    add_action('after_setup_theme', 'university_features');
 ?>