<?php
/**
 * Template Name: About Us
 */

get_header(); // Loads the header.php template. ?>

<div id="top" class="section section-vshape-bottom">
  <div class="masterhead">
    <div class="container">
      <div class="masterhead-intro masterhead-intro-front animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn go" data-id="1">
          About Us
        </h2>
      </div>
      <div class="masterhead-intro masterhead-intro-back animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn" data-id="1">
          About Us
        </h2>
      </div>
    </div>
    <div class="masterhead-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-about.jpg" alt="">
    </div>
    <div class="masterhead-img masterhead-img-hover">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-about.jpg" alt="">
    </div>
  </div>
</div>

<div id="about-intro" class="section section-padded section-about-intro">
  <div class="container">
    <div class="row animatedParent">
      <div class="col-sm-5 animated fadeInLeft">
        <p class="about-info">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
      </div>
      <div class="col-sm-7 animated fadeInRight">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
      </div>
    </div>
  </div>
</div>

<div class="section section-padded section-about-vm">
    <div class="container">
    <div class="row animatedParent">
      <div class="col-sm-2 animated fadeInLeft">
        <div class="about-tab">
          <a href="#" class="active"><i class="icon-vision"></i></a>
          <h3>Our Vision</h3>
          <hr align="center" width="20%">
        </div>
        <div class="about-tab">
          <a href="#"><i class="icon-values"></i></a>
          <h3>Our Values</h3>
          <hr align="center" width="20%">
        </div>
      </div>
      <div class="col-sm-10 animated fadeInRight">
        <h3 class="section-title center">Our Vision</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
        <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
      </div>
    </div>
  </div>
</div>


<div class="section section-about-team">
  <div class="section-heading about-team copy animatedParent">
    <h3 class="section-title animated fadeInDownShort">Meet the Team</h3>

    <p class="animated fadeInDownShort go" data-id="3">Lorem ipsum dolor sit amet, consectetur sed  amet adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
  </div>
  <div class="container">
    <div class="row animatedParent">
      <div class="col-sm-4 animated fadeIn go" data-id="1">
        <div class="team-member">
          <div class="member-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-member1.jpg" alt="">
          </div>
          <div class="member-name">John Doe</div>
          <div class="member-pos">Managing Director</div>
        </div>
      </div>
      <div class="col-sm-4 animated fadeIn go" data-id="1">
        <div class="team-member">
          <div class="member-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-member2.jpg" alt="">
          </div>
          <div class="member-name">Stephen Brown</div>
          <div class="member-pos">Sales Director</div>
        </div>
      </div>
      <div class="col-sm-4 animated fadeIn go" data-id="1">
        <div class="team-member">
          <div class="member-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-member3.jpg" alt="">
          </div>
          <div class="member-name">James O'Neal</div>
          <div class="member-pos">Estimating Manager</div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); // Loads the footer.php template. ?>