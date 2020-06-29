<?php
get_header();
?>
<main>

  <section class="slider">

    <h3 class="vis-hidd">Предложения языковой школы My house language school</h3>
    <div class="slider__wrapper">
      <div class="container">
        <div class="row">
          <div class="slider__container-wrapper">
            <?php
            if (have_rows('slider')) :
              while (have_rows('slider')) : the_row();
            ?>
                <div class="slider__item">
                  <div class="slider__item-background-wrapper" style="background-image: url(<?= the_sub_field('slider_img'); ?>);">
                    <div class="slider__info">
                      <b class="slider__title <?= the_sub_field('slider_title_color'); ?>">
                        <?= the_sub_field('slider_title'); ?>
                      </b>
                      <span class="slider__txt <?= the_sub_field('slider_title_color'); ?>">
                        <?= the_sub_field('slider_dscr'); ?>
                      </span>
                      <a href="#" class="slider__btn btn">Записаться на курс</a>
                    </div>
                  </div>
                </div>

            <?php
              endwhile;

            else :
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="lang-sel">
    <h2 class="lang-sel__title section-title">Какой язык вас интересует?</h2>
    <div class="lang-sel__wrapper big-container">
      <ul class="lang-sel__list">
          <?php 
            $args = array(
              'post_type'      => 'languages',
              'posts_per_page' => -1,
            );
          ?>

          <?php
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :?>
              <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <li class="lang-sel__list-item">
                  <?php $image_bg = get_field('flag_bg');?>
                  <img class="lang-sel__background-img" src="<?php echo $image_bg['url']; ?>" width="300" height="300" alt="<?php echo $image_bg['alt'];?>" class="lang-sel__list-img">
                  <a href="<?php the_permalink();?>" class="lang-sel__list-link">
                    <?php $image = get_field('flag');?>
                    <img src="<?php echo $image['url'] ?>" width="202" height="202" alt="<?php echo $image['alt'];?>" class="lang-sel__list-img">
                    <span class="leng-sel__title"><?php the_title();?></span>
                  </a>
                </li>
              <?php endwhile; ?>
            <?php endif;
            wp_reset_query(); 
          ?>
      </ul>
    </div>
  </section>

  <section class="additional-offer">
    <h2 class="additional-offer__title section-title">Что еще мы предлагаем?</h2>
    <div class="container">
      <div class="row">
        <ul class="additional-offer__list">
        <?php 
            $args = array(
              'post_type'      => 'additions',
              'posts_per_page' => -1,
            );
          ?>

          <?php
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :?>
              <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <li class="additional-offer__list-item">
                <?php $image_bg_additions = get_field('additionals_bg');?>
                <img src="<?php echo $image_bg_additions['url']; ?>" height="260" width="260" alt="" class="additional-offer_img-bg">
                <a href="<?php the_permalink();?>" class="additional-offer__list-link">
                  <?php $image = get_field('additionals_icon');?>
                  <img src="<?php echo $image['url'] ?>" alt="additional-offer-icon">
                  <span class="additional-offer__item-title"><?php the_title();?></span>
                </a>
              </li>
              <?php endwhile; ?>
            <?php endif;
            wp_reset_query(); 
          ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="our-schools">
    <h2 class="our-scholls__title section-title">Наши школы</h2>
    <div class="container">
      <div class="row">
        <div class="our-schools__img-wrapper col-md-6 col-xl-6">
        <?php $image = get_field('school_img');?>
          <img src="<?php echo $image['url'] ?>" height="350" width="550" alt="our-school" class="our-schools_img">
          <table class="our-school-address">
            <?php
              if (have_rows('info_list')) :
                while (have_rows('info_list')) : the_row();
              ?>
                <tr>
                  <td>
                    <?= the_sub_field('info_title'); ?>
                  </td>
                  <td>
                    <?= the_sub_field('info_text'); ?>
                  </td>
                </tr>
              <?php
                endwhile;

              else :
              endif;
            ?>
          </table>
        </div>
        <div class="our-schools__map-wrapper col-md-6">
          <div class="our-schools__container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5345.0645337762835!2d33.423040132505726!3d47.94543057250393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40db207350a67a83%3A0xc1053f52e55466e0!2z0YPQuy4g0JLQu9Cw0LTQuNC80LjRgNCwINCS0LXQu9C40LrQvtCz0L4sIDM4LCDQmtGA0LjQstC-0Lkg0KDQvtCzLCDQlNC90LXQv9GA0L7Qv9C10YLRgNC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNTAwMDA!5e0!3m2!1sru!2sua!4v1593174674327!5m2!1sru!2sua" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="our-schools_map-mini"></iframe>
          </div>
          <table class="our-school-address">
            <?php
              if (have_rows('info_list')) :
                while (have_rows('info_list')) : the_row();
              ?>
                <tr>
                  <td>
                    <?= the_sub_field('info_title'); ?>
                  </td>
                  <td>
                    <?= the_sub_field('info_text'); ?>
                  </td>
                </tr>
              <?php
                endwhile;

              else :
              endif;
            ?>
          </table>
        </div>
      </div>
    </div>
  </section>

  <section class="test">
    <h3 class="vis-hidd">Бесплатный тест</h3>
    <div class="container">
      <div class="row">
        <div class="test__wrapper">
          <p class="test__txt">
            Хотите узнать свой уровень
            владения английским?
            <span>Наш бесплатный тест поможет вам!</span>
          </p>
          <a href="#test" class="test__link btn">Пройти тест</a>
        </div>
      </div>
    </div>
  </section>

  <?php
  get_footer();
  ?>