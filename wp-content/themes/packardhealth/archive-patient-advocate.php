<?php
/* Template Name: Patien Advocate Archive */
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
						'post_type' => 'health_professional'
						));
					if ($providers->have_posts()) :
						$count = 0;
				?>
				<div class="sm_card_row provider_row">
				<?php while ($providers->have_posts()): $providers->the_post(); ?>
					<div class="sm_card">
						<?php the_post_thumbnail('216x307'); ?>
						<div class="card_detail">
							<span><?php the_title(); ?>, <?php the_field('degrees'); ?></span>
							<p><?php the_field('job_title'); ?>
							<span><?php the_field('location'); ?></span></p>
							<a href="#">READ BIO</a>	
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