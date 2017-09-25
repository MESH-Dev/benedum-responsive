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
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
				<div class="filters row">
					<div class="filter search">
						<label for="searchFilter" class="sr-only">Search Available Grants</label>
						<input id="searchFilter" type="text" placeholder="Search Available Grants" value="<?php the_search_query(); ?>" name="s" id="s" /> 
						<button type="submit" class="form submit search-submit" id="searchsubmit" value="" >
							<img src="<?php bloginfo('template_directory'); ?>/img/search.png" alt="Search grants">
							<span class="sr-only">Submit search</span>
						</button>
					</div>
					<div class="filter program">
						<select name="program">
							<option value="">ALL</option>
							<option value="Program 1">Program 1</option>
							<option value="Program 2">Program 2</option>
							<option value="Program 3">Program 3</option>
							<option value="Program 4">Program 4</option>
							<option value="Program 5">Program 5</option>
		              	</select>
					</div>
					<div class="filter region">
						<select name="Region">
							<option value="">ALL</option>
							<option value="Region 1">Region 1</option>
							<option value="Region 2">Region 2</option>
							<option value="Region 3">Region 3</option>
							<option value="Region 4">Region 4</option>
							<option value="Region 5">Region 5</option>
		              	</select>
					</div>
					<div class="filter year">
						<select name="Year">
							<option value="">ALL</option>
							<option value="Year 1">Year 1</option>
							<option value="Year 2">Year 2</option>
							<option value="Year 3">Year 3</option>
							<option value="Year 4">Year 4</option>
							<option value="Year 5">Year 5</option>
		              	</select>
					</div>
					<button type="submit" class="form submit filter-submit" id="searchsubmit" value="" >
						Search
					</button>	
				</div>

				<div class="filter-results">
					<div class="result">
						<h2>The Title</h2>
						<p> <span class="title project-name">Project:</span> Operating support for the 2016-17 operations of the August Wilson Center</p>
						<p> <span class="title awared-date">Date Awarded:</span> 09/13/2016</p>
						<p> <span class="title program-tax">Program Area:</span> Arts</p>
						<p> <span class="title region-tax">Region Served: </span> Pennsylvania</p>
						<p> <span class="title amount">Amount Awarded: </span> $50,000.00</p>
					</div>
					<div class="result">
						<h2>The Title</h2>
						<p> <span class="title project-name">Project:</span> Operating support for the 2016-17 operations of the August Wilson Center</p>
						<p> <span class="title awared-date">Date Awarded:</span> 09/13/2016</p>
						<p> <span class="title program-tax">Program Area:</span> Arts</p>
						<p> <span class="title region-tax">Region Served: </span> Pennsylvania</p>
						<p> <span class="title amount">Amount Awarded: </span> $50,000.00</p>
					</div>
					<div class="result">
						<h2>The Title</h2>
						<p> <span class="title project-name">Project:</span> Operating support for the 2016-17 operations of the August Wilson Center</p>
						<p> <span class="title awared-date">Date Awarded:</span> 09/13/2016</p>
						<p> <span class="title program-tax">Program Area:</span> Arts</p>
						<p> <span class="title region-tax">Region Served: </span> Pennsylvania</p>
						<p> <span class="title amount">Amount Awarded: </span> $50,000.00</p>
					</div>
				</div>
			<?php //get_sidebar(); ?>
		</div>

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
