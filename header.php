<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title><?php wp_title( ' | ', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="main-container">
            <header class="site-header">
                <div class="logo">
                    <a href="<?php bloginfo( 'url' ); ?>">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </div><!-- /.logo -->
            </header>

            