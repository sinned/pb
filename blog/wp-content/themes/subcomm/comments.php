<hr />
<br />
<h3> Comments </h3>
<div class="row">
	<div class="large-12 columns">
		<div class="commentlist">
			<?php wp_list_comments(array(
				'style' => 'div', 
				'reply_text' => '')); ?>
		</div>
	</div>
</div>
<br />

<?php comment_form(); ?>
