<?php 
    add_action('wp_enqueue_scripts', 'languages_school_style_scripts');
    add_action('wp_enqueue_scripts', 'languages_school_js_scripts');

    function languages_school_style_scripts () {
        wp_enqueue_style('languages-school-bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('languages-school-slick', get_template_directory_uri() . '/assets/slick/slick.css');
        wp_enqueue_style('languages-school-style', get_template_directory_uri() . '/assets/css/style.css');
    };

    function languages_school_js_scripts () {
        wp_enqueue_script('languages-school-style', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
    }

    add_theme_support('menus');

    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if ($args->menu === 'Main') {
            $atts['class'] = 'header__nav-list-link';
        }
        return $atts;
    }

    add_action( 'init', 'register_cpt_lang' );
    function register_cpt_lang() {

        $labels = array(
        'name'               => 'Languages',
        'singular_name'      => 'Language',
        'add_new'            => 'Add Language',
        'add_new_item'       => 'Add new Language',
        'edit_item'          => 'Edit Language',
        'new_item'           => 'New Language',
        'all_items'          => 'All Languages',
        'view_item'          => 'View Language',
        'search_items'       => 'Search Language',
        'not_found'          => 'Not found Language',
        'not_found_in_trash' => 'Not found Language in trash',
        'menu_name'          => 'languages'
        );

        $args   = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_icon'     => 'dashicons-admin-multisite',
        'menu_position' => 7,
        'has_archive'   => false,
        'supports'      => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'    => array( 'post_tag' )
        );

        register_post_type( 'languages', $args );
    }

    add_action( 'init', 'register_cpt_additions' );
    function register_cpt_additions() {

        $labels = array(
        'name'               => 'Additions',
        'singular_name'      => 'Addition',
        'add_new'            => 'Add Addition',
        'add_new_item'       => 'Add new Addition',
        'edit_item'          => 'Edit Addition',
        'new_item'           => 'New Addition',
        'all_items'          => 'All Additions',
        'view_item'          => 'View Addition',
        'search_items'       => 'Search Addition',
        'not_found'          => 'Not found Addition',
        'not_found_in_trash' => 'Not found Addition in trash',
        'menu_name'          => 'addition'
        );

        $args   = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_icon'     => 'dashicons-admin-multisite',
        'menu_position' => 7,
        'has_archive'   => false,
        'supports'      => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'    => array( 'post_tag' )
        );

        register_post_type( 'additions', $args );
    }
    
    add_theme_support('title-tag');
