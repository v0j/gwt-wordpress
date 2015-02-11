<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package gwt_wp
 */
?>
<div id="panel-top" class="row" role="complementary">
	<?php if(is_active_sidebar('panel-top-1')): ?>
	<aside id="sidebar" class="<?php govph_displayoptions( 'govph_position_panel_top_1' ); ?>columns" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php dynamic_sidebar( 'panel-top-1' ) ?>
	</aside>
	<?php endif; ?>
	<?php if(is_active_sidebar('panel-top-2')): ?>
	<aside id="sidebar" class="<?php govph_displayoptions( 'govph_position_panel_top_2' ); ?>columns" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php dynamic_sidebar( 'panel-top-2' ) ?>
	</aside>
	<?php endif; ?>
	<?php if(is_active_sidebar('panel-top-3')): ?>
	<aside id="sidebar" class="<?php govph_displayoptions( 'govph_position_panel_top_3' ); ?>columns" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php dynamic_sidebar( 'panel-top-3' ) ?>
	</aside>
	<?php endif; ?>
	<?php if(is_active_sidebar('panel-top-4')): ?>
	<aside id="sidebar" class="<?php govph_displayoptions( 'govph_position_panel_top_4' ); ?>columns" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php dynamic_sidebar( 'panel-top-4' ) ?>
	</aside>
	<?php endif; ?>
</div>