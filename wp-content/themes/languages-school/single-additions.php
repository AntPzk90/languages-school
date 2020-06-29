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
            <?php the_field('additional_title');?>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="language">
    <div class="container">
      <div class="row">
        <h1 class="language__title inner-title">
            <?php the_field('additional_title');?>
        </h1>
        <div class="language__dscr-wrapper">
          <div class="language__img-wrapper">
            <?php $image = get_field('additionals_img');?>
            <img src="<?php echo $image['url'] ?>" height="400" width="550" alt="language-img" class="language__img">
          </div>
          <div class="language__dscr">
            <b class="language__dscr-title">
              Описание курса
            </b>
            <p class="language__dscr-txt">
            <?php the_field('additionals_dscr');?>
            </p>
            <div class="language__price">
              <p class="language__price-txt">
                <span class="language__price-mini-title">Стоимость курса:</span>
                <span class="language__price-red-txt">
                    <?php the_field('additionals_price');?>
                </span>
                <span class="language__price-currency"> грн./мес.</span>
              </p>
              <a href="#" class="language__btn btn">
                Записаться
              </a>
            </div>
          </div>
        </div>
        <div class="language__dscr-more">
          <b class="language__dscr-more-title">
            Подробное описание курса
          </b>
          <p class="language__dscr-more-txt">
            <?php the_field('additionals_dscr_more');?>
          </p>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
?>