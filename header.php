<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class(); ?>>
	<?php do_action( 'body_top' ); ?>
	<a class="skip-content" href="#main"><?php _e( 'Skip to content', 'founder' ); ?> &rarr;</a>
	<div id="overflow-container" class="overflow-container">
		<div id="max-width" class="max-width">
			<?php do_action( 'before_header' ); ?>
		<!-- 	<header class="site-header" id="site-header" role="banner">
			<div id="title-container" class="title-container">
				<?php get_template_part( 'logo' ) ?>
				<?php if ( get_bloginfo( 'description' ) ) {
					echo '<p class="tagline">' . get_bloginfo( 'description' ) . '</p>';
				} ?>
			</div>
			<button id="toggle-navigation" class="toggle-navigation" name="toggle-navigation" aria-expanded="false">
				<span class="screen-reader-text"><?php _e( 'open menu', 'founder' ); ?></span>
				<i class="fa fa-bars" title="<?php _e( 'primary menu icon', 'founder' ); ?>" aria-hidden="true"></i>
			</button>
			<div id="menu-primary-container" class="menu-primary-container">
				<?php get_template_part( 'menu', 'primary' ); ?>
				<?php ct_founder_social_icons_output( 'header' ); ?>
				<?php get_template_part( 'content/search-bar' ); ?>
			</div>
		</header> -->
			<header>
			    <div class="brand-container">
			        <div class="brand">
			           <?php get_template_part( 'logo' ) ?>
			            <h3 class="brand-blog">blog</h3>
			        </div>
			        <div class="brand-quote tagline">
			            <span>
			            	<?php if ( get_bloginfo( 'description' ) ) {
							echo get_bloginfo( 'description' );
							} ?>
						</span>
			        </div>
			    </div>
			    <!-- <nav>
			        <ul>
			            <li data-href="home"><a href="index.html">Home</a></li>
			            <li><a href="archive.html">Archive</a></li>
			            <li><a href="about.html">About</a></li>
			        </ul>
			    </nav> -->
			    <?php get_template_part( 'menu', 'primary' ); ?>
			</header>
			<?php do_action( 'after_header' ); ?>
			<?php get_sidebar( 'primary' ); ?>
			<?php do_action( 'before_main' ); ?>
			<section id="main" class="main" role="main">
				<?php do_action( 'main_top' );
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
				}
?>

<body id="home" <?php body_class(); ?>>
    <!--    main wrapper starts-->
    <div class="wrapper">

        <!--        Header Starts-->
       
        </div>
