<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */


?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card mt-3r' ); ?>>
	<div class="card-body">

		<?php if ( is_sticky() ) : ?>
			<span class="oi oi-bookmark wp-bp-sticky text-muted" title="<?php echo esc_attr__( 'Sticky Post', 'wp-bootstrap-4' ); ?>"></span>
		<?php endif; ?>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
                echo '<h1 class="entry-title card-title h2">'; 
                 show_category();
                the_field('space');
                echo ' м<sup>2</sup> ';
                the_field('adress');
                echo '</h1>';
			else :
            echo '<h1 class="entry-title card-title h2">'; 
            show_category();
            the_field('space');
            echo 'м<sup>2</sup> ';
            the_field('adress');
            echo '</h1>';
			endif;

			if ( 'post' === get_post_type() ) : ?>
    
			<div class="entry-meta text-muted">
				<?php wp_bootstrap_4_posted_on(); ?>
			</div><!-- .entry-meta -->
            
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<?php wp_bootstrap_4_post_thumbnail(); ?>

		<?php if( is_singular() || get_theme_mod( 'default_blog_display', 'excerpt' ) === 'full' ) : ?>
        <?php 
        $image = get_field('foto');
        if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>
			<div class="entry-content">
                <ul class="ttx-list">
                    <li class="ttx-item">
                        <span class="big">
                            <?php
                            ob_start();
                            the_field('price'); 
                            $bufer = ob_get_contents();
                            ob_get_clean();
                            $discharges = number_format($bufer, 0, '', ' ');
                            echo $discharges;
                            ?>
                        </span><br/>Цена
                    </li>
                    <li class="ttx-item">
                        <span class="big"><?php the_field('space'); ?> м<sup>2</sup></span><br/>Площадь
                    </li>
                    <li class="ttx-item">

                    </li>
                    <li class="ttx-item">
                        <span class="big"><?php the_field('floor'); ?></span><br/>Этаж
                    </li>
                    <br/>
                    <li class="ttx-item"><span class="big"><?php the_field('live_space'); ?> м<sup>2</sup></span><br/>Жилая площадь
                    </li>
                </ul>
                <p class="adress"> <span class="big"><?php the_field('adress'); ?> </span><br/>Адрес</p>
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-bootstrap-4' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-4' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		<?php else : ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<div class="">
					<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary btn-sm"><?php esc_html_e( 'Подробности...', 'wp-bootstrap-4' ); ?> <small class="oi oi-chevron-right ml-1"></small></a>
				</div>
			</div><!-- .entry-summary -->
		<?php endif; ?>

	</div>
	<!-- /.card-body -->

	<?php if ( 'post' === get_post_type() ) : ?>
		<footer class="entry-footer card-footer text-muted">
			<?php wp_bootstrap_4_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
