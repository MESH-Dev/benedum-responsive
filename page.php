<?php get_header(); ?>

<?php
	$image = get_field('image');
	$image_url = $image['sizes']['large'];
	$image_caption = get_field('image_caption');
	$page_callout = get_field('callout_text');
?>
<main id="content" class="interior">

	<div class="container">
		<div class="row">
			<div class="page-title">
				<h1>
					<?php the_title(); ?>
				</h1>
			</div>
			<div class="page-content <?php if($image != ''){ echo 'no-pad';} ?>">

			<?php


				if($image != ''){
				?>

				<div class="columns-4" >
					<div class="portrait <?php if($image_caption != ''){ echo 'has-caption'; }?>">
						<img src="<?php echo $image_url; ?>">
						<?php if($image_caption != ''){ ?>
							<div class="img-caption">
								<?php echo $image_caption; ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>

			<div <?php if($image != ''){ echo 'class="columns-8"';}else{ echo 'class="columns-10 offset-by-2"';}?> >
				<!-- <//?php if($page_callout != '') ?> -->
				<div class="page-callout">
					<h2><?php echo get_field('callout_text'); ?><h2>
				</div>

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
									$classes= 'class="columns-6"';
								}
				?>
					<div <?php echo $classes; ?> >
						<?php echo $column; ?>
					</div>


				<?php endwhile; endif; ?>
			</div>
		 	</div><!--End page content-->
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
