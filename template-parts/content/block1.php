<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$block1_title	= get_field('block1_title');
$block1_title_2	= get_field('block1_title_2');
$block1_content_left	= get_field('block1_content_left');
$block1_content_right	= get_field('block1_content_right');
$block1_phone_link	= get_field('block1_phone_link');
$block1_phone_txt	= get_field('block1_phone_txt');

?>

<div class="block1">
 
<div id="contentBlock">
	<h3>
  <?php echo $block1_title; ?>
  <br>
  <?php echo $block1_title_2; ?>
	</h3>
	<div class="contentBlocks">
	<?php echo $block1_content_left; ?>
	<?php echo $block1_content_right; ?>
	</div><!-- .contentBlocks -->
  <button id="estimate" class="btn btn-lg btn-danger" on="tap:my-lightbox" role="button" tabindex="0"><a href="tel:<?php echo $block1_phone_link; ?>"><?php echo $block1_phone_txt; ?></a></button>
</div>
</div>