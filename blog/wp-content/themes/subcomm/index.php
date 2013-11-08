<?php get_header(); ?>

<h1>The Blog</h1>

<?php if ( have_posts() ) : ?>

	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<p><?php echo the_content(); ?></p>

	<?php endwhile; ?>

<?php else : ?>
	<p>No posts to show.</p>
<?php endif; ?>
<?php get_footer(); ?>