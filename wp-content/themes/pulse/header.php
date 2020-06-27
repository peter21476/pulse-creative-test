<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulse Tester</title>

    <?php wp_head() ?>

</head>
<body>

<header>
    <div class="header-wrapper">
    <div class="container header-container">
        <div class="row">
            <div class="col-lg-2">
            <img src="<?php echo Kirki::get_option('pulse_kirki_fields', 'menu_section_logo1'); ?>" class="img-fluid main-logo" />
            </div>
            <div class="col-lg-10 menu-col">
            <?php 
                wp_nav_menu (
                        array (
                            'theme_location'=> 'top-menu' ,
                            'menu_class' => 'top-bar'
                        )
                    );
                ?>
            </div>
            <div class="small-top-logo">
                <img src="<?php echo Kirki::get_option('pulse_kirki_fields', 'menu_section_logo2'); ?>" />
            </div>
        </div>
    </div>
    </div>
    <div class="container event-title-year-wrapper">
        <div class="event-title">
            <h1><img src="wp-content/themes/pulse/img/event-logo.png" /><span class="first-word">Global</span><br />Conference</h1>
            <h3>WASHINGTON D.C.</h3>
        </div>
        <div class="event-year">
            2018
        </div>
    </div>

    <div class="event-date">
        <p>16-18 MAY 2018<br /><span>| Tax Trends Today</span></p>
    </div>
    <div class="hero-background">
            <div class="fullscreen-bg"">
                    <video autoplay="true" muted="true" loop="true" class="fullscreen-bg__video">
                    <source src='wp-content/themes/pulse/videos/amtax.mp4'>
                    <source src="wp-content/themes/pulse/videos/amtax.mp4">
                    <source src="wp-content/themes/pulse/videos/amtax.ogv">
                    <source src="wp-content/themes/pulse/videos/amtax.webm">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="mobile-toggler"><i class="fas fa-bars"></i></div>
        <div class="mobile-menu">
        <?php 
                wp_nav_menu (
                        array (
                            'theme_location'=> 'top-menu' ,
                            'menu_class' => 'top-bar'
                        )
                    );
                ?>
        </div>
        <div class="scroll-more">
                    <p>SCROLL DOWN FOR MORE<br />
                    <i class="fas fa-caret-down"></i></p>
        </div>
</header>