<?php 
/* Template Name: Contact Template */ 
get_header(); ?>
<section class="common-inner-heading">
  <img src="<?php bloginfo('template_directory');?>/assets/images/img-supporter-hero.jpg" class="img-fluid" alt="Inner Banner Image"/>
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-12">
        <div class="header-content">
          <h1>Contact Us</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="service-intro">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 py-5">
        <div class="service-text-content">
          <h3 class="fw-bolder mt-4 mb-3">Connect with us for better care.</h3>
          <p>Our homes are where our life is lived and memories are made, it is our sanctuary. However, over time, some daily tasks can become a challenge. Alliance Community can help reduce some of that load by providing the support you need. We also help you to keep connected to your local community.</p>
          <p>We understand that everyone has different needs, abilities, and aspirations. We are committed to delivering our support with a flexible approach that focuses on your unique needs and empowers you to take control of your life.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="enquiry-type" placeholder="enquiry">
              <label for="enquiry-type">Enquiry Type</label>
            </div>
          </div>
          <div class="col-lg-12 mb-4">
            <div class="form-floating">
              <input type="text" class="form-control" id="location" placeholder="Location">
              <label for="location">Location</label>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="form-floating">
              <input type="text" class="form-control" id="first_name" placeholder="First Name">
              <label for="first_name">First Name</label>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="form-floating">
              <input type="text" class="form-control" id="last_name" placeholder="Last Name">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="col-lg-12 mb-4">
            <div class="form-floating">
              <input type="email" class="form-control" id="email" placeholder="Email Address">
              <label for="Email Address">Email Address</label>
            </div>
          </div>
          <div class="col-lg-12 mb-4">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
              <label for="message">Message</label>
            </div>
          </div>
          <div class="offset-lg-4 offset-0 col-lg-4 mb-4">
            <input type="submit" class="btn btn-secondary w-100 py-2 fs-6" value="Submit"/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mt-4">
            <p class="text-center fs-4">If you would like to speak to someone now, please call <a href="tel:1300 769 155">1300 769 155</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5 offices-map-locator">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="common-heading text-center pb-5">
          <h1>Find your local office</h1>
          <p>With offices nationally, our team are part of your community. Find your local office below.</p>
          <div class="search-wrapper">
            <a href="#" class="btn-search">
              <i class="bi bi-search"></i>
            </a>
            <input type="text" class="input-search" placeholder="Enter your postcode or subrub" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>