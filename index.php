<?php get_header(); ?>

<main id="content" class="interior">

	<div class="container">
		<div class="row">
			<div class="page-title">
				<h1>
					News<?php //the_title(); ?>
				</h1>
			</div>
			<div class="columns-10 offset-by-2 listings">


				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h2><a class="permalink-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<?php the_excerpt(); ?>

				<?php endwhile; ?>
			</div>
		</div>
	</div>


</main><!-- End of Content -->

<?php get_footer(); ?>
