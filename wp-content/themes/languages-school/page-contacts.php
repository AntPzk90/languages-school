<?php
// Template name: Контакты
?>
<?php
get_header();
?>
<main>

  <section class="breadcrumbs">
    <div class="container">
      <div class="row">
        <h5 class="vis-hidd">
          навигация по сайту (хлебный крошки)
        </h5>
        <ul class="breadcrumbs__list">
          <li class="breadcrumbs__list-item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__list-link">
              Главная
            </a>
          </li>
          <li class="breadcrumbs__list-item">
            <?php the_field('contacts_title');?>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="contacts">
    <div class="container">
      <div class="row">
        <h1 class="contacts__title inner-title">
          <?php the_field('contacts_title');?>
        </h1>
        <div class="contacts__wrapper">
          <div class="contacts__wrapper-inner-top">
            <div class="contacts__address-wrap">
              <h3 class="contacts__address-title contacts__sub-title">
                Адрес:
              </h3>
              <ul class="contacts__list-address">
                <?php
                  if (have_rows('address_list')) :
                    while (have_rows('address_list')) : the_row();
                  ?>
                    <li class="contacts__list-address-item">
                      <?= the_sub_field('address'); ?>
                    </li>
                  <?php
                    endwhile;

                  else :
                  endif;
                ?>
              </ul>
            </div>
            <div class="contacts__work-time-wrapper">
              <h3 class="contacts__address-title contacts__sub-title">
                Часы работы
              </h3>
              <ul class="contacts__list-work-time">
              <ul class="contacts__list-address">
                <?php
                  if (have_rows('work_days_list')) :
                    while (have_rows('work_days_list')) : the_row();
                  ?>
                    <li class="contacts__list-work-time-item">
                      <?= the_sub_field('work_day'); ?>
                    </li>
                  <?php
                    endwhile;

                  else :
                  endif;
                ?>
              </ul>
            </div>
          </div>
          <div class="contacts__wrapper-inner-bottom">
            <div class="contacts__tel-wrapper">
              <h3 class="contacts__tel-title contacts__sub-title">
                Телефоны:
              </h3>
              <ul class="contacts__list-tel">
                <?php
                  if (have_rows('contacts_tels_list')) :
                    while (have_rows('contacts_tels_list')) : the_row();
                  ?>
                    <li class="contacts__list-tel-item">
                      <a href="tel:<?= the_sub_field('contacts_tel_number_link'); ?>" class="contacts__list-tel-link">
                        <?= the_sub_field('contacts_tel_number_text'); ?>
                      </a>
                    </li>
                  <?php
                    endwhile;

                  else :
                  endif;
                ?>
              </ul>
            </div>

            <div class="contacts__social-wrapper">
              <h3 class="contacts__social-title contacts__sub-title">
                Социльаные сети:
              </h3>
              <ul class="contacts__list-social">
                <?php
                  if (have_rows('contacts_social_list')) :
                    while (have_rows('contacts_social_list')) : the_row();
                  ?>
                    <li class="contacts__list-social-item">
                      <a href="<?= the_sub_field('contacts_link'); ?>" class="contacts__list-social-link">
                        <?= the_sub_field('contacts_link_text'); ?>
                      </a>
                    </li>
                  <?php
                    endwhile;

                  else :
                  endif;
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
get_footer();
?>