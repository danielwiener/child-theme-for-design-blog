<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Luray Design
 * @since Luray Design 1.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="google-site-verification" content="9minjvq2eUa88aGr0jeuUjWey1vtppvMbj5onFK_OHg" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	
	wp_title( '|', true, 'right' );
    // Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://luraydesign.com/wp-content/themes/twentyten/images/luray-logo.gif" border="0"></a>
					</span>
				</<?php echo $heading_tag; ?>>
				 
                  <!-- info from http://wordpress.org/extend/plugins/wp-bannerize/faq/  and help section of bannerize plugin page -->
				<div id="rotating_image"><?php if(function_exists( 'wp_bannerize' ))
				          wp_bannerize('random=1&limit=1&container_before=&container_after=&before=&after='); ?></div> 
				<!-- #NOTE #CHANGE changed code in plugin, to version 99, be careful if you need to update. http://wordpress.org/extend/plugins/quotes-collection/other_notes/  -->
			  <div id="rotating_quote"><?php // $quote = quotescollection_quote('random=1&ajax_refresh=0'); ?><img src="/wp-content/themes/luraydesign/images/rotating_quote.png"></div> <!-- #branding -->

			<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				<a href="http://twitter.com/luraydesign" target="_blank" title="Follow me"><img src="/wp-content/plugins/fixed-social-buttons/img/twit2.png" border="0" width="20" height="20" align="right" /></a><a href="http://www.facebook.com/pages/Luraydesign/141326115929696" target="_blank"  title="Facebook profile"><img src="/wp-content/plugins/fixed-social-buttons/img/face2.png" border="0" width="20" height="20" align="right" /></a>
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->
	<div id="main">
