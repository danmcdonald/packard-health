<?php if(has_tag()) : ?>
	<ul class="link_tag">								
	<?php the_tags('<li>', '</li><li>', '</li>'); ?>
	</ul>
<?php endif; ?>