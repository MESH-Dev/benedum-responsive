<?php get_header(); ?>

<main id="content" class="interior">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<div class="row">
				<div class="columns-10 offset-by-2 post-body">
					<div class="post">
						<h1><?php the_title(); ?></h1>
						<!-- <p class="postinfo">By <?php the_author(); ?> | Categories: <?php the_category(', '); ?> | <?php comments_popup_link(); ?></p> -->

						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>


	<?php endwhile; ?>

</main><!-- End of Content -->


<?php get_footer(); ?>
