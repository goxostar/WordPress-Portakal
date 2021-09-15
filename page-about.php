<?php
/* Template Name: About Page */

get_header(); ?>

<!-- Inside Hero Section -->

<section class="page-image page-image-about section-box" style="background: linear-gradient(rgba(20, 20, 20, .8),rgba(20, 20, 20, .8)),url('<?php the_field('about_main_image') ?>'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
      <h1 class="page-title">ABOUT</h1>
    </section>

    <!-- About Us Section -->

    <section id="aboutus" class="section-box">
      <div class="container">        
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-md-6">
            <img src="<?php the_field('company_profile_img') ?>" class="img-fluid">
          </div>
          <div class="col-md-6">
            <div class="bg-orange text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h2><?php the_field('about_text_title') ?></h2>
                  <hr>
                  <p class="mb-3 text-white">
                    <?php the_field('about_text') ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Background Information Section -->
    
    <section id="backgroundInfo" class="section-box">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="text-center h-100 project">
              <div class="d-flex h-300">
                <div class="project-text w-300 my-auto text-center text-lg-left">
                  <h2>About Us</h2>
                  <hr>
                  <p class="mb-3 text-black">
                    Portakal Software established at 2006, in Ankara. In a very short time, has accepted itself in software sector and by the first part of 2008, it had almost 50 applications in hospitals and health care centers. In next years, this number reached till to 100.<br></br>

                    The project of Portakal Software controlled and accepted to Hacettepe Teknokent as available for technological supporting conditions in 2008.<br></br>
                    
                    The Projects called as Ormed and Ormedula that our company has;  is a hostipal E.R.P system that always gets developed toward to clients’ requests and the one developed with best technologies according to new regulations and needs.<br></br>
                    
                    Hospitals that have the project which developed with HL7 standarts; can do patient sign-up, accounting, finance, staff,stock, document tracking and etc. without need to other softwares.<br></br>
                    
                    And directly integrated to many establishments such as with Tc-Kimlik Service to Mernis System, with Medula to Social Security Headquarter, with USVS to Health Ministry.<br></br>
                    
                    Then, added many softwares such as Orlab Lab Automation, Termoweb Heat Tracking System, Pacs Automation, Payroll Application, Supplementary Payment Application, Duty Tracking Automation, Funeral Tracking Automation to its software portfolio.<br></br>
                    
                    Those projects developed on the native Portakal Framework that is being used for other projects. The Project has developed as multilayer, thanks to this feature, the dependency of database got removed. Thus, Application can be used with databases such as MS-SQL, My-SQL, Postgre SQL, DB2 and Oracle.<br></br>
                    
                    Because of the trouble in sector in 2014, after Portakal Software stopped development softwares for hospitals and health sector, it started working more than before on web-based projects. Some kind of web-based projects are  like this; BAP Automation, Offer Automation, Student Affairs Automation, Thinking Organizations Automation, Warehouse Automation, Logistics CRM Program, Land Transport Software. In this way,every day, new native projects for theirself and private projects for clients are getting developed.<br></br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 section-references">
            <div class="text-center h-100 project">
              <div class="d-flex h-300">
                <div class="project-text w-300 my-auto text-center text-lg-left">
                  <h2>References</h2>
                  <hr> 
                  <div class="row">
                    <div class="col-md-2">
                      <img src="<?php the_field('about_ref_img1') ?>" alt="">
                    </div>
                    <div class="col-md-2">
                      <img src="<?php the_field('about_ref_img2') ?>" alt="">
                    </div>
                    <div class="col-md-2">
                      <img src="<?php the_field('about_ref_img3') ?>" alt="">
                    </div>                    
                  </div>    
                  <div class="row">
                    <div class="col-md-2">
                      <img src="<?php the_field('about_ref_img4') ?>" alt="">
                    </div>
                    <div class="col-md-2">
                      <img src="<?php the_field('about_ref_img5') ?>" alt="">
                    </div>
                    <div class="col-md-2">
                      <img src="<?php the_field('about_ref_img6') ?>" alt="">
                    </div>                    
                  </div>    
                  <div class="row">
                    <div class="col-md-2">
                      <img src="<?php the_field('about_ref_img7') ?>" alt="">
                    </div>
                    <div class="col-md-2">
                      <img src="<?php the_field('about_ref_img8') ?>" alt="">
                    </div>
                    <div class="col-md-2">
                      <img src="<?php the_field('about_ref_img9') ?>" alt="">
                    </div>                    
                  </div>       
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Services Section -->

    <section id="ourServices" class="section-box">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
            <div class="section-top">
              <h2>OUR SERVICES</h2>
              <hr>              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 text-center">
            <i class="fas fa-chart-line"></i>
            <p>Seo Services</p>
          </div>
          <div class="col-md-3 text-center">
            <i class="fas fa-chart-line"></i>
            <p>Corporate Identity Services</p>
          </div>
          <div class="col-md-3 text-center">
            <i class="fas fa-chart-line"></i>
            <p>Training and Consultancy Services</p>
          </div>
        </div>        
        <div class="row mt-5">
          <div class="col-md-3 text-center">
            <i class="fas fa-chart-line"></i>
            <p>Software Services</p>
          </div>
          <div class="col-md-3 text-center">
            <i class="fas fa-chart-line"></i>
            <p>Information Technology Services</p>
          </div>
          <div class="col-md-3 text-center">
            <i class="fas fa-chart-line"></i>
            <p>Camera and Security Services</p>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>