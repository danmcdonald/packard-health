<?php if ( is_search() ): ?>
<h2><?php echo __('Search result'); ?></h2>
<?php elseif ( is_author() ): ?>
<h2>
<?php
$author = get_userdata( get_query_var('author') );
echo "Author: $author->display_name";
?>
</h2>
<?php elseif ( is_category() ): ?>
<h2><?php echo "Category: " . single_cat_title('', false); ?></h2>
<?php elseif ( is_tag() ): ?>
<h2><?php echo "Tag: " . single_tag_title('', false); ?></h2>
<?php elseif ( is_day() ) : ?>
<h2><?php echo "Daily Archive: " . get_the_time('F j, Y'); ?></h2>
<?php elseif ( is_month() ) : ?>
<h2><?php echo "Monthyl Archive: " . get_the_time('F Y'); ?></h2>
<?php elseif ( is_year() ) : ?>
<h2><?php echo "Yearly Archive: " . get_the_time('Y'); ?></h2>
<?php endif; ?>