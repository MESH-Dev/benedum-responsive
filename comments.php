<?php if ( have_comments() ) : ?>
<div class="container">
	<div class="row">
		<div class="comments-body">
			<h2>Comments</h2>

			<?php wp_list_comments( array('style' => 'div') ); ?>
		</div>
	</div>
</div>

<?php endif; ?>

<?php comment_form(); ?>
