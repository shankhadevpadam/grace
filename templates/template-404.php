<?php 
/* Template Name: 404 Error Template */ 

get_header(); ?>
<div class="error-wrapper px-3">
   <div class="row justify-content-between text-center min-vh-100 row">
      <div class="mb-0 col-lg-12">
      </div>
      <div class="mb-4 col-lg-12">
         <div class="error-info ">
            <h1 class="highlight">404.</h1>
            <h3 class="fw-bold">We couldn't find that page.</h3>
         </div>
      </div>
      <div class="mb-4 col-lg-12">
         <p class="mb-0">The page you are looking for does not exist or other error occured.</p>
         <p class="mb-0"><a href="<?php echo get_home_url('/') ?>">Go back</a>, or head over to <a href="<?php echo get_home_url('/') ?>">gracefully-care.au</a> to choose a new direction</p>
      </div>
   </div>
</div>
<?php get_footer();?>
 