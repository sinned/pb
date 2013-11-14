<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function subcomm_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home-right-sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'subcomm_widgets_init' );
?>