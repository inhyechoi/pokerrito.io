<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area contact-us-content">  
	<main id="main" class="site-main" role="main">
   <section id="location-div">
        <h2 class="location-title">location</h2>
        <ul class="location-items">
          <?php $locations = CFS()->get('location_item');
            foreach ( $locations as $location): ?>
            <li class="location-item">
              <h3 class="location"><?php echo $location ['location'];?></p>
              <p class="address"><?php echo $location ['location_address'];?></p>
              <img class="location-image" src="<?php echo $location ['location_image'];?>" />
            </li>
          <?php endforeach ?>
        </ul>
        <p class="hours"><?php echo CFS()->get('hours'); ?></p>  
      </section>
      <section id="instagram-div">
        <h2 class="social-title">social</h2>
        <?php echo do_shortcode('[instagram-feed]');?>
      </section>
      <section id="contact">
        <h2 class="contact-title">contact us</h2>
        <p class="contact-text"><?php echo CFS()->get('contact_text'); ?></p>
        <div class="contact-form">
          <?php echo do_shortcode( CFS()->get('contact_form')); ?>
        </div>
      </section> 
    </main>
  </div>

<?php get_footer(); ?>