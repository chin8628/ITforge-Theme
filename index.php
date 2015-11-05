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

	<div class="slider col-md-8 col-md-offset-2">
		<?php echo do_shortcode("[metaslider id=25]"); ?>
	</div>

	<div id="primary" class="content-area col-md-8 col-md-offset-2 container">
		<main id="main" class="site-main" role="main">

			<?php
				/*
					fetch list of category into array for display on index
					$category keep name_slug of category
				*/
				$index = 0;
				$var = get_categories('orderby=slug');
				foreach ($var as $value) {
					$category[$index] = $value->slug;
					$category_id[$index] = $value->cat_ID;
					$index++;
				}

				//$total_category keep total number of category
				$exploded = explode('<br />', wp_list_categories('title_li=&style=none&echo=0&depth=1'));
				$total_category = count($exploded) - 1;

			?>

			<?php $count = 0; ?>

			<?php for ($i = 1; $i <= ceil($total_category / 2); $i++){ ?>

			<section class="box-category row">

				<?php if ($total_category % 2 != 0 && $i == ceil($total_category / 2)) $var = 1; else $var = 2; ?>
				<?php for ($j = 1; $j <= $var; $j++){ ?>

				<div class="col-md-6 index">

					<?php query_posts( array('category_name' => $category[$count], 'showposts' => 4) ); ?>
					<h3> <?php single_cat_title() ?> </h3>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="box-article row">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<img src="<?php bloginfo('template_directory'); ?>/asset/img/blank.jpg" />
							<?php endif; ?>
							<a href="<?php the_permalink(); ?>"><p><strong> <?php echo get_the_title(); ?> </strong></p></a>
							<small><?php the_date(); ?></small>
						</div>
					<?php endwhile; ?>
					<?php echo '<a href="'. get_category_link( $category_id[$count] ) .'">อ่านต่อ</a>'; ?>

				</div>

				<?php $count++; ?>
				<?php } ?>

			</section><!-- end category box -->

			<hr class="bold"></hr>

			<?php } ?>
			<?php require('footer-content.php'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
