<?php if( have_rows('sidebar_boxes') ) : ?>
<div class="sb_page_right">
	<?php while( have_rows('sidebar_boxes')) : the_row(); ?>
	<div class="service_block" style="background-color: #<?php the_sub_field('color'); ?>">
		<span><?php the_sub_field('title'); ?></span>
		<a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('link_text'); ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/arrow-sm-white.png'; ?>" alt="<?php the_sub_field('link_text'); ?>"></a>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>