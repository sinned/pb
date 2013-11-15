<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="sidebar" class="widget-area">
			<ul>

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'home-right-sidebar' ) ) : ?>
	
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #sidebar .widget-area -->

<ul class="inline-list socialmedia">
	<li><a href="http://www.facebook.com/poopbuddy"><img src="<?php echo WEBROOT; ?>img/facebook-green.png" /></a></li>
	<li><a href="http://www.twitter.com/getpoopbuddy"><img src="<?php echo WEBROOT; ?>img/twitter-green.png" /></a></li>
	<li><a href="http://www.pinterest.com/getpoopbuddy"><img src="<?php echo WEBROOT; ?>img/pinterest-green.png" /></a></li>
	<li><a href="http://www.instagram.com/getpoopbuddy"><img src="<?php echo WEBROOT; ?>img/instagram-green.png" /></a></li>				
</ul>

<!-- Begin MailChimp Signup Form -->
<div class="" id="mc_embed_signup1">
<form action="http://poopbuddy.us7.list-manage.com/subscribe/post?u=7cccd32f632de3c4496407d9b&amp;id=4caf43e792" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<label for="mce-EMAIL">Join for news &amp; offers!</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email" required>
    <input type="submit" value="Sign Me Up!" name="subscribe" id="mc-embedded-subscribe" class="small button" >
</form>
</div>
<!--End mc_embed_signup-->		
