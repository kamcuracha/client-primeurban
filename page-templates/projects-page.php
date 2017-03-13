<?php
/**
 * Template Name: Projects
 */

get_header(); // Loads the header.php template. ?>

<div id="top" class="section section-vshape-bottom">
  <div class="masterhead">
    <div class="container">
      <div class="masterhead-intro masterhead-intro-front animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn go" data-id="1">
          Our Projects
        </h2>
      </div>
      <div class="masterhead-intro masterhead-intro-back animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn" data-id="1">
          Our Projects
        </h2>
      </div>
    </div>
    <div class="masterhead-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-projects.jpg" alt="">
    </div>
    <div class="masterhead-img masterhead-img-hover">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-projects.jpg" alt="">
    </div>
  </div>
</div>

<div id="projects-all" class="section section-padded section-projects-all">
  <div class="container">
    <div class="card-filter">
      <ul>
        <li><a href="#" class="active">All</a></li>
        <li><a href="#">Current Projects</a></li>
        <li><a href="#">Previous Projects</a></li>
      </ul>
    </div>
    <div class="cards card-holder animatedParent">
      <div class="card card-1 animated fadeIn go" data-id="1">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-jardinier.jpg" alt="">
        </div>
        <h4 class="card-title"><a href="#">Le Jardinier <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h4>
      </div>
      <div class="card card-1 animated fadeIn go" data-id="2">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-vivida.jpg" alt="">
        </div>
        <h4 class="card-title"><a href="#">Vivida <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h4>
      </div>
      <div class="card card-1 animated fadeIn go" data-id="3">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-quad.jpg" alt="">
        </div>
        <h4 class="card-title"><a href="#">The Quad <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h4>
      </div>
      <div class="card card-1 animated fadeIn go" data-id="1">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-clarence2.jpg" alt="">
        </div>
        <h4 class="card-title"><a href="/projects/the-clarence/">The Clarence <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h4>
      </div>
      <div class="card card-1 animated fadeIn go" data-id="2">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-velocity.jpg" alt="">
        </div>
        <h4 class="card-title"><a href="#">Velocity <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h4>
      </div>
      <div class="card card-1 animated fadeIn go" data-id="3">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-quad2.jpg" alt="">
        </div>
        <h4 class="card-title"><a href="#">The Quad <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h4>
      </div>
      <div class="card card-1 animated fadeIn go" data-id="1">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-clarence3.jpg" alt="">
        </div>
        <h4 class="card-title"><a href="/projects/the-clarence/">The Clarence <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h4>
      </div>
      <div class="card card-1 animated fadeIn go" data-id="2">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-vivida2.jpg" alt="">
        </div>
        <h4 class="card-title"><a href="#">Vivida <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h4>
      </div>
      <div class="card card-1 animated fadeIn go" data-id="3">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-quad3.jpg" alt="">
        </div>
        <h4 class="card-title"><a href="#">The Quad <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h4>
      </div>
    </div>
    <div class="card-pagination">
      <ul>
        <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#" class="button">Next</a></li>
      </ul>
    </div>
  </div>
</div>

<?php get_footer(); // Loads the footer.php template. ?>