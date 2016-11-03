<?php get_header(); ?>

	<div class="container">
		<div class="inner_page sb_page">
			
			<?php get_template_part('parts/archive-title'); ?>

			<div class="sb_page_left">	
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<!-- news block -->
				<div class="news_block">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><i><?php echo get_the_date('F Y'); ?></i></p>
					
					<p><?php echo custom_excerpt(get_the_content()); ?></p>
					
					<?php get_template_part('parts/tags'); ?>

				</div>

				<?php endwhile; ?>
				<?php endif; ?>

				<?php get_template_part('parts/pagination'); ?>

			</div>

			<?php get_sidebar(); ?>
			<div class="clearfix"></div>
		</div>				
	</div>

<?php get_footer(); ?>