<?php
/**
 * Template part for front-page block3
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$services_block3_title				= get_field('services_block3_title');
$services_block3_pre_image_content				= get_field('services_block3_pre_image_content');
$services_block3_image	= get_field('services_block3_image');
$services_block3_image_mobile	= get_field('services_block3_image_mobile');
$services_block3_sub_title	= get_field('services_block3_sub_title');
$services_block3_content			= get_field('services_block3_content');
$services_block3_cta			= get_field('services_block3_cta');
$services_block3_form_url			= get_field('services_block3_form_url');
$services_cta_loading_image			= get_field('services_cta_loading_image');

?>
<div class="preBlock" id="core-values">
  <h2>
  <?php echo $services_block3_title; ?>
  </h2>
  <div class="contentBlock">
    <p>
    <?php echo $services_block3_pre_image_content; ?>
    </p>
</div>
</div>
<div id="block1" class="oddBlock">
  <div id="topImg">
  <amp-img 
  src="<?php echo $services_block3_image_mobile['url']; ?>"
  width="1536"
			height="768"
			layout="responsive"
      alt="<?php echo $services_block3_image_mobile['alt']; ?>"
      media="(max-width: 63.99em)"
      >
    </amp-img>
    <amp-img 
  src="<?php echo $services_block3_image['url']; ?>"
  width="6"
			height="6"
			layout="responsive"
      alt="<?php echo $services_block3_image['alt']; ?>"
      media="(min-width: 64em)"
      >
		</amp-img>
</div>
<div id="contentBlock">
	<h3>
  <?php echo $services_block3_sub_title; ?>
	</h3>
	<p>
	<?php echo $services_block3_content; ?>
	</p>
	<amp-lightbox id="my-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">
      
      <amp-iframe width="350" height="300" layout="fixed" 
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" 
              src="<?php echo $services_block3_form_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $services_cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>
  <button id="estimate" class="btn btn-lg btn-danger" on="tap:my-lightbox" role="button" tabindex="0"><?php echo $services_block3_cta; ?> »</button>
	
</div>
</div>