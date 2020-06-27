<?php

function loadCSS() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css', array(), false, 'all');
    wp_enqueue_style('animate');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'loadCSS');

//Load Javascript
function loadJS() {
    
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'));
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'loadJS');

//Fix for Screen Options
function fixOptions() {
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', 'jquery', false, true);
    wp_enqueue_script('scripts');
}

add_action('admin_enqueue_scripts', 'fixOptions');

//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
    )
);

include_once( dirname( __FILE__ ) . '/includes/kirki/kirki.php' );

function pulse_kirki_configuration() {
    return array( 'url_path'     => get_stylesheet_directory_uri() . '/includes/kirki/' );
}
add_filter( 'kirki/config', 'pulse_kirki_configuration' );

function pulse_kirki_sections( $wp_customize ) {
	/**
	 * Add sections
	 */
     $wp_customize->add_section( 'header_background', array(
 		'title'       => __( 'Header Section', 'kirki' ),
         'priority'    => 10,
         
 	) );

     $wp_customize->add_section( 'menu_section', array(
 		'title'       => __( 'Menu Section', 'kirki' ),
 		'priority'    => 20,
 		
     ) );
     
     $wp_customize->add_section( 'about_section', array(
        'title'       => __( 'About Section', 'kirki' ),
        'priority'    => 20,
        
    ) );

    $wp_customize->add_section( 'whatwedo_section', array(
        'title'       => __( 'What We Do Section', 'kirki' ),
        'priority'    => 20,
        
    ) );

    $wp_customize->add_section( 'footer_section', array(
        'title'       => __( 'Footer', 'kirki' ),
        'priority'    => 20,
        
    ) );


}
add_action( 'customize_register', 'pulse_kirki_sections' );


function pulse_kirki_fields( $fields ) {
    //MENU SECTION
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'menu_section_logo1',
        'label'       => __( 'Choose Your Logo for this section', 'kirki' ),
        'description' => __( 'Upload Your Logo', 'kirki' ),
        'section'     => 'menu_section',
        'priority'    => 11,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'menu_section_logo2',
        'label'       => __( 'Choose Your Secondary Logo for this section', 'kirki' ),
        'description' => __( 'Upload Your Secondary Logo', 'kirki' ),
        'section'     => 'menu_section',
        'priority'    => 12,
        'default'     => ''
    );

    //ABOUT SECTION
    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'about_headline_text',
        'label'       => __( 'Type your Headline text', 'kirki' ),
        'description' => __( 'This is where you add your Headline Text', 'kirki' ),
        'section'     => 'about_section',
        'priority'    => 11,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'about_body_text',
        'label'       => __( 'Type your body text', 'kirki' ),
        'description' => __( 'This is where you add your About Text', 'kirki' ),
        'section'     => 'about_section',
        'priority'    => 11,
        'default'     => ''
    );

    //WHAT WE DO SECTION
    $fields[] = array(
        'type'        => 'background',
        'settings'    => 'whatwedo_background',
        'label'       => __( 'Choose the background for this section', 'kirki' ),
        'description' => __( 'The background you specify here will apply to this section area.', 'kirki' ),
        'section'     => 'whatwedo_section',
        'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
        ),
        'priority'    => 13,
        'output'      => '#whatwedo'
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'whatwedo_headline_text',
        'label'       => __( 'Type your What We do text', 'kirki' ),
        'description' => __( 'This is where you add your What We Do Text', 'kirki' ),
        'section'     => 'whatwedo_section',
        'priority'    => 11,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'whatwedo_body_text',
        'label'       => __( 'Type your What We Do text', 'kirki' ),
        'description' => __( 'This is where you add your What We Do Text', 'kirki' ),
        'section'     => 'whatwedo_section',
        'priority'    => 11,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'whatwedo_image',
        'label'       => __( 'Choose Your Image for this section', 'kirki' ),
        'description' => __( 'Upload Your Image', 'kirki' ),
        'section'     => 'whatwedo_section',
        'priority'    => 12,
        'default'     => ''
    );

    //FOOTER SECTION
    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'footer_image',
        'label'       => __( 'Choose Your Footer Logo', 'kirki' ),
        'description' => __( 'Upload Your Logo', 'kirki' ),
        'section'     => 'footer_section',
        'priority'    => 12,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'footer_body_text',
        'label'       => __( 'Type your Footer text', 'kirki' ),
        'description' => __( 'This is where you add your Footer Text', 'kirki' ),
        'section'     => 'footer_section',
        'priority'    => 11,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'footer_copyright_text',
        'label'       => __( 'Type your Copyright text', 'kirki' ),
        'description' => __( 'This is where you add your Copyright Text', 'kirki' ),
        'section'     => 'footer_section',
        'priority'    => 11,
        'default'     => ''
    );

    return $fields;

}
add_filter( 'kirki/fields', 'pulse_kirki_fields' );
