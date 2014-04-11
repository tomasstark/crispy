<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php wp_title( ' | ', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>">

        <script src="<?php bloginfo( 'template_url' ); ?>/js/html5shiv.min.js"></script>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="main-container">
            <header class="site-header">
                <a href="<?php bloginfo( 'url' ); ?>">
                    <?php if( get_header_image() ) { ?>
                        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                    <?php } ?>
                </a>
                <div class="blog-title"><?php bloginfo( 'name' ); ?></div>
            </header>

            