<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$block1_title	= get_field('block1_title');
$block1_content	= get_field('block1_content');
$block1_phone_link	= get_field('block1_phone_link');
$block1_phone_txt	= get_field('block1_phone_txt');

?>

<div class="block1">
 
<div id="contentBlock">
	<h3>
  <?php echo $block1_title; ?>
	</h3>
	<p>
	<?php echo $block1_content; ?>
	</p>
  <button id="estimate" class="btn btn-lg btn-danger" on="tap:my-lightbox" role="button" tabindex="0"><a href="tel:<?php echo $block1_phone_link; ?>"><?php echo $block1_phone_txt; ?></a></button>
</div>
</div>