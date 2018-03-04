<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html lang="en" class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>



	<header class="site-header" role="banner">

<div class="container">
	<div class="row justify-content-center">
		<div class="col bg-white">
						<?php   if(has_custom_logo()) {
								the_custom_logo();
							} else { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php } ?>
		</div>
	</div>
</div>
</div>


    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark indigo darken-4">
        <div class="container">
					<?php   if(has_custom_logo()) {
							the_custom_logo();
						} else { ?>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php } ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

								<?php
								if ( has_nav_menu( 'navbar' ) ) {
									wp_nav_menu( array(
									'menu'              => 'navbar',
									'theme_location'    => 'navbar',
									'depth'             => 2,
									'menu_class'        => 'navbar-nav ml-auto',
									'fallback_cb'       => 'MDBBootstrapNavMenuWalker::fallback',
									'container'         => false,
									'walker'            => new MDBBootstrapNavMenuWalker())
									);
								} else
								echo "Please assign Navbar Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations";
								?>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

	</header>
