<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Personal_Info_by_SpiderBuzz
 */

get_header(); ?>
<div class="container">
	<div class="row">
		
		<div id="primary" class="content-area col-sm-8">
		<main id="main" class="site-main" role="main">
		

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
		
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
		
	</div>
</div>
<?php
get_footer();