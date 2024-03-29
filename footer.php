<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of <main> and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</main>

	<footer id=colophon>
		<?php
			/*
				* A sidebar in the footer? Yep. You can customize
				* your footer with three columns of widgets.
				*/
			if ( ! is_404() )
				get_sidebar( 'footer' );
		?>
		<div id=site-generator>
			<?php do_action( 'twentyeleven_credits' ); ?>
			<a href=<?php echo esc_url( __( 'https://wordpress.org/', 'twentyeleven' ) ); ?> title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
