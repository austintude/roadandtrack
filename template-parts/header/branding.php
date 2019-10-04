<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$hero_images	= get_field('hero_images');

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>

<div id="carouselHero" amp-fx="parallax" data-parallax-factor="1.2">
	<amp-carousel height="600" 
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
		delay="5500">
		<?php while (have_rows('hero_images')) : the_row();

// vars
$hero_image_mobile = get_sub_field('hero_image_mobile');
$hero_image_mobile_landscape = get_sub_field('hero_image_mobile_landscape');
$hero_image_ipad_landscape_plus = get_sub_field('hero_image_ipad_landscape_plus');
$hero_figcaption = get_sub_field('hero_figcaption');
?>
	<div>
	
		<amp-img 
		media="(max-width: 48.5em) and (max-height:29em)"
  src="<?php echo $hero_image_mobile_landscape['url']; ?>"
  width="1280"
			height="820"
			layout="responsive"
			alt="<?php echo $hero_image_mobile_landscape['alt']; ?>">
		</amp-img>
		<amp-img 
		media="(max-width: 48.5em) and (min-height:29.1em)"
  src="<?php echo $hero_image_mobile['url']; ?>"
  width="375"
			height="480"
			layout="responsive"
			alt="<?php echo $hero_image_mobile['alt']; ?>">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="<?php echo $hero_image_ipad_landscape_plus['url']; ?>"
  width="1280"
			height="820"
			layout="responsive"
			alt="<?php echo $hero_image_ipad_landscape_plus['alt']; ?>">
		</amp-img>
		<!-- <figcaption class="paragraph">
		<?php echo $hero_figcaption; ?>
		</figcaption> -->
	</div>
	<?php endwhile; ?>
</amp-carousel>
</div> <!-- end #carouselHero -->


<!-- 
<div id="carouselHero" amp-fx="parallax" data-parallax-factor=".2">
	<amp-carousel height="600" 
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
		delay="5500">
		
	<div>
	
		<amp-img 
		media="(max-width: 48.5em) and (max-height:23em)"
		src="../wp-content/themes/wprig-roadandtrackspecialists/assets/images/MG-Breva1.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window min">
		</amp-img>
		<amp-img 
		media="(max-width: 48.5em) and (min-height:23em)"
  src="../wp-content/themes/wprig-roadandtrackspecialists/assets/images/MG-Breva1.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window story">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="../wp-content/themes/wprig-roadandtrackspecialists/assets/images/MG-Breva1.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window">
		</amp-img>
		<figcaption class="paragraph">
		2006 Moto Guzzi Breva 1100
		</figcaption>
	</div>
    <div>
	
		<amp-img 
		media="(max-width: 48.5em) and (max-height:23em)"
		src="../wp-content/themes/wprig-roadandtrackspecialists/assets/images/2003-Honda-Project-CRF230.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window min">
		</amp-img>
		<amp-img 
		media="(max-width: 48.5em) and (min-height:23em)"
  src="../wp-content/themes/wprig-roadandtrackspecialists/assets/images/2003-Honda-Project-CRF230.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window story">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="../wp-content/themes/wprig-roadandtrackspecialists/assets/images/2003-Honda-Project-CRF230.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window">
		</amp-img>
		<figcaption class="paragraph">
		2003 Honda Project CRF230
		</figcaption>
	</div>
	<div>
	
		<amp-img 
		media="(max-width: 48.5em) and (max-height:23em)"
		src="../wp-content/themes/wprig-roadandtrackspecialists/assets/images/Honda-RC166-250cc-6-Cylinder.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window min">
		</amp-img>
		<amp-img 
		media="(max-width: 48.5em) and (min-height:23em)"
  src="../wp-content/themes/wprig-roadandtrackspecialists/assets/images/Honda-RC166-250cc-6-Cylinder.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window story">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="../wp-content/themes/wprig-roadandtrackspecialists/assets/images/Honda-RC166-250cc-6-Cylinder.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window">
		</amp-img>
		<figcaption class="paragraph">
		Honda RC166 250cc 6-Cylinder
		</figcaption>
	</div>
</amp-carousel>
</div>  -->
<!-- end #carouselHero -->
	

	
</div><!-- .site-branding -->
