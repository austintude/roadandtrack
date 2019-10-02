<?php
/**
 * Template part for front-page block2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$service_images	= get_field('service_images');
$services_title	= get_field('services_title');
$services_desc	= get_field('services_desc');
$services_tag	= get_field('services_tag');
$services_offered	= get_field('services_offered');

?>

<div class="block2">
	<div class="leftBlock">
	<h3><?php echo $services_title; ?></h3>
	<h4><?php echo $services_desc; ?></h4>
	<ul>
	<?php while (have_rows('services_offered')) : the_row();

// vars
$service_offered = get_sub_field('service_offered');
?>
<li>
<?php echo $service_offered; ?>
</li>
		<?php endwhile; ?>
	</ul>
	<h4><?php echo $services_tag; ?></h4>
	</div>
	<a href="/gallery" rel="noopener noreferrer">
	<div class="rightBlock">
	<?php while (have_rows('service_images')) : the_row();

// vars
$service_image = get_sub_field('service_image');
?>

		<amp-img 
  src="<?php echo $service_image['url']; ?>"
  width="261"
			height="200"
			layout="responsive"
			alt="<?php echo $service_image['alt']; ?>">
		</amp-img>	

		<?php endwhile; ?>
		
	</div>
	</a>
</div>

