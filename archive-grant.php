<?php 
get_header(); ?>

<main id="content" class="interior">

	<div class="container">
		<div class="row">
			<div class="page-title">
				<h1>
				 Grants Archive
				</h1>
			</div>

			<div class="columns-9 offset-by-2">
				<div class="the-content">

					<div id="results">

						<?php //do_shortcode('[searchandfilter slug="grants-search"]'); ?>

						<?php
						if(have_posts()) : while(have_posts()) : the_post();
					 
						    echo '<div class="entry-content">';
						    the_title();
						    the_content();
						    echo '</div>';
							endwhile; 
						endif; ?>


						<div class="nav-previous alignleft pagination "> <a href=""></a></div>
						<div class="nav-next alignright  pagination "> <a href=""></a></div>

					</div>
 
		 			
				</div>
				
			</div>	
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
