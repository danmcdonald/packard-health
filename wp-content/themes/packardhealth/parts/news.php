<!-- health news sec -->
<?php
	$news = new WP_Query( array(
		'cat' => 2,
		'posts_per_page' => 4
		));
	if ( $news->have_posts() ) :
		$news_count = 0;
?>
<div class="health_new">
	<div class="container">
		<h4>What’s new at Packard Health?</h4>
			<ul>
			<?php while ( $news->have_posts() ) : $news->the_post(); ?>
				<li><a class="arrow_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
					$news_count++;
					if( ( $news_count % 2 ) == 0 ) {
						echo '</ul><ul>';
					}
				?>
			<?php endwhile; ?>
			</ul>
	</div>
</div>
<?php endif; ?>