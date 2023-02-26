<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package workcaretwentytwenty
 */

?>

  <footer class="footer-wrapper site-footer">
    <div class="container">
        <div class="row">
          <div class="col-sm-3">
              <img class="logo" src="<?php bloginfo('template_directory');?>/assets/images/logo-alliance-community-white.svg" alt="Alliance Community Health">
              <div class="row bottom-left" style="margin-top:10px; color:#fff;">
                <div class="col-12">
                    <p>Recruitment Solutions Group Australia Pty Ltd<br>
                      ABN 86 157 291 541<br>
                      Trading as: Alliance Community.
                    </p>
                </div>
              </div>
          </div>
          <div class="col-sm-9">
              <nav class="footer-nav" role="navigation">
                <ul id="menuElem">
                    <li>
                      <a href="<?php echo home_url('about/'); ?>">About</a>
                    </li>
                    <li>
                      <a href="<?php echo home_url('contact-us/'); ?>">Contact</a>
                    </li>
                    <li>
                      <a href="<?php echo home_url('news-and-media/'); ?>">News &amp; Media</a>
                    </li>
                    <li>
                      <a href="<?php echo home_url('news-and-media/'); ?>">Events</a>
                    </li>
                </ul>
              </nav>
          </div>
        </div>
        <div class="footer-bottom mt-5">
          <div>
            <p class="text-white">We offer respect and acknowledgement to Indigenous Peoples of Australia as the first inhabitants of this land. We offer our acknowledgement to their traditional and ongoing roles as custodians of Land and culture. We offer our respect to their Elders past, present and emerging.</p>
          </div>
          <div class="bottom-left">
            <span>&copy;  <?php echo $curr_year = date('Y'); ?> Alliance Community.</span>
            <a href="<?php echo home_url('website-accessibility/'); ?>">Website Accessibility</a>
            <a href="<?php echo home_url('privacy-policy/'); ?>">Privacy Policy</a>
            <a href="<?php echo home_url('platform-access/'); ?>">Platform Access</a>
            <a href="#" title="Explanation of WCAG 2.0 Level Triple-A Conformance" aria-label="Explanation of WCAG 2.0 Level Triple-A Conformance">
              <img src="https://www.w3.org/WAI/wcag2AAA" height="32" width="88" alt="Level Triple-A conformance, W3C WAI Web Content Accessibility Guidelines 2.0">
            </a>
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/quality-management-systems.png" alt="Quality: ISO 9001" height="32">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/NDIS-Certification-Colour-150x150.jpg" alt="NDIS Global Mark" height="32">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/NDIS-Certification-Colour-150x150.jpg" alt="ACIS Global Mark" height="32">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/ACIA-logo.png" alt="ACIA Global Mark" height="32">
          </div>
          <div class="bottom-right">
            <a href="#" class="link-facebook" target="_blank">
              <i class="bi bi-facebook"></i>
            </a><a href="#" class="link-facebook" target="_blank">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
        </div>
    </div>
  </footer>
  <script src="https://player.vimeo.com/api/player.js"></script>
  <script src="<?php bloginfo('template_directory');?>/assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/assets/js/jquery-3.6.1.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/assets/owlcarousel/owl.carousel.js"></script>
  <script src="<?php bloginfo('template_directory');?>/assets/venobox/venobox.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/assets/js/unillax-min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js"></script>
  <script src="<?php bloginfo('template_directory');?>/assets/js/custom.js"></script>
</body>
</html>
