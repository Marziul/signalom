<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
    
	<!-- Favicon Icon -->
    <!--<link rel="icon" href="/images/favicon.png" type="image/png"> -->
	
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/lib/font-awesome/css/font-awesome.css">
	
	<!-- Oel curosel -->
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/lib/owlcarousel-2/assets/owl.carousel.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/bootstrap.css">
	
	<!-- Custom Style -->
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/custom.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/responsive.css">
	
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?> >

    <header>
        <section class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">
                                    <?php
                                        if ( function_exists( 'the_custom_logo' ) ) {
                                            the_custom_logo();
                                        }
                                    ?>  
                                </a>
                            </div>
                            <div class="collapse navbar-collapse">
                               
                                <?php wp_nav_menu(
                                    array(
                                        'theme_location' 	=> 'primary',
                                        'menu_class' 		=> 'nav navbar-nav',
                                        'container'         => ''
                                    )
                                ); ?>
                                
                                <ul class="rightmenu">
                                    
                                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/nsf.png" alt=""></li>
                                    <li class="busket hover">
                                    <a class="cart-contents" href="#"></a>
                                    
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>