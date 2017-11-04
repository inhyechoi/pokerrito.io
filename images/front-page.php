<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="hero-banner">
          <?php echo do_shortcode('[smartslider3 slider=1]');?>
        <div class="banner-content">   
          <?php echo CFS()->get('center_img'); ?>
        </div>
      </section>
      
      <section id="about">
        <div class="about-content">
          <img class="about-logo" src="<?php echo CFS()->get('about_img'); ?>" >
          <p><?php echo CFS()->get('about_text'); ?></p>
        </div>
      </section>
      <section id="menu">
        <a href="https://www.foodora.ca/restaurant/s6eq/pokerrito-hornby">
          <img class ="foodora-button" src="http://static.foodora.com/partners/button_pink_en.png" alt="foodora Partner Restaurant" width="218px" height="50px">
        </a>
          <h1 class="menu">menu</h1>
          <section class="signature">
            <h2 class="signature-menu">signature</h2>
               <?php $signatures = CFS()->get('signature_menu');
            foreach ( $signatures as $signature): ?>
             <ul class="signature-menu-items">
              <li> 
                <!-- <img class="signature-menu-pic" src="<?php echo $menu ['sig_menu_pic'];?>" />  add if wanting to add picture-->
                <h3><?php echo $signature[ 'sig_menu_title' ]; ?></h3>
                <p class="sig-menu-ingre"><?php echo $signature[ 'sig_menu_ingre' ]; ?></p>
               </li>
            </ul> 
            <?php endforeach; ?>
          </section>
          <p class="sig-menu-memo"><?php echo CFS()->get('sig_menu_memo'); ?></p>
          <section class="build-your-own">
            <h2 class="byo-title">build your own</h2>
            <h3 class="byo-one">base</h3>
            <ul class="byo-base">
              <div class="base-icons">
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/ricebowl.png"/></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/burrito.png"/></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/salad.png"/></li>
              </div>
              <div class="base-text">
              <li><h4>rice bowl</h4><p>white rice, brown rice</p></li>
              <li><h4>burrito</h4><p>white rice with seaweed wrap</p></li>
              <li><h4>salad</h4><p>romaine lettuce</p></li>
              </div>
            </ul>
            <section class="byo-div">
              <h3 class="byo-two">protein</h3>
              <ul class="protein-div">  
              <?php $proteins = CFS()->get('protein_group');
                foreach ( $proteins as $protein): ?>
                  <p class="protein-item"><?php echo $protein['protein_item']; ?></p>
              <?php endforeach; ?>
              </ul>
              <h3 class="byo-two">mix-ins</h3>
              <ul class="mixin-div">
                <?php $mixins = CFS()->get('mixins_group');
                  foreach ( $mixins as $mixin): ?>
                    <p class="mixin-item"><?php echo $mixin['mixin_item']; ?></p>
                <?php endforeach; ?>
              </ul>
              <h3 class="byo-two">sauces</h3>
              <ul class="sauce-div">
                <?php $sauces = CFS()->get('sauces_group');
                  foreach ( $sauces as $sauce): ?>                
                    <p class="sauce-item"><?php echo $sauce['sauce_item']; ?></p>
                <?php endforeach; ?>
              </ul>
              <h3 class="byo-two">toppings</h3>
              <ul class="topping-div">
                <?php $toppings = CFS()->get('toppings_group');
                  foreach ( $toppings as $topping): ?>
                    <p class="topping-item"><?php echo $topping['toppings_item']; ?></p>
                <?php endforeach; ?>
              </ul>
              <h3 class="byo-two">sides</h3>
              <ul class="side-div">
                <?php $sides = CFS()->get('sides_group');
                  foreach ( $sides as $side): ?>
                    <p class="side-item"><?php echo $side['sides_item']; ?></p>
                <?php endforeach; ?>
              </ul>
              <h3 class="byo-two">add crunch</h3>
              <ul class="addcrunch-div">
                <?php $addcrunchs = CFS()->get('add_crunch_group');
                  foreach ( $addcrunchs as $addcrunch): ?>
                    <p class="addcrunch-item"><?php echo $addcrunch['add_crunch_item']; ?></p>
                <?php endforeach; ?>
              </ul>
              </section>
              <div class="ow-legend-div">
                <img class="ow-legend" src="<?php echo CFS()->get('ow_legend'); ?>" >
              </div>
          </section>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>