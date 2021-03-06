<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jugendorchester Havixbeck</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>

<!-- container-fluid -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">




        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#collapse-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


        </div>
        <div class="row">
        <div class="col-lg-2">
        <a href="<?php echo home_url(); ?>">
            <img id="main-logo-start" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-black.png">
        </a>
        </div>

        <?php
        wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse col-lg-12',
                'container_id' => 'collapse-menu',
                'menu_class' => 'nav navbar-nav nav-justified-main ',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker())
        );
        ?>

        </div>
    </div>
</nav>
<div class="container-fluid">