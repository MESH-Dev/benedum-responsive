<?php get_header(); ?>

<main id="content" class="interior">

	<div class="container">
		<div class="row">
			<div class="page-title">
				<h1>
					<?php the_title(); ?>
				</h1>
			</div>
			<?php 
				$image = get_field('image');
				$image_url = $image['sizes']['large'];
				$image_caption = get_field('image_caption');

				if($image != ''){
				?>

				<div class="columns-4" >
					<img src="<?php echo $image_url; ?>">
					<?php if($image_caption != ''){ ?>
						<div class="img-caption">
							<?php echo $image_caption ?>
						</div>
					<?php } ?>
				</div>
				<?php } ?>
			<div <?php if($image != ''){ echo 'class="columns-8"';}?> >

				<!-- Change this to repeater of custom fields -->

				
				<?php //if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					

					<?php //the_content(); ?>

				<?php //endwhile; ?>

				<?php 
					if (have_rows('page_content')):
						$col_cnt = 0;
							while(have_rows('page_content')):the_row();
								$col_cnt++;
								$rows = get_field('page_content');
								$row_count = count($rows);
								$column = get_sub_field('column');

								$classes = '';

								if($row_count == 2){
									$classes= 'column-6';
								}
				?>
					<div <?php echo $classes; ?> >
						<?php echo $column; ?>
					</div>


				<?php endwhile; endif; ?>
			</div>

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
