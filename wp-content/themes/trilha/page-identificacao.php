<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/identificacao.php" ) ?>

<?php else : ?>

	<?php get_header() ?>

<!-- adsf -->

	        



	<?php get_footer() ?>
	
<?php endif; ?>
