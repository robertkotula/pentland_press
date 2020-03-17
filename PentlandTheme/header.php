<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pentalnd Theme</title>

    <?php wp_head();?>


</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <?php if( has_custom_logo() ) {
            the_custom_logo();
        } else { ?>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        <?php } ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
                wp_nav_menu( array(
                    'theme_location' => 'main-menu',
                    'depth'             => 2,
                    'container'       => 'ul',
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'navbar-nav mr-auto cl-effect-1',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            
    </div>
    <div class="nav-space"></div>
  </div>
</nav>
