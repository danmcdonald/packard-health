<?php
/* Template Name: Teams Home */
get_header();
?>			
	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
	?>
	
	<div class="container">
		<h2><?php the_title(); ?></h2>

		<?php if ( have_rows('team_boxes') ) : ?>
		<div class="sm_card_row cardrow_inner">
		<?php while( have_rows('team_boxes') ) : the_row(); ?>
			
			<div class="sm_card" style="background-color: #<?php the_sub_field('color'); ?>">
				<img src="<?php the_sub_field('icon'); ?>" alt="">
				<h3><?php the_sub_field('title'); ?></h3>
				<p><?php the_sub_field('description'); ?></p>
				<a href="<?php the_sub_field('link'); ?>">Learn More</a>
			</div>

		<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>