<?php 
get_header(); ?>

<main id="content" class="interior">

	<div class="container">
		<div class="row">
			<div class="page-title">
				<h1>
					<?php the_title(); ?> Archive
				</h1>
			</div>

			<div class="columns-9 offset-by-2">
				<div class="the-content">
					<?php
					if(have_posts()) : while(have_posts()) : the_post();
				 
					    echo '<div class="entry-content">';
					    the_content();
					    echo '</div>';
						endwhile; 
					endif; ?>
	
 
		 
				</div>
			</div>	
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
