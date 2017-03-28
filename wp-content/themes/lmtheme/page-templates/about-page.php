<?php
/**
 * Template Name: About Us
 */

get_header(); // Loads the header.php template. ?>

<div id="top"  class="masterhead">
  <div class="container">
    <div class="masterhead-intro masterhead-intro-front animatedParent" data-sequence="500">
      <h2 class="h1 animated growIn go" data-id="1">
        About Us
      </h2>
    </div>
  </div>
  <div class="masterhead-img">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-about.jpg" alt="">
  </div>
</div>

<div class="section section-about-team">
  <div class="section-heading about-team copy animatedParent">
    <h3 class="section-title animated fadeInDownShort">Meet the Team</h3>

    <p class="animated fadeInDownShort go" data-id="3">Prime Urban is a dynamic, privately owned property development company. We specialize in the growing demand for residential and mixed-use projects located in the prestigious inner suburbs of Melbourne.</p>
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

<div id="about-intro" class="section section-about-intro">
  <div class="container">
    <div class="row animatedParent">
      <div class="col-sm-5 animated fadeInLeft">
        <p class="about-info">As a customer focused and driven company, our aim is to offer outstanding property investment opportunities, both in the owner occupied and investor markets. We pride ourselves on delivering luxury projects that will demonstrate good prospects for long term capital growth and strong rental returns.</p>
      </div>
      <div class="col-sm-7 animated fadeInRight">
        <p>The team at Prime Urban thrive on the opportunity to create premium quality developments that are well positioned to enjoy Melbourne’s world ranking vibrant lifestyle, cultural exhibitions, parklands, restaurants and cafes. Our expertise extends to every facet of development; from conception, planning, design, marketing, funding, construction and delivery.</p>
      </div>
    </div>
    <div class="row animated">
      <div class="col-sm-6 col-sm-offset-3 tabs center animated fadeIn go">
        <div class="about-tab">
          <a href="#" id="tab-vision"><i class="icon-vision"></i></a>
          <h3>Our Vision</h3>
        </div>
        <div class="about-tab">
          <a href="#" id="tab-values"><i class="icon-values"></i></a>
          <h3>Our Values</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section section-padded section-about-vm">
  <div class="container">
    <div class="row animatedParent" id="tab-vision-row">
      <div class="col-sm-12">
        <h3 class="section-title center">Our Vision</h3>
        <p>Prime Urban is committed to delivering originality and excellence in design with over three decades of extensive property development experience in Melbourne’s inner suburbs. We continually seek to progress our industry knowledge, professional integrity and reliability through improved techniques, services and business partnerships. The passion in what we do is clearly demonstrated in our product.</p>
      </div>
    </div>
    <div class="row animatedParent" id="tab-values-row" style="display: none;">
      <div class="col-sm-12">
        <h3 class="section-title center">Our Values</h3>
        <p>Property ownership has long been the cornerstone of Australian society and most people's greatest dream and asset. During every stage, we strive to exceed our customer's expectations and ensure their "journey" towards owning real estate is enjoyable. We continue to demonstrate a proactive willingness to respond to client's queries or concerns with open and honest discussion. We work within a highly competitive environment and as such challenge ourselves to think laterally to create optimal solutions to each property development. As Melbourne based developers we constantly question existing boundaries to drive change and opportunity.</p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); // Loads the footer.php template. ?>