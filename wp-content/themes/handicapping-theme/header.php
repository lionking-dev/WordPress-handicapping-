<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="header-wrapper">
        <div class="container">
            <header class="header">
                <div class="header-content">
                    <div class="header-left">
                        <a href="http://handicapping.com/">
                            <img class="logo" src="/wp-content/themes/handicapping-theme/assests/images/logo-1.svg">
                        </a>
                    </div>
                    <div class="header-right">
                        <nav class="primary-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'container' => false,
                                'menu_class' => 'menu',
                            ));
                            ?>
                        </nav>
                        <div class="addcart-field">
                            <img class="field" src="/wp-content/themes/handicapping-theme/assests/images/field.svg">
                        </div>
                        <div class="toggle-menu">
                            <i class="fa fa-bars"></i>
                        </div>
                       </div>
                </div>
            </header>
        </div>
    </div>
    <!-- Add your custom header content here -->