<?php
// Template name: О компании
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
            <?php the_field('about_us_title');?>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="about-us">
    <div class="container">
      <div class="row">
        <h1 class="about-us__title inner-title">
          <?php the_field('about_us_title');?>
        </h1>
        <div class="about-us__dscr-wrapper">
          <div class="about-us__img-wrapper">
          <?php $image = get_field('about_us_img');?>
            <img src="<?php echo $image['url'] ?>" height="149" width="149" alt="about-us-img" class="about-us__img">
          </div>
          <div class="about-us__dscr">
            <b class="about-us__dscr-title">
              <?php the_field('about_us_sub_title');?>
            </b>
            <p class="about-us__dscr-txt">
              <?php the_field('about_us_dscr');?>
            </p>
          </div>
        </div>
        <div class="about-us__dscr-more">
          <b class="about-us__dscr-more-title">
            Подробное описание школы
          </b>
          <p class="about-us__dscr-more-txt">
            <?php the_field('about_us_dscr_more');?>
          </p>
        </div>
      </div>
    </div>
  </section>
<?php
get_footer();
?>