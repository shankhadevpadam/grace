<?php

if (empty($args)) return;

$block        = $args['block'] ?? '';
$contact_form = $block['choose_contact_form'];

$social_medias = get_field('social_links', 'option');
$address       = get_field('address', 'option');
$phone         = get_field('phone', 'option');
$email         = get_field('email', 'option');
?>
<section class="ilml-section ilml-contact ilml-event-content pb-0">
   <div class="container pb-4">
      <div class="ilml-contact-area">
         <div class="ilml-contact-two-wrapper mb-5">
            <div class="ilml-contact-lft-cnt">
               <div class="ilml-login-form ilml-floating-form-wrapper">
                  <?php echo $contact_form; ?>
               </div>
            </div>
            <div class="ilml-contact-rgt-cnt">
               <div class="widget ilml-widget_getintuch">
                  <h4 class="mb-4">Contact Us</h4>
                  <ul>
                     <?php if ($address) : ?>
                        <li>
                           <i class="bi bi-geo"></i><strong>ADDRESS</strong> <?php echo $address; ?>
                        </li>
                     <?php endif; ?>
                     <?php if ($phone) : ?>
                        <li>
                           <i class="bi bi-phone"></i><strong>PHONE</strong>
                           <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                        </li>
                     <?php endif; ?>
                     <?php if ($email) : ?>
                        <li>
                           <i class="bi bi-envelope"></i><strong>EMAIL</strong>
                           <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </li>
                     <?php endif; ?>
                  </ul>
               </div>
               <div class="ilml-footer-social mt-4">
                  <?php if ($social_medias) : ?>
                     <h4 class="mb-4">Follow Us</h4>
                     <ul class="d-flex ps-0 mb-0 social-icon social-bg-red">
                        <?php foreach ($social_medias as $media) {
                           $data = [
                              'icon' => $media['icon'],
                              'url'  => $media['url'],
                           ];
                           locate_template('views/components/social-media.php', true, false, $data);
                        } ?>
                     </ul>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ilml-section ilml-contact ilml-event-content pb-0">

</section>
