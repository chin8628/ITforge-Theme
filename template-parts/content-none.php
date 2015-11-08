<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ITforge
 */

?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'ขออภัย ไม่เจอสิ่งที่คุณต้องการ', 'itforge' ); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content col-md-12">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'itforge' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

        <?php elseif ( is_search() ) : ?>

            <form class="navbar-form" role="search">
                <p><?php esc_html_e( 'ขออภัย แต่เราหาสิ่งที่คุณต้องการไม่เจอ ความรักก็เช่นกัน ต้องการหาอย่างอื่นไหม ?', 'itforge' ); ?></p>
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="ค้นหา" name="s">
                    <button type="submit" class="btn btn-primary">ค้นหา</button>
                </div>
            </form>

        <?php else : ?>

            <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'itforge' ); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->
