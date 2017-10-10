<?php 
/* Template Name: Filter Template*/

get_header(); ?>

<main id="content" class="interior">

	<div class="container">
		<div class="row">
			<div class="page-title">
				<h1>
					<?php the_title(); ?>
				</h1>
			</div>




			<div class="columns-9 offset-by-2">
				<div class="the-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php  the_content(); ?>
					<?php 
							//shortcode to show grant filter facets using search and filter plugin
							echo do_shortcode('[searchandfilter id="778"]'); 

					 ?>

					<div id="results" class="filter-results">
				 	
						<?php 

						//shortcode to display search and filter AJAX results. 
						//Template found in theme at /search-filter/results.php
						//This must stay wihing the #results div.
						echo do_shortcode('[searchandfilter id="778" show="results"]'); ?>
 
					</div>

		 

					<?php  endwhile; endif; ?>
 
				</div>


 
		 
		</div>

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
