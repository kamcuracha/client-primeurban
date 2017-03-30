<?php
/**
 * Template Name: Contact Us
 */

get_header(); // Loads the header.php template. ?>

<div id="top" class="section section-vshape-bottom">
  <div class="masterhead">
    <div class="container">
      <div class="masterhead-intro animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn go" data-id="1">
          <?php echo get_the_title(); ?>
        </h2>
      </div>
    </div>
    <?php if ( has_post_thumbnail() ) : $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="masterhead-img" style="background-image: url('<?php echo $post_image[0]; ?>');">
    </div>
    <?php else: ?>
    <div class="masterhead-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-contact.jpg');">
    </div>
    <?php endif; ?>
    <div class="masterhead-accent">
      <img class="accent accent1 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-1.png" alt="">
      <img class="accent accent2 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-2.png" alt="">
      <img class="accent accent3 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-3.png" alt="">
    </div>
  </div>
</div>

    <div id="contact-us" class="section section-contact-us">
  <div class="container">
    <div class="row animatedParent">
      <div class="col-sm-6 animated fadeInLeft">
        <h2>Contact Form</h2>
        <?php echo do_shortcode('[formidable id=2]'); ?>
      </div>
      <div class="col-sm-6 animated fadeInRight">
        <div class="contact-details">
          <h2>Contact Details</h2>
          <ul class="contact">
            <li><i class="fa fa-home" aria-hidden="true"></i> <span>Suite 522, St Kilda Road Towers<br>
          1 Queens Road, Melbourne<br>
          Victoria 3004</span></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> <span>03 9863 7997</span></li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i> <span>info@primeurbangroup.com.au</span></li>
            <li>
              <div class="map-holder"> 
                <div id="map-canvas" data-lat="-37.835768" data-lng="144.973876" data-title="Suite 522, St Kilda Road Towers 1 Queens Road, Melbourne Victoria 3004" style="width:420px;height:275px;"></div> 
              </div>
            </li>
            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="//goo.gl/kia3R2" target="_blank"><span>Get Directions</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); // Loads the footer.php template. ?>