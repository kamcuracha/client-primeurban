<?php
/**
 * Template Name: Services
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

<?php

$term = wp_get_post_terms($post->ID, 'product_category');
if($term[0]->parent != 0)
    $parent = get_term($term[0]->parent, get_query_var('taxonomy') );
?>

<main <?php hybrid_attr( 'content' ); ?>>

<?php if ( have_posts() ) : // Checks if any posts were found. ?>

    <?php while ( have_posts() ) : // Begins the loop through found posts. ?>

        <?php the_post(); // Loads the post data. ?>

        <div id="projects-all" class="section section-padded section-project-single">
            <div class="section-heading animatedParent">
                <h3 class="section-title animated fadeInDownShort go"><?php the_title(); ?></h3>
                <p class="animated fadeInUpShort go"><?php $content = get_the_content(); echo $content; ?></p>
            </div>
            <div class="container">
                <?php the_post_thumbnail( 'large', array('class' => 'img-responsive post-thumb') ); ?>
                <div class="row">
                    <div class="col-sm-6 animated fadeInLeftShort go">
                        <?php the_field('info_1st_column'); ?>
                    </div>
                    <div class="col-sm-6 animated fadeInRightShort go">
                        <?php the_field('info_2nd_column'); ?>
                    </div>
                </div>
                <div class="row row-images">
                    <div class="col-sm-7">
                        <img class="img-responsive" src="<?php the_field('info_image'); ?>" alt="">
                    </div>
                    <div class="col-sm-5">
                        <img class="img-responsive" src="<?php the_field('info_image_2'); ?>" alt="">
                    </div>
                    <div class="col-sm-5">
                        <img class="img-responsive" src="<?php the_field('info_image_3'); ?>" alt="">
                    </div>
                    <div class="col-sm-7">
                        <img class="img-responsive" src="<?php the_field('info_image_4'); ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 animated fadeInDownShort go">
                        <?php the_field('info_footer'); ?>
                    </div>
                </div>
            </div>
        </div>


    <?php endwhile; // End found posts loop. ?>

<?php endif; // End check for posts. ?>

</main><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>