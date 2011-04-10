<?php
/**
 * The Sidebar containing the primary and secondary widget AND HOME PAGE SIDEBAR areas.
 *
 * @package WordPress
 * @subpackage Luray Design
 * @since Luray Design 1.1
 */
?>

		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 * plus DW added a sidebar for Welcome Text on sidebar on the home page only
	 */ 
    if (is_home() || is_front_page()): ?>  
 	<?php if ( ! dynamic_sidebar( 'home-page-sidebar' ) ) :  ?> 

	<?php endif; // end home sidebar widget area  ?> 
	<?php endif; // end if front page  ?> 
	<?php if (is_page('header-development')): ?> 
		      <?php $quote = quotescollection_quote('random=1&ajax_refresh=0'); ?>	
	<?php endif ?>
	
	<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
