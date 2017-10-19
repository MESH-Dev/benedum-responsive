<?php get_header(); ?>

<div id="content">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<div class="row">
				<div class="columns-9 post-body">
					<div class="post">
						<h1><?php the_title(); ?></h1>
						<p class="postinfo">By <?php the_author(); ?> | Categories: <?php the_category(', '); ?> | <?php comments_popup_link(); ?></p>

						<?php the_content(); ?>
					</div>
				</div>
				<div class="columns-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>

		<?php comments_template( '', true ); ?>

	<?php endwhile; ?>

</div><!-- End of Content -->


<?php get_footer(); ?>
