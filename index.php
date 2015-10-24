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

	<?php echo do_shortcode("[metaslider id=25]"); ?>

	<div id="primary" class="content-area container col-md-10 col-md-offset-1">
		<main id="main" class="site-main" role="main">

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
				/*
					fetch list of category into array for display on index
					$category keep name_slug of category
				*/
				$index = 0;
				$var = get_categories();
				foreach ($var as $value) {
					$category[$index] = $value->slug;
					$category_id[$index] = $value->cat_ID;
					$index++;
				}
			?>

			<?php $count = 0; ?>

			<?php for ($i = 1; $i <= 2; $i++){ ?>

			<section class="box-category row">

				<?php for ($j = 1; $j <= 2; $j++){ ?>

				<div class="col-md-6">
				<?php query_posts( array('category_name' => $category[$count], 'showposts' => 4) ); ?>
				<h3> <?php single_cat_title() ?> </h3>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="box-article row">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail(); ?>
						<?php else: ?>
							<img src="<?php bloginfo('template_directory'); ?>/asset/img/blank.jpg" />
						<?php endif; ?>
						<p><strong> <?php echo get_the_title(); ?> </strong></p>
						<small><?php the_date(); ?></small>
					</div>
				<?php endwhile; ?>
				<?php echo '<a href="'. get_category_link( $category_id[$count] ) .'">อ่านต่อ</a>'; ?>

				</div>

				<?php $count++; ?>
				<?php } ?>

			</section>

			<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
