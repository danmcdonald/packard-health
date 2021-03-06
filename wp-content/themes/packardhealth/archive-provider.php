<?php
/* Template Name: Provider Archive */
get_header();
?>			
	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
	?>
		<div class="container">
			<div class="inner_page provider_pg">
				<ul class="page_link">
					<li><a href="<?php the_permalink(40); ?>">OUR HEALTH CARE TEAM</a></li>
				</ul>
				<h2><?php the_title(); ?></h2>

				<!-- providers sec -->
				<?php
					$providers = new WP_Query(array(
						'post_type' => 'provider',
						'posts_per_page' => -1
						));
					if ($providers->have_posts()) :
						$count = 0;
				?>
				<div class="sm_card_row provider_row">
				<?php while ($providers->have_posts()): $providers->the_post(); ?>
					<div class="sm_card">
						<?php // the_post_thumbnail('216x307'); ?>
						<?php the_post_thumbnail('full'); ?>
						<div class="card_detail">
							<span><?php the_title(); ?>, <?php the_field('degrees'); ?></span>
							<p><?php the_field('job_title'); ?>
							<span><?php the_field('location'); ?></span></p>
							<a href="#" onclick="bioPop(<?php echo '\'' . get_the_title() . ', ' . get_field('degrees') . '\''; ?>, '<?php echo get_the_content(); ?>', '<?php echo get_the_post_thumbnail_url(); ?>'); return false;">READ BIO</a>		
						</div>
					</div>
				<?php
					$count++;
					if (($count % 4) == 0) {
						echo '</div><div class="sm_card_row provider_row">';
					}
					endwhile; endif;
				?>
				</div>

			</div>				
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>