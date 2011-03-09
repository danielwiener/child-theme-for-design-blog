<?php
/*
Template Name: cc-register
*/
?>


<?php get_header(); ?>


		<div id="container">
		
			<div id="content" role="main">
			<?php $sbw = new constant_contact_api_widget(); $sbw->widget(); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>