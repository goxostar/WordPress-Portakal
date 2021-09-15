<?php
/* Template Name: Contact Page */

get_header(); ?>

<!-- Inside Hero Section -->

<section class="page-image page-image-contact section-box " style="background: linear-gradient(rgba(20, 20, 20, .8),rgba(20, 20, 20, .8)),url('<?php the_field('contact_img') ?>'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
      <h1 class="page-title">CONTACT</h1>
    </section>

    <!-- Contact Us Section -->

    <section id="contact" class="section-box">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
            <div class="section-top">
              <h2>CONTACT WITH US</h2>
              <hr>
              <p>If you have any questions, do not hesitate to write us a message. You can send us a message below.</p>
            </div>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-12">
            <?php the_content(); ?>            
          </div>
        </div>        
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card text-center">
              <div class="card-header">
                Contact Details
              </div>
              <div class="card-body">                
                <p class="card-text text-muted">Address: Kavaklıdere Mahallesi, Karanfil Sokak, No: 77/3 Kızılay Çankaya/ANKARA</p>
                <p class="card-text text-muted">Phone: + 90 312 299 24 77</p>
                <p class="card-text text-muted">Fax: + 90 312 299 23 36</p>
                <p class="card-text text-muted">Email: info@portakalyazilim.com</p>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>            