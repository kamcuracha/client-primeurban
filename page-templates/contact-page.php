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
          Welcome to Prime Urban <br>
          Property Development
        </h2>
        <!-- <p class="animated fadeInUpShort go" data-id="2">Introducing the VIGILANT Generation 6 Range.</p>
        <p class="animated fadeInUpShort go" data-id="3">Advanced fire detection technology.</p>
        <p class="animated fadeInUpShort go" data-id="4">Save cost. Save time. Save lives.</p> -->
      </div>
      <div class="masterhead-intro masterhead-intro-back animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn" data-id="1">
          Position ladder. Climb up.
          <span>Climb down. Repeat.</span>
        </h2>
        <!-- <p class="animated fadeInUpShort" data-id="2">What a hassle. Don’t you wish you could <br>
          test fire detectors from the ground.</p> -->
      </div>
    </div>
    <div class="masterhead-img" style="height: 648px;">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-main.jpg" alt="">
    </div>
    <div class="masterhead-img masterhead-img-hover" style="height: 648px; opacity: 1;">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-main.jpg" alt="">
    </div>
  </div>
  <!-- <span class="masterhead-detector">
      <img src="assets/images/detector-white.png" alt="Gen6 Detector">
  </span> -->
  <!-- <img class="vshape" alt="" src="assets/images/vshape-white.png"> -->
</div>

    <div id="contact-us" class="section section-contact-us">
  <div class="container">
    <div class="row animatedParent">
      <div class="col-sm-6 animated fadeInLeft">
        <h2>Contact Form</h2>
        <span>Send an email. All fields with an * are required.</span>
        <form class="contact-form" action="">
          <div class="form-group">
            <label for="name">Name </label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="number">Number</label>
            <input type="text" class="form-control" id="number">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" rows="5" id="message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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