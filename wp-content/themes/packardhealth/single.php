<?php get_header(); ?>

	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
	?>
	
	<div class="container">
		<div class="inner_page sb_page">
			<ul class="page_link">
				<li><a href="<?php the_permalink(99); ?>">NEWS</a></li>
			</ul>
			<h2><?php the_title(); ?></h2>
			<div class="sb_page_left sb_left_newstory">	
				<?php the_content(); ?>
				<?php get_template_part('parts/tags'); ?>
			</div>

			<?php get_sidebar(); ?>
			<div class="clearfix"></div>
		</div>				
	</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>