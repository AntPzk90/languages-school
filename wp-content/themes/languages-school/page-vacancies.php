<?php
// Template name: Вакансии
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
            <?php the_field('vacancies_title');?>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="vacancies">
    <div class="container">
      <div class="row">
        <h1 class="vacancies__title inner-title">
          <?php the_field('vacancies_title');?>
        </h1>
        <div class="vacancies__wrapper">
          <b class="vacancies__main-slogan">
            <?php the_field('vacancies_slogan');?>
          </b>
          <span class="vacancies__small-slogan">
            Почему вам понравится у нас?
          </span>
          <ul class="vacancies__advantages-list">
            <?php
              if (have_rows('benefits_list')) :
                while (have_rows('benefits_list')) : the_row();
              ?>
                <li class="vacancies__advantages-list-item">
                  <?= the_sub_field('benefit'); ?>
                </li>
              <?php
                endwhile;

              else :
              endif;
            ?>
          </ul>

          <ul class="vacancies__list">
            <?php
              if (have_rows('vacancies_list')) :
                while (have_rows('vacancies_list')) : the_row();
              ?>
                <li class="vacancies__list-item">
                  <b class="vacancies__item-title">
                    <?= the_sub_field('vacancies_title'); ?>
                  </b>
                  <p class="vacancies__item-slogan">
                    <?= the_sub_field('vacancies_dscr'); ?>
                  </p>
                  <ul class="vacancies__skills-list">
                    <?php
                      if (have_rows('requirements_list')) :
                        while (have_rows('requirements_list')) : the_row();
                      ?>
                        <li class="vacancies__skills-list-item">
                          <?= the_sub_field('requirement'); ?>
                        </li>
                      <?php
                        endwhile;

                      else :
                      endif;
                    ?>
                  </ul>
                  <a href="#" class="vacancies__btn btn">
                    Откликнуться
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
  </section>
<?php
get_footer();
?>