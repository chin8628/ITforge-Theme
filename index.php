<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ITforge
 */

get_header(); ?>

	<div id="primary" class="content-area container col-md-10 col-md-offset-1">
		<main id="main" class="site-main" role="main">

		<?php echo do_shortcode("[metaslider id=25]"); ?>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php $count = 0; ?>
			<?php $category = array('activities', 'news', 'project', 'award'); ?>

			<?php for ($i = 1; $i <= 2; $i++){ ?>

			<section class="box-category row">

				<?php for ($j = 1; $j <= 2; $j++){ ?>

				<div class="col-md-6">
				<?php query_posts( array('category_name' => $category[$count]) ); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="box-article row">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail(); ?>
						<?php else: ?>
							<img src="<?php bloginfo('template_directory'); ?>/asset/img/blank.jpg" />
						<?php endif; ?>
						<p> <?php echo get_the_title(); ?> </p>
					</div>
				<?php endwhile; ?>
				<?php the_posts_navigation(); ?>
				</div>

				<?php $count++; ?>
				<?php } ?>

			</section>

			<?php } ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
