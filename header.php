<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <script src="https://kit.fontawesome.com/983d62ef8b.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
wp_body_open();
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nepweb-portfolio' ); ?></a>

	<header class="site-header container">
		<div class="site-branding">
            <div class="site-logo">
                <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>
            </div>
        </div>
        <div class="site-navigation">
            <?php

                wp_nav_menu(
                    array(
                        'theme_location' => 'primary_menu'
                    )
                )

            ?>
        </div>
        
	</header>

    
