<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

			$contact_us_phone			= get_field('contact_us_phone');
			$contact_us_phone_link			= get_field('contact_us_phone_link');
			$contact_us_street			= get_field('contact_us_street');
			$contact_us_city			= get_field('contact_us_city');
			$contact_us_state			= get_field('contact_us_state');
			$contact_us_zip			= get_field('contact_us_zip');
			$contact_us_open_datetime			= get_field('contact_us_open_datetime');
			$contact_us_open_days_times			= get_field('contact_us_open_days_times');
			$contact_us_closed			= get_field('contact_us_closed');
			$contact_us_form			= get_field('contact_us_form');
			$cta_loading_image			= get_field('cta_loading_image');
			$middle_images			= get_field('middle_images');
			$right_images			= get_field('right_images');
			
?>


<div class="site-info">
			
			

			

	<div class="topBlock">
		<div class="leftBlock" vocab="http://schema.org/" typeof="LocalBusiness">
			<div class="softBlock">
		<div class="blockTitle">
		<h4>Contact Information</h4>
</div>
		<section id="physical">
	
        <div id="address">		
            <address property="address" typeof="PostalAddress">
			<h5><?php bloginfo( 'name' ); ?></h5>
            <h5><span property="streetAddress"><?php echo $contact_us_street; ?></span>
            <br>
            <span property="addressLocality"><?php echo $contact_us_city; ?></span>,
            
			<span property="addressRegion"><?php echo $contact_us_state; ?></span> <?php echo $contact_us_zip; ?></h5>
</address>
        </div>
</section>
<div id="phone">
			<span property="telephone"><a href="tel:<?php echo $contact_us_phone_link; ?>"><?php echo $contact_us_phone; ?></a></span>
		</div>
<div id="hours">
	<h4>Hours of Operation</h4>
			<ul>
				<li>
				<time itemprop="openingHours" datetime="<?php echo $contact_us_form; ?>"><?php echo $contact_us_open_days_times; ?></time>
				</li>
				
				<li>
				 <?php echo $contact_us_closed; ?>
				</li>
			</ul>
			
        </div>
        <div id="googleMap">
        <amp-iframe width="600" height="450" layout="responsive" 
			  sandbox="allow-scripts allow-same-origin allow-popups" 
			  frameborder="0" 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.9253453531173!2d-97.97253728514455!3d30.210678117656027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865b46175527c0e7%3A0x535fb8c6947321da!2sSupreme%20Hardwood%20Floors!5e0!3m2!1sen!2sus!4v1568318062947!5m2!1sen!2sus">
    <amp-img layout="fill"
             src="<?php echo get_template_directory_uri() ?>/assets/images/Google-Map-Supreme.jpg"
			 placeholder>
			</amp-img>
  </amp-iframe>
</div>
</div>
<div class="softBlock">
<div class="blockTitle">
		<h4>Join Us On Social Media</h4>
</div>

	<div id="supremeSocial">
		<div id="socialIcon1">
			<amp-img 
				src="<?php echo get_template_directory_uri() ?>/assets/images/facebook-icon.png"
				width="1"
				height="1"
				layout="responsive"
				alt="facebook icon">
			</amp-img>
		</div>
		<div id="socialIcon2">
			<amp-img 
				src="<?php echo get_template_directory_uri() ?>/assets/images/instagram-icon.png"
				width="1"
				height="1"
				layout="responsive"
				alt="instagram icon">
			</amp-img>
		</div>
		<div id="socialIcon3">
			<amp-img 
				src="<?php echo get_template_directory_uri() ?>/assets/images/twitter-icon.png"
				width="1"
				height="1"
				layout="responsive"
				alt="twitter icon">
			</amp-img>
		</div>
</div>
</div>
</div>
<div class="middleBlock">
	<div class="blockTitle">
		<h4>Road and Track Specialists</h4>
</div>
<div class="blockImages">
		<?php while (have_rows('middle_images')) : the_row();

// vars
$middle_image_1 = get_sub_field('middle_image_1');
$middle_image_1_alt = get_sub_field('middle_image_1_alt');
$middle_image_2 = get_sub_field('middle_image_2');
$middle_image_2_alt = get_sub_field('middle_image_2_alt');
?>
		<amp-img 
		src="<?php echo $middle_image_1; ?>"
  width="640"
			height="640"
			layout="intrinsic"
			alt="<?php echo $middle_image_1_alt; ?>">
		</amp-img>
		<amp-img 
		src="<?php echo $middle_image_2; ?>"
  width="640"
			height="640"
			layout="intrinsic"
			alt="<?php echo $middle_image_2_alt; ?>">
		</amp-img>
		<?php endwhile; ?>
</div>
</div>
<div class="rightBlock">
<div class="blockTitle">
		<h4>Sharing Your Passion!</h4>
</div>
<div class="blockImages">
<?php while (have_rows('right_images')) : the_row();

// vars
$right_image_1 = get_sub_field('right_image_1');
$right_image_1_alt = get_sub_field('right_image_1_alt');
$right_image_2 = get_sub_field('right_image_2');
$right_image_2_alt = get_sub_field('right_image_2_alt');
?>
		<amp-img 
		src="<?php echo $right_image_1; ?>"
  width="640"
			height="640"
			layout="intrinsic"
			alt="<?php echo $right_image_1_alt; ?>">
		</amp-img>
		<amp-img 
		src="<?php echo $right_image_2; ?>"
  width="640"
			height="640"
			layout="intrinsic"
			alt="<?php echo $right_image_2_alt; ?>">
		</amp-img>
		<?php endwhile; ?>
</div>
</div>

</div>
<div class="baseBlock">

<div id="supremeLogo">
<?php the_custom_logo(); ?>
</div>
	<a href="<?php echo esc_url( __( 'https://austintatiousdesign.co/', 'wp-rig' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly built and maintained by %s', 'wp-rig' ), 'Austintatious Design' );
		?>
	</a>
</div>

</div><!-- .site-info -->
