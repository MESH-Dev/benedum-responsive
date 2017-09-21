<?php 
/* Template Name: Homepage Template*/

get_header(); ?>

<main id="content">
	<div class="carousel">
		<?php if(have_rows('carousel_panels')):
				while(have_rows('carousel_panels')):the_row();

				$panel_bg = get_sub_field('panel_image');
				$panel_bg_url = $panel_bg['sizes']['short-banner'];
				$panel_caption_title = get_sub_field('panel_caption_title');
				$panel_caption_text = get_sub_field('panel_caption_text');
				$panel_link = get_sub_field('panel_link');
				$external = get_sub_field('external');

				$target="";
				if($external == true){
					$target = 'target="_blank"';
				}
		?>
		<a href="<?php echo $panel_link; ?>" <?php echo $target; ?>>
			<div class="panel" style="background-image:url('<?php echo $panel_bg_url; ?>');" >
				<div class="caption">
					<span class="title"><?php echo $panel_caption_title; ?></span> <?php echo $panel_caption_text; ?>
				</div>
			</div>
		</a>
		<?php endwhile; endif;?>
	</div>
	<div class="">
		<div class="row">
			<div class="columns-3">
				<div class="recentnews">
					<h2>Recent News</h2>
					
					<?php 
					$args = array(
		 			'post_type'=>'post',
					'order' => 'DESC',
					'posts_per_page' => 3,
					'orderby' => 'DATE'
								        

		 						      	);
					 $the_query  = new WP_Query($args);

					 if ( $the_query->have_posts() ) : ?>
					<ul>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li>
					<?php endwhile; endif; wp_reset_postdata();?>
					</ul>
					<p><a href="<?php //echo get_post_type_archive_link('post'); ?>">Go To News Page >></a></p>
				</div>
			</div>
			<div class="columns-9">
				<div class="callout">
					<?php echo get_field('greeting_text'); ?>
				</div>
			</div>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
