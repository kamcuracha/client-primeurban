<?php
/**
 * Template Name: Contact Us
 */

get_header(); // Loads the header.php template. ?>

<div id="top" class="section section-vshape-bottom">
  <div class="masterhead">
    <div class="container">
      <div class="masterhead-intro masterhead-intro-front animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn go" data-id="1">
          Contact
        </h2>
      </div>
      <div class="masterhead-intro masterhead-intro-back animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn" data-id="1">
          Contact
        </h2>
      </div>
    </div>
    <div class="masterhead-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-contact.jpg" alt="">
    </div>
    <div class="masterhead-img masterhead-img-hover">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-contact.jpg" alt="">
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



<?php get_footer(); // Loads the footer.php template. ?>