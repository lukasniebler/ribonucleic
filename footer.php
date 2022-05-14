<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ribonucleic
 */

?>
	<div class="footer-wrapper">
	<footer id="colophon" class="site-footer center">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme by %2$s', 'ribonucleic' ), 'ribonucleic', '<a href="http://www.lukas-niebler.de">Lukas Niebler</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
