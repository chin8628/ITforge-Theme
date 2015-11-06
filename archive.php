<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ITforge
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-8 col-md-offset-2 container">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="box-article row">
					<section class="col-md-3 col-sm-3">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail(); ?>
						<?php else: ?>
							<img src="<?php bloginfo('template_directory'); ?>/asset/img/blank.jpg" />
						<?php endif; ?>
					</section>

					<section class="col-md-9 col-sm-9">
						<a href="<?php the_permalink(); ?>">
							<p><strong> <?php echo get_the_title(); ?> </strong></p>
						</a>
						<small><?php the_date(); ?></small>
						<p>
						<?php
							$content = get_the_content();
							$limit = 500;
							if (strlen($content) >= $limit) {
								$content = substr($content, 0, $limit);
								//ensure it will return string that isn't a fu*k string
								echo strip_tags(substr($content, 0, strrpos($content, ' ')) . " [...]");
							}
						?>
						</p>
					</section>
				</div>

				<hr></hr>

				<?php endwhile; ?>

			<p class="text-center">
			<?php
			 	$args = array(
					'prev_text'          => __('« หน้าก่อนหน้านี้'),
					'next_text'          => __('หน้าต่อไป »'),
					'end_size'           => 3,
					'mid_size'           => 4
				);
				echo paginate_links( $args );
			?>
			</p>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php require('footer-content.php'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
