<?php

// Custom Button shortcode
function jaio_button_shortcode($attr, $content) {
	extract(shortcode_atts(array(
		'url' => '#',
		'margin_top' => 10,
		'borders' => true,
		'background' => 'a8ad00'
		), $attr));

	$style = ( ($borders == 'false') || ($borders == 'no') || ($borders == '0') ) ? 'border-radius:0;' : '';
	$style .= "margin-top:" . $margin_top . "px;";
	$style .= "background-color: #" . $background . ";";

	return "<a href=\"" . $url . "\" class=\"custom_btn\" style=\"$style\">" . do_shortcode($content) . "</a>";
}
add_shortcode('custom_button', 'jaio_button_shortcode');

// Custom Hyperlink shortcode
function jaio_hyperlink_shortcode($attr, $content) {
	extract(shortcode_atts(array(
		'url' => '#'
		), $attr));

	return "<a href=\"" . $url . "\" class=\"arrow_link\">" . do_shortcode($content) . "</a>";
}
add_shortcode('custom_link', 'jaio_hyperlink_shortcode');