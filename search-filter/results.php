<?php
/**
 * Search & Filter Pro 
 *
 * Search Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      http://www.designsandcode.com/
 * @copyright 2015 Designs & Code
 *
 */

if ( $query->have_posts() )
{
	?>
	
	Found <?php echo $query->found_posts; ?> Results<br />
	Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?><br />
 
	
	<?php
	while ($query->have_posts())
	{
		$query->the_post();
		$grant_id = get_the_ID();

		$program_display = '';
		$program_areas = [];
		$region_display = '';
		$regions = [];

		$program_areas = get_the_terms($grant_id,'program_area');
 
		if ( $program_areas && !is_wp_error($program_areas) ){
 
			$program_display = $program_areas[0]->name;
		}

		$regions = get_the_terms($grant_id,'region_served');
 
		if ( $regions && !is_wp_error($regions) ){
 
			$region_display = $regions[0]->name;
		}

		$number = get_field('amount_awarded');
		setlocale(LC_MONETARY, 'en_US');
		
		
		
		?>
		<div class="result">
			<h2><a href="<?php echo get_field('org_link')?>" target="_blank"><?php   the_title(); ?></a> ( <?php echo get_field('city_and_state');?>)</h2>
			<p>  <?php the_content(); ?></p>
			<p> <span class="title awared-date">Date Awarded:</span> <?php echo get_field('date_awarded')?></p>
			<p> <span class="title program-tax">Program Area:</span> <?php echo $program_display;?></p>
			<p> <span class="title region-tax">Region Served: </span><?php echo $region_display;?></p>
			<p> <span class="title amount">Amount Awarded: </span> <?php echo money_format('%.2n', $number); ?></p>
		</div>
 
		<?php
	}
	?>

	Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?><br />
	
	<div class="pagination">
		
		<div class="nav-previous"><?php next_posts_link( 'Next', $query->max_num_pages ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Back' ); ?></div>
 
	</div>
	<?php
}
else
{
	echo "No Results Found";
}
?>