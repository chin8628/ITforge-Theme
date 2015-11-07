<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ITforge
 */

get_header(); ?>

	<div id="primary" class="content-area col-lg-8 col-lg-offset-2 container">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'ขออภัย เราไม่พบหน้าเว็บที่คุณต้องการ', 'itforge' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'คุณน่าจะใส่ url หรืออะไรผิด! โปรดตรวจสอบแล้วลองใหม่อีกครั้ง หรือลองค้นหาสิ่งทีคุณต้องการ อย่าตระหนกไป ทุกคนย่อมมีพลาดกันบ้าง!', 'itforge' ); ?></p>

					<form class="navbar-form" role="search" style="margin-top: 20px;">
						<div class="form-group">
					  		<input type="search" class="form-control" placeholder="ค้นหา" name="s">
					  		<button type="submit" class="btn btn-primary">ค้นหา</button>
						</div>
					</form>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

			<?php require('footer-content.php'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
