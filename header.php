<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package workcaretwentytwenty
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory');?>/assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_directory');?>/assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/dist/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/owlcarousel/owl.theme.default.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/venobox/venobox.min.css"/>
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/dist/css/main.css">
</head>
<body>
  <header class="main-header wc-primary-nav">
    <nav class="navbar navbar-expand-xl bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
          <img src="<?php bloginfo('template_directory');?>/assets/images/primary-logo.jpg" class="img-fluid" />
        </a>
        <div class="collapse navbar-collapse" id="primaryNav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" aria-current="page" href="#" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo home_url('aged-care'); ?>">Aged Care</a></li>
                <li><a class="dropdown-item" href="<?php echo home_url('aged-care'); ?>">Disability Support</a></li>
                <li><a class="dropdown-item" href="<?php echo home_url('aged-care'); ?>">High Level Support</a></li>
                <li><a class="dropdown-item" href="<?php echo home_url('aged-care'); ?>">Schedule a Support Consultation</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url('support-star'); ?>">Support Star</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url('stories'); ?>">Stories</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">About</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo home_url('about'); ?>">About us</a></li>
                <li><a class="dropdown-item" href="<?php echo home_url('our-people'); ?>">Our People</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo home_url('contact-us'); ?>">Contact us</a></li>
                <li><a class="dropdown-item" href="<?php echo home_url('feedback-compliments-and-complaints/'); ?>">Feedback, Compliments and Complaints</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="navbar_toggler-buttons d-flex align-items-center gap-2">
          <div class="right-aligned-wrapper">
            <div class="large-buttons">
              <ul>
                <li>
                  <a href="<?php echo home_url('become-a-support-star/'); ?>" class="btn btn-secondary">Schedule a Support Consultation</a>
                </li>
                <li>
                  <a href="<?php echo home_url('become-a-support-star/'); ?>"  class="btn btn-primary text-white">Become a Support Star</a>
                </li>
              </ul>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/icon-menu.svg" alt="humburger icon">
          </button>
        </div>
      </div>
    </nav>
  </header>
