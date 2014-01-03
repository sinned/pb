<?php get_header(); ?>

<h1>The Blog</h1>

<?php if ( have_posts() ) : ?>

	<div class="row">
		<div class="large-9 columns">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="large-12 columns">
				<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<h6><?php the_time('F j, Y'); ?></h6>
				<p><?php echo the_content(); ?></p>
				</div>
			</div>
			<?php endwhile; ?>
			<div class="row">
				<div class="large-12 columns">
					<p><?php posts_nav_link(); ?></p>
				</div>
			</div>
		</div>
		<div class="large-3 columns">
			<?php include "sidebar.php"; ?>
		</div>
	</div>
<?php else : ?>
	<p>No posts to show.</p>
<?php endif; ?>
<?php get_footer(); ?>