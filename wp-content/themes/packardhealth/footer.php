				<?php get_template_part('parts/news'); ?>

			</div>
			<!-- footer -->
			<div class="footer">
				<div class="container">
				
				<?php if( have_rows('footer_top_links', 'option') ) : ?>
					<div class="footer_top_row footer_title">
					<?php while( have_rows('footer_top_links', 'option') ) : the_row(); ?>
						<div class="footer_col">
							<a href="<?php the_sub_field('url'); ?>"><h5><?php the_sub_field('title'); ?></h5></a>	
						</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?>


					<div class="footer_top_row">
						<?php // dynamic_sidebar( 'footer_1' ); ?>


						<?php if(get_field('facebook', 'option') || get_field('youtube', 'option')) : ?>
						<div class="footer_col social_col">
							<ul>
								<?php if (get_field('facebook', 'option')) : ?>
								<li>
									<a href="<?php the_field('facebook', 'option'); ?>">
										<img src="<?php echo get_template_directory_uri() . '/assets/images/facebook-icon.png' ?>" alt="Packard Health's Facebook">
									</a>
								</li>
								<?php endif; ?>

								<?php if (get_field('youtube', 'option')) : ?>
								<li>
									<a href="<?php the_field('youtube', 'option'); ?>">
										<img src="<?php echo get_template_directory_uri() . '/assets/images/youtube-icon.png' ?>" alt="Packard Health's Youtube">
									</a>
								</li>
								<?php endif; ?>
							</ul>
						</div>
						<?php endif; ?>
						
						<?php dynamic_sidebar('footer_2'); ?>
						
						<?php dynamic_sidebar('footer_3'); ?>
					</div>
					<!-- footer copyright -->
					<div class="copyright">
						<ul>
							<li><p>© <?php the_date('Y'); ?> <?php echo strtoupper(bloginfo('name')); ?></p></li>
							<li><p><span>NOTICE OF PRIVACY PRACTICES</span></p></li>
							<li><p>SITE DESIGN & DEVELOPMENT <a href="#">Q LTD</a></p></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	<?php wp_footer(); ?>

<?php if ( is_page_template(array('archive-health-team.php', 'archive-outreach-team.php', 'archive-patient-advocate.php', 'archive-health-team.php', 'archive-provider.php')) ) : ?>
<!-- The Modal -->
<div id="bio-modal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
	  <div class="modal-header">
	    <span class="close-btn" onclick="$('#bio-modal').fadeToggle();">×</span>
	    <h2 id="bio-modal-header">Modal Header</h2>
	  </div>
	  <div class="modal-body">
	  <img id="bio-modal-image" src="">
	  <p id="bio-modal-content"></p>
	  <div style="clear: both;"></div>
	  </div>
	</div>

</div>
<script type="text/javascript">
	var modal = $('#bio-modal');
	function bioPop(heading, content, image) {
		modal.find('#bio-modal-header').html(heading);
		modal.find('#bio-modal-content').html(content);
		modal.find('#bio-modal-image').attr('src', image);
		modal.fadeToggle();
	}

	window.onclick = function(evt) {
	    if (evt.target == modal[0]) {
	        modal.fadeOut();
	    }
	}
</script>
<?php endif; ?>

	</body>
</html>