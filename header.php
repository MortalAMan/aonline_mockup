<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">



</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar " role="navigation">
  	<div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

					<?php // first check if ACF is installed, then look for logo.
					if( function_exists('get_field')) { $logo = get_field('logo','option'); }
					if ($logo){
					?>
						<img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo( 'name' ); ?>" />

					<?php } else { ?>
            <img src="/wp-content/themes/aobase/inc/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
          <?php } ?>

	      </a>
	    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        				'container_id'      => 'navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">