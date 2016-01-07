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
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>"></a>
        <p id="headertitle">Jugendorchester Havixbeck e.V.</p>
         
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
