<?php get_header(); ?>

<div class="wrapper section medium-padding">

	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$total_post_count = wp_count_posts();
	$published_post_count = $total_post_count->publish;
	$total_pages = ceil( $published_post_count / $posts_per_page );

	if ( "1" < $paged ) : ?>

		<div class="page-title section-inner">

			<h5><?php printf( __('Page %s of %s', 'baskerville'), $paged, $wp_query->max_num_pages ); ?></h5>

		</div>

		<div class="clear"></div>

	<?php endif; ?>

	<div class="content section-inner">

		<?php if (have_posts()) : ?>

			<div class="material-card">

				<div class="blogger-title">
				<a href="http://localhost/99xXian/"><img src="/99x/99xBlog/wp-content/themes/baskerville/images/xian.png"></a>
					<!-- <h2>Xian Blog</h2> -->
				</div>

		    	<?php  $cat_name = 'xian'; query_posts('category_name='.$cat_name); while (have_posts()) :the_post(); ?>

		    		<div class="post-container">

						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				    		<?php get_template_part( 'content', get_post_format() ); ?>

			    		</div> <!-- /post -->

		    		</div>

		        <?php endwhile; ?>

		</div> <!-- /posts -->

		<div class="material-card">

			<div class="blogger-title">
                <a href="http://research.99xtechnology.com/blog/"><img src="/99x/99xBlog/wp-content/themes/baskerville/images/Research.png"></a>
				<!-- <h2>Research Blog</h2> -->
			</div>

				<?php  $cat_name = 'research'; query_posts('category_name='.$cat_name); while (have_posts()) :the_post(); ?>

					<div class="post-container">

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php get_template_part( 'content', get_post_format() ); ?>

						</div> <!-- /post -->

					</div>

					<?php endwhile; ?>

	</div> <!-- /posts -->

		<div class="material-card">

			<div class="blogger-title">
                <a href="http://localhost/99xTechBlog/"><img src="/99x/99xBlog/wp-content/themes/baskerville/images/Technology.png"></a>
				<!-- <h2>Technology Blog</h2> -->
			</div>

				<?php  $cat_name = 'technology'; query_posts('category_name='.$cat_name); while (have_posts()) :the_post(); ?>

					<div class="post-container">

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php get_template_part( 'content', get_post_format() ); ?>

						</div> <!-- /post -->

					</div>

					<?php endwhile; ?>

		<?php endif; ?>

	</div> <!-- /posts -->

	</div> <!-- /content -->

	<?php if ( $wp_query->max_num_pages > 1 ) : ?>

		<div class="archive-nav section-inner">

			<?php echo get_next_posts_link( '&laquo; ' . __('Older posts', 'baskerville')); ?>

			<?php echo get_previous_posts_link( __('Newer posts', 'baskerville') . ' &raquo;'); ?>

			<div class="clear"></div>

		</div> <!-- /post-nav archive-nav -->

	<?php endif; ?>

	<div class="clear"></div>

</div> <!-- /wrapper -->

<?php get_footer(); ?>
