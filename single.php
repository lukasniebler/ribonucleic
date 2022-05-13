<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ribonucleic
 */

get_header(); ?>
<div class="cover header-featured-image" style="background-image:url('<?php echo(get_the_post_thumbnail_url( $post_id, 'full' )); ?> ');">
	<div>
		<?php get_template_part('template-parts/header'); ?>
	</div>
	<header class="page-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header>
</div>
<main id="primary" class="site-main">
	<div class="center">
		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', get_post_type());

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'ribonucleic') . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'ribonucleic') . '</span> <span class="nav-title">%title</span>',
				)
			);

		endwhile; // End of the loop.
		?>
	</div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
