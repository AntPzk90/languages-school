<section class="map">
    <h3 class="vis-hidd"> Предложения языковой школы My house language school</h3>
    <div class="map__wrapper">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2672.652245757317!2d33.41588881504954!3d47.94311007266516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40db20767c60cf03%3A0x13ccc4b5a69a30df!2z0YPQuy4g0JLQu9Cw0LTQuNC80LjRgNCwINCS0LXQu9C40LrQvtCz0L4sIDI50JIsINCa0YDQuNCy0L7QuSDQoNC-0LMsINCU0L3QtdC_0YDQvtC_0LXRgtGA0L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA1MDAwMA!5e0!3m2!1sru!2sua!4v1592557403442!5m2!1sru!2sua" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map__iframe"></iframe>
      <div class="map__container-wrapper">
        <div class="container">
          <div class="row">
            <div class="map__form-wrapper form-wrapper">
              <b class="form-wrapper__title">
                Свяжитесь с нами
              </b>
              <p class="form-wrapper__txt">
                Наш менеджер ответит на все Ваши
                вопросы и проконсультирует
                по программам обучения
              </p>
              <?php echo do_shortcode('[contact-form-7 id="58" title="Форма обратной свзяи"]');?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="footer__wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/footer-logo.png" height="119" width="119" alt="footer-logo" class="footer__logo-img">
        </a>
        <div class="footer__center-wrapper">
          <ul class="footer__address-list">
            <li class="footer__address-list-item">
              <?= the_field('address_1', 2);?>
            </li>
            <li class="footer__address-list-item">
            <?= the_field('address_2', 2);?>
            </li>
          </ul>
          <ul class="footer__tel-list">
            <li class="footer__tel-list-item">
              <a href="tel:<?= the_field('tel_number_link_1', 2);?>" class="footer__tel-list-link">
                <?= the_field('tel_number_1', 2);?>  
              </a>
            </li>
            <li class="footer__tel-list-item">
              <a href="tel:<?= the_field('tel_number_link_2', 2);?>" class="footer__tel-list-link">
                <?= the_field('tel_number_2', 2);?>
              </a>
            </li>
          </ul>
        </div>
        <ul class="footer__social-list">
          <li class="footer__social-list-item">
            <a href="#<?= the_field('facebook_link', 2);?>" class="footer__social-list-link">
              <?= the_field('facebook', 2);?>
            </a>
          </li>
          <li class="footer__social-list-item">
            <a href="<?= the_field('instagram_link', 2);?>" class="footer__social-list-link">
              <?= the_field('instagram', 2);?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<?php
  wp_footer();
?>
</body>

</html>