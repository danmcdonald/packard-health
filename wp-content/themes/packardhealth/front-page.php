<?php
/* Template Name: Front Page */
?>
<?php get_header(); ?>

		<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
		?>
		<div class="container">
			
			<?php if ( have_rows('top_boxes') ) : ?>
				<div class="sm_card_row">
				<?php while( have_rows('top_boxes') ) : the_row(); ?>
						<div class="sm_card" style="background-color: #<?php the_sub_field('color'); ?>">
						<a href="<?php the_sub_field('url'); ?>">
							<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">
							<h3><?php the_sub_field('title'); ?></h3>
							</a>
						</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>

				<!-- links sec -->
			<?php if ( have_rows('category_boxes') ) : ?>
				<div class="links_row">
				<?php $links = 0; ?>
				<?php while( have_rows('category_boxes') ) : the_row(); ?>
					<div class="sm_link">
						<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
						<h4><?php the_sub_field('title'); ?></h4>
						
						<?php
							if ( have_rows('links') ) :
								while( have_rows('links') ) : the_row();
						?>
						<a class="arrow_link" href="<?php the_sub_field('url'); ?>"><?php the_sub_field('link_title'); ?></a>
						<?php endwhile; endif; ?>
						
					</div>
					<?php
						$links++;
						if ( ($links % 2) === 0 ) {
							echo '</div><div class="links_row">';
						}
					?>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
		<?php endwhile; endif; ?>

<?php get_footer(); ?>