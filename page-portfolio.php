<?php
/* Template Name: Portfolio Page */

get_header(); ?>

<!-- Inside Hero Section -->

<section class="page-image page-image-portfolio section-box" style="background: linear-gradient(rgba(20, 20, 20, .8),rgba(20, 20, 20, .8)),url('<?php the_field('portfolio_img') ?>'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
      <h1 class="page-title">PORTFOLIO</h1>
    </section>

    <!-- Portfolio Section -->

    <section id="portfolio" class="section-box">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
            <div class="section-top">
              <h2>OUR PRODUCTS</h2>
              <hr>
              <p>We produce products that will facilitate your work and make you to work more effectively.</p>
            </div>
          </div>
        </div>  
        <div class="row needMargin">
          <div class="col-md-4 portfolio-item">
            <a href="<?php the_field('product_1_full_img') ?>" class="portfolio-link" data-lightbox="web-design" data-title="HOTSPOT">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img src="<?php the_field('product_1_thumbnail') ?>" class="img-fluid">
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('product_1_title') ?></h4>
              <p class="text-muted"><?php the_field('product_1_text') ?></p>
            </div>
          </div>
          <div class="col-md-4 portfolio-item">
            <a href="<?php the_field('product_2_full_img') ?>" class="portfolio-link" data-lightbox="web-design" data-title="bq100 FIREWALL">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img src="<?php the_field('product_2_thumbnail') ?>" class="img-fluid">
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('product_2_title') ?></h4>
              <p class="text-muted"><?php the_field('product_2_text') ?></p>
            </div>
          </div>
          <div class="col-md-4 portfolio-item">
            <a href="<?php the_field('product_3_full_img') ?>" class="portfolio-link" data-lightbox="web-design" data-title="LOG SERVER">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img src="<?php the_field('product_3_thumbnail') ?>" class="img-fluid">
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('product_3_title') ?></h4>
              <p class="text-muted"><?php the_field('product_3_text') ?></p>
            </div>
          </div>                   
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
            <div class="section-top">
              <h2>OUR SERVICES</h2>
              <hr>
              <p>We offer services that will elevate your company.</p>
            </div>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-4 portfolio-item">
            <a href="<?php the_field('service_1_full_img') ?>" class="portfolio-link" data-lightbox="web-design" data-title="SEO SERVICES">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img src="<?php the_field('service_1_thumbnail') ?>" class="img-fluid">
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('service_1_title') ?></h4>
              <p class="text-muted"><?php the_field('service_1_text') ?></p>
            </div>
          </div>
          <div class="col-md-4 portfolio-item">
            <a href="<?php the_field('service_2_full_img') ?>" class="portfolio-link" data-lightbox="web-design" data-title="SOFTWARE SERVICES">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img src="<?php the_field('service_2_thumbnail') ?>" class="img-fluid">
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('service_2_title') ?></h4>
              <p class="text-muted"><?php the_field('service_2_text') ?></p>
            </div>
          </div>
          <div class="col-md-4 portfolio-item">
            <a href="<?php the_field('service_3_full_img') ?>" class="portfolio-link" data-lightbox="web-design" data-title="CAMERA AND SECURITY SERVICES">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img src="<?php the_field('service_3_thumbnail') ?>" class="img-fluid">
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('service_3_title') ?></h4>
              <p class="text-muted"><?php the_field('service_3_text') ?></p>
            </div>
          </div>                   
        </div>
      </div>
    </section>

<?php get_footer(); ?>