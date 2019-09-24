<?php
/**
 * Template part for front-page block2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$service_images	= get_field('service_images');

?>

<div class="block2">
	<div class="leftBlock">
	<h3>Our Services</h3>
	<h4>As a full service repair facility Road And Track Specialits is the place for :</h4>
	<ul>
		<li>
			Mounting and balancing tires
		</li>
		<li>
			Oil change service
		</li>
		<li>
			Scheduled maintenance
		</li>
		<li>
			Fork seal replacement
		</li>
		<li>
			Carburetor overhauls
		</li>
		<li>
			Accessory installation
		</li>
		<li>
			Custom exhaust installation
		</li>
		<li>
			Carburetor jetting kits
		</li>
		<li>
			LED/HID lighting
		</li>
		<li>
			Custom wiring
		</li>
		<li>
			Braided brake hoses
		</li>
		<li>
			Restoration services
		</li>
	</ul>
	<h4>And so much more... </h4>
	</div>
	<div class="rightBlock">
	<?php while (have_rows('service_images')) : the_row();

// vars
$service_image = get_sub_field('service_image');
?>
		<amp-img 
  src="<?php echo $service_image['url']; ?>"
  width="1536"
			height="768"
			layout="responsive"
			alt="<?php echo $service_image['alt']; ?>">
		</amp-img>	
		<?php endwhile; ?>
		
	</div>
</div>

