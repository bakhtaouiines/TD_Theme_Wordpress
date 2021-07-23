<?php
// le fichier functions.php permet d’ajouter des fonctionnalités au sein de votre thème WordPress

//  Register and Enqueue Styles & Scripts
function add_css_and_js()
{
    wp_register_style('main-style', get_template_directory_uri() . '/style.css', array(), true);
    wp_register_style('sass-style', get_template_directory_uri() . '/style.sass', array(), true);
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/fontawesome-all.min.css', array(), true);
    wp_register_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), true);
    wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), true);
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), true);
    wp_register_script('browser', get_template_directory_uri() . '/js/browser.min.js', array(), true);
    wp_register_script('breakpoints', get_template_directory_uri() . '/js/breakpoints.min.js', array(), true);
    wp_register_script('util', get_template_directory_uri() . '/js/util.js', array(), true);
    wp_register_script('main-script', get_template_directory_uri() . '/js/script.js', array(), true);

    wp_enqueue_style('bootstrap-style');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('main-style');
    wp_enqueue_script('jquery');
    wp_enqueue_script('browser');
    wp_enqueue_script('breakpoints');
    wp_enqueue_script('util');
    wp_enqueue_script('main-script');
    wp_enqueue_script('bootstrap-js');
}


// initialisation du widget Sidebar

function add_widget_sidebar()
{
    register_sidebar(
        array(
            'name'          => 'Sidebar',
            'id'            => 'main-sidebar',
        )
    );
    register_sidebar(
        array(
            'name' => 'Sidebar du footer',
            'id' => 'footer-sidebar',
        )
    );
}

// initialisation du widget Menu

function register_my_menu()
{
    register_nav_menus(
        array(
            'main' => 'Menu Principal',
            'footer' => 'Menu Bas de Page',
            'social' => 'Menu Réseaux Sociaux',
            'side' => 'Menu bouton toggler'
        )
    );
}

// initialisation de custom 
function ib_theme_setup()
{
    add_theme_support('custom-background', array( // Permet d'ajouter un onglet servant à ajouter une image ou une couleur au background
        'default-image'          => '',
        'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
        'default-position-x'     => '',      // 'left', 'center', 'right'
        'default-position-y'     => '',     // 'top', 'center', 'bottom'
        'default-size'           => '',    // 'auto', 'contain', 'cover'
        'default-repeat'         => '',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
        'default-attachment'     => '',  // 'scroll', 'fixed'
        'default-color'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    ));

    // add_theme_support('custom-header', array( // Permet d'ajouter des éléments de custom à l'en-tête
    //     'default-image'          => '',
    //     'random-default'         => false,
    //     'width'                  => 200,
    //     'height'                 => 200,
    //     'flex-height'            => false,
    //     'flex-width'             => false,
    //     'default-text-color'     => '',
    //     'header-text'            => true,
    //     'uploads'                => true,
    //     'wp-head-callback'       => '',
    //     'admin-head-callback'    => '',
    //     'admin-preview-callback' => '',
    // ));

    add_theme_support('title-tag'); // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support('post-thumbnails'); // permet d’afficher l’image mise en avant
    set_post_thumbnail_size(350, 175, true);

    add_theme_support('custom-logo', array( // Permet d'ajouter un champ de téléchargement pour ajouter un logo au site
        'height'               => 200,
        'width'                => 200,
        'flex-height'          => false,
        'flex-width'           => false,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    ));
}

add_action('wp_enqueue_scripts', 'add_css_and_js');
add_action('widgets_init', 'register_my_menu');
add_action('widgets_init', 'add_widget_sidebar');
add_action('after_setup_theme', 'ib_theme_setup');
