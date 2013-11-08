<?php get_header(); ?>
<?php if ( have_posts() ) : ?>

	<section id="mainContent">
		<div class="row">
			<div class="large-12 columns">
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div id="page-<?php the_title_attribute("page-"); ?>">
						<h1><?php echo the_title(); ?></h1>
						<p><?php echo the_content(); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>

<?php else : ?>
	<p>No posts to show.</p>
<?php endif; ?>
<?php get_footer(); ?>