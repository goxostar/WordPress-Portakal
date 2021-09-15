<?php 
/* Template Name: Home Page */

get_header(); ?>

<!-- Hero Section -->

<header id="hero" style="background: linear-gradient(rgba(20, 20, 20, .8),rgba(20, 20, 20, .8)),url('<?php the_field('hero_image') ?>'); background-repeat: no-repeat; background-attachment: scroll; background-position: center center; background-size: cover;">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase"><?php the_field('main_message') ?></div>
          <a href="#whoweare" class="btn btn-main">Detail</a>
        </div>
      </div>
    </header>

    <!-- Who We Are Section -->

    <section id="whoweare" class="section-box">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
            <div class="section-top">
              <h2><?php the_field('sub_header') ?></h2>
              <hr>
              <p><?php the_field('sub_text') ?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="whoweare-item text-center">
              <?php the_field('icon_1') ?>
              <h3 class="text-uppercase"><?php the_field('section_header_1') ?></h3>
              <hr>
              <p><?php the_field('section_text_1') ?>
              </p>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="whoweare-item text-center">
              <?php the_field('icon_2') ?>
              <h3 class="text-uppercase"><?php the_field('section_header_2') ?></h3>
              <hr>
              <p><?php the_field('section_text_2') ?>
              </p>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="whoweare-item text-center">
              <?php the_field('icon_3') ?>
              <h3 class="text-uppercase"><?php the_field('section_header_3') ?></h3>
              <hr>
              <p><?php the_field('section_text_3') ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>   

    <!-- Last Project Section -->

    <section id="latestprojects" class="section-box">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
            <div class="section-top">
              <h2>LATEST PRODUCTS</h2>
              <hr>              
            </div>
          </div>
        </div>

        <div class="row justify-content-center no-gutters mb-0 mb-lg-0">
          <div class="col-md-6">
            <img src="<?php the_field('product_1_image') ?>" alt="" class="img-fluid">            
          </div>
          <div class="col-md-6">
            <div class="bg-orange text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h3 class="text-white text-uppercase"><?php the_field('product_1_title') ?></h3>
                  <hr class="d-none d-lg-block mb-3 ml-0">
                  <p class="mb-3 text-white"><?php the_field('product_1_text') ?></p>
                  <a href="#latestprojects" class="btn btn-white">Get Detail</a>  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center no-gutters mb-0 mb-lg-0">
          <div class="col-md-6">
            <img src="<?php the_field('product_2_image') ?>" alt="" class="img-fluid">
          </div>
          <div class="col-md-6 order-lg-first">
            <div class="bg-orange text-white h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h3 class="text-white text-uppercase"><?php the_field('product_2_title') ?></h3>
                  <hr class="d-none d-lg-block mb-3 mr-0">
                  <p class="mb-3 text-black"><?php the_field('product_2_text') ?></p>
                  <a href="#latestprojects" class="btn btn-white">Get Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- References -->
    
    <section id="references">
      <div class="container">
        <div class="section-top text-center">
          <h2>REFERENCES</h2>
          <hr>              
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="<?php the_field('img_1') ?>" alt="">
          </div>
          <div class="item">
            <img src="<?php the_field('img_2') ?>" alt="">
          </div>
          <div class="item">
            <img src="<?php the_field('img_3') ?>" alt="">
          </div>
          <div class="item">
            <img src="<?php the_field('img_4') ?>" alt="">
          </div>
          <div class="item">
            <img src="<?php the_field('img_5') ?>" alt="">
          </div>
          <div class="item">
            <img src="<?php the_field('img_6') ?>" alt="">
          </div>
          <div class="item">
            <img src="<?php the_field('img_7') ?>" alt="">
          </div>
          <div class="item">
            <img src="<?php the_field('img_8') ?>" alt="">
          </div>
          <div class="item">
            <img src="<?php the_field('img_9') ?>" alt="">
          </div>          
      </div>
      </div>
    </section>

<?php get_footer(); ?>