<?php 
//Add Custom Logo
add_theme_support( 'custom-logo' );

/* Customizer Options for Menu/Nav Version 1
//Customize Appearance Options

function baghira_customize_register( $wp_customize ) {
    //Header BG Color Setting
    $wp_customize->add_setting('baghira_headerbg_color', array(
        'default' => '#363D42',
        'transport' => 'refresh',
    ));    
    
    //Header Settings Group Section
    $wp_customize->add_section('baghira_header_options', array(
        'title' => __('Customize Your Header', 'Baghira'),
        'priority' => 30,
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_headerbg_color_control', array(
        'label' => __('Change The Background Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_headerbg_color',
    ) ) );
    
    //Header Nav Link Setting
    $wp_customize->add_setting('baghira_headerlink_color', array(
        'default' => '#e5e5e5',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_headerlink_color_control', array(
        'label' => __('Change The Nav Link Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_headerlink_color',
    ) ) );    
    
    //Header Nav Hover Link Setting
    $wp_customize->add_setting('baghira_header_hover_link_color', array(
        'default' => '#1d868f',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_header_hover_link_color_control', array(
        'label' => __('Change The Nav Hover Link Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_header_hover_link_color',
    ) ) );
    //Header Nav Link Size Setting
    $wp_customize->add_setting('baghira_header_hover_link_color', array(
        'default' => '#1d868f',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_header_hover_link_color_control', array(
        'label' => __('Change The Nav Hover Link Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_header_hover_link_color',
    ) ) );  
    
    //Header Nav Link Size Setting
    $wp_customize->add_setting('baghira_header_nav_size', array(
        'default' => '16px',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'baghira_header_link_size_control', array(
        'label' => __('Change The Nav Link Size', 'Baghira'),
        'description' => __('Enter your new font size please include px'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_header_nav_size',
    ) ) );          

    //Header Nav Responsive Toggle Menu Button Color
    $wp_customize->add_setting('baghira_nav_toggle_color', array(
        'default' => '#000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_nav_toggle_color_control', array(
        'label' => __('Change The Toggle Button Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_nav_toggle_color',
    ) ) );        
}

add_action('customize_register', 'baghira_customize_register');

//Output Customize CSS

function baghira_customize_css() { ?>
    <style type="text/css">
        .bg-dark{
            background-color: <?php echo get_theme_mod('baghira_headerbg_color'); ?> !important;
        }
        
        ul.nav li a:link, 
        ul.nav li a:visited{
            color:<?php echo get_theme_mod('baghira_headerlink_color'); ?>;
        }
        ul.nav li a:hover{
            color:<?php echo get_theme_mod('baghira_header_hover_link_color'); ?>;
        }
        ul.nav li, ul.navbar-nav li{
            font-size:<?php echo get_theme_mod('baghira_header_nav_size'); ?>;
        }
        .toggle-button{
            color:<?php echo get_theme_mod('baghira_nav_toggle_color'); ?>;
        }
    </style>   
<?php }  

add_action('wp_head', 'baghira_customize_css');
End Comment for Version 1 Nav/Header */


// Customizer Options for Menu/Nav Version 2
//Customize Appearance Options

function baghira_customize_register( $wp_customize ) {
    //Header BG Color Setting
    $wp_customize->add_setting('baghira_headerbg_color', array(
        'default' => '#363D42',
        'transport' => 'refresh',
    ));    
    
    //Header Settings Group Section
    $wp_customize->add_section('baghira_header_options', array(
        'title' => __('Customize Your Header', 'Baghira'),
        'priority' => 30,
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_headerbg_color_control', array(
        'label' => __('Change The Background Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_headerbg_color',
    ) ) );
    
    //Header Nav Link Setting
    $wp_customize->add_setting('baghira_headerlink_color', array(
        'default' => '#e5e5e5',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_headerlink_color_control', array(
        'label' => __('Change The Nav Link Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_headerlink_color',
    ) ) );    
    
    //Header Nav Hover Link Setting
    $wp_customize->add_setting('baghira_header_hover_link_color', array(
        'default' => '#1d868f',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_header_hover_link_color_control', array(
        'label' => __('Change The Nav Hover Link Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_header_hover_link_color',
    ) ) );
    //Header Nav Link Size Setting
    $wp_customize->add_setting('baghira_header_hover_link_color', array(
        'default' => '#1d868f',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_header_hover_link_color_control', array(
        'label' => __('Change The Nav Hover Link Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_header_hover_link_color',
    ) ) );  
    
    //Header Nav Link Size Setting
    $wp_customize->add_setting('baghira_header_nav_size', array(
        'default' => '13px',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'baghira_header_link_size_control', array(
        'label' => __('Change The Nav Link Size', 'Baghira'),
        'description' => __('Enter your new font size please include px'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_header_nav_size',
    ) ) );          

    //Header Nav Responsive Toggle Menu Button Color
    $wp_customize->add_setting('baghira_nav_toggle_color', array(
        'default' => '#000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_nav_toggle_color_control', array(
        'label' => __('Change The Toggle Button Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_nav_toggle_color',
    ) ) );   
    
    //Header Nav Responsive Toggle Menu Button Color
    $wp_customize->add_setting('baghira_nav_social', array(
        'default' => '#000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'baghira_nav_toggle_color_control', array(
        'label' => __('Change The Toggle Button Color', 'Baghira'),
        'section' => 'baghira_header_options',
        'settings' => 'baghira_nav_toggle_color',
    ) ) );       
}

add_action('customize_register', 'baghira_customize_register');

//Output Customize CSS

function baghira_customize_css() { ?>
    <style type="text/css">
        .header{
            background-color: <?php echo get_theme_mod('baghira_headerbg_color'); ?> !important;
        }
        
        ul.nav li a:link, 
        ul.nav li a:visited{
            color:<?php echo get_theme_mod('baghira_headerlink_color'); ?>;
        }
        ul.nav li a:hover{
            color:<?php echo get_theme_mod('baghira_header_hover_link_color'); ?>;
        }
        ul.nav li, ul.navbar-nav li{
            font-size:<?php echo get_theme_mod('baghira_header_nav_size'); ?>;
        }
        .toggle-button{
            color:<?php echo get_theme_mod('baghira_nav_toggle_color'); ?>;
        }
    </style>   
<?php }  

add_action('wp_head', 'baghira_customize_css');
?>