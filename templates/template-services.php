<?php 
/* Template Name: Services Template */ 
get_header(); ?>
<section class="common-inner-heading">
  <img src="<?php bloginfo('template_directory');?>/assets/images/lady-making-bed.png" class="img-fluid" alt="Inner Banner Image"/>
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-12">
        <div class="header-content">
          <h1>Aged Care</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo home_url('aged-care'); ?>">Services</a></li>
              <li class="breadcrumb-item active" aria-current="page">Aged Care</li>
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
          <h1>Aged Care</h1>
          <strong>Home is where the heart is.</strong>
          <p>Our homes are where our life is lived and memories are made, it is our sanctuary. However, over time, some daily tasks can become a challenge. Alliance Community can help reduce some of that load by providing the support you need. We also help you to keep connected to your local community.</p>
          <p>We understand that everyone has different needs, abilities, and aspirations. We are committed to delivering our support with a flexible approach that focuses on your unique needs and empowers you to take control of your life.</p>
          <h3>We are an approved provider to the following programs: </h3>
          <ul>
            <li>National Disability Insurance Scheme (NDIS)</li>
            <li>Veterans Home Care Program</li>
            <li>iCare (NSW only)</li>
            <li>Commonwealth Home Support Programme (NSW only) view <a href="#">Contribution Framework Policy</a></li>
            <li>Home Care Package Provider (NSW only)</li>
          </ul>
          <p>We are also able to provide private services and service through insurance providers. If you would like more information, please contact us to see how you can best utilise our services.</p>
          <a href="#" class="btn btn-primary text-white">Let's have a chat about your needs</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="unillax-container py-60 parallax-window">
  <img src="<?php bloginfo('template_directory');?>/assets/images/graduate.jpg" class="unillax-background img-fluid" alt="Unillax Image">
</section>
<section class="services py-5 text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="common-heading">
          <h1>Supporting you with:</h1>
        </div>
      </div>
    </div>
    <div class="row home-services justify-content-center mt-5">
      <div class="col-6 col-sm-3">
        <a href="#">
          <div class="icon">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/icon-tree.svg" alt="Aged Care" class="default">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/icon-tree-hover.svg" alt="Aged Care" class="hover">
          </div>
          <h4>Aged Care</h4>
          <p>Supporting you with daily tasks such as bathing, dressing, meal time assistance and more.</p>
        </a>
      </div><div class="col-6 col-sm-3">
        <a href="#">
          <div class="icon">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/icon-hands.svg" alt="Disability Support" class="default">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/icon-hands-hover.svg" alt="Disability Support" class="hover">
          </div>
          <h4>Disability Support</h4>
          <p>Supporting you with daily tasks such as bathing, dressing, meal time assistance and more.</p>
        </a>
      </div><div class="col-6 col-sm-3">
        <a href="#">
          <div class="icon">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/high-level-support-small.png" alt="High Level Support" class="default">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/high-level-support-hover_small.png" alt="High Level Support" class="hover">
          </div>
          <h4>High Level Support</h4>
          <p>Supporting you with daily tasks such as bathing, dressing, meal time assistance and more.</p>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="unillax-container py-60 parallax-window">
  <img src="<?php bloginfo('template_directory');?>/assets/images/digital.jpg" class="unillax-background img-fluid" alt="Unillax Image">
</section>
<!-- GET STARTED -->
<section class="section home-get-started py-5">
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="common-heading text-center mb-5">
          <h1>Get Started</h1>
          <p>If you would like more information about booking a Support Star, or would like to register for work with us, please get in touch!</p>
        </div>
      </div>
      <div class="col-md-6 mb-md-0 mb-3">
        <div class="get-started-block text-center">
          <div class="get-started-image">
            <img src="<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg" alt="Thumbnail" class="img-fluid">
          </div>
          <div class="get-started-info">
            <h1>Book a Support Star</h1>
            <p>If you would like more information about booking a Support Star, let’s have a chat about your needs.</p>
          </div>
          <a href="#" class="btn btn-primary text-white px-4 py-2">Find out more</a>
        </div>
      </div>
      <div class="col-md-6 mb-md-0 mb-3">
        <div class="get-started-block text-center">
          <div class="get-started-image">
            <img src="<?php bloginfo('template_directory');?>/assets/images/join-our-team-alliance-community.jpg" alt="Thumbnail" class="img-fluid">
          </div>
          <div class="get-started-info">
            <h1>Join our team</h1>
            <p>Have you got what it takes? Become a Support Star with Alliance Community to make a difference in your community.</p>
          </div>
          <a href="<?php echo home_url('become-a-support-star/'); ?>" class="btn btn-secondary px-4 py-2">Become a Support Star</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>