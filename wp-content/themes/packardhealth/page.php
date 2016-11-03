<?php get_header(); ?>

	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
	?>
	
	<div class="container">
		<div class="inner_page sb_page">
			<?php if ( wp_get_post_parent_id( get_the_ID() ) == 62 ) : ?>
			<ul class="page_link">
				<li><a href="<?php echo get_permalink(62); ?>">OUR SERVICES</a></li>
			</ul>
			<?php endif; ?>

			<h2><?php the_title(); ?></h2>
			
			<div class="sb_page_left" <?php echo (!have_rows('sidebar_boxes')) ? 'style="width:100%;"' : ''; ?>>
				<?php the_content(); ?>
			</div>
			
			<?php get_template_part('parts/custom-service-boxes'); ?>
				
			<div class="clearfix"></div>
		</div>				
	</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>