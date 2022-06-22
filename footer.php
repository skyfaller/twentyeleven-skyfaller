<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</main><!-- #main -->

	<footer id=colophon>
		<?php
			/*
				* A sidebar in the footer? Yep. You can customize
				* your footer with three columns of widgets.
				*/
			if ( ! is_404() )
				get_sidebar( 'footer' );
		?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
