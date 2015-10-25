<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ITforge
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="container col-md-8 col-md-offset-2">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<h4>บทความที่เกี่ยวข้อง</h4>

				<?php
					$category = get_the_category();
					$var = get_posts(array('category_name' => $category[0]->slug));
					foreach ($var as $value) {
						echo '<a href="'. get_permalink($value->ID) .'">'. $value->post_title .'</a> <br />';
					}
				?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
