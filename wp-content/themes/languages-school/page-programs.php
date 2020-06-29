<?php
// Template name: Учебные программы
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
            <?php the_field('programs_title');?>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="programs">
    <div class="container">
      <div class="row">
        <h1 class="programs__title inner-title">
          <?php the_field('programs_title');?>
        </h1>
        <p class="programs__main-dscr">
          <?php the_field('programs_dscr');?>
        </p>

        <?php
          if (have_rows('programs_article')) :
            while (have_rows('programs_article')) : the_row();
          ?>
            <div class="programs__article">
              <h3 class="programs__article-title">
                <?= the_sub_field('programs_article_title'); ?>
              </h3>
              <p class="programs__article-txt">
                <?= the_sub_field('programs_article_text'); ?>
              </p>
            </div>
          <?php
            endwhile;

          else :
          endif;
        ?>
        <div class="programs__list-block">
          <h3 class="programs__list-title">
            <?php the_field('programs_dscr_sub_title');?>
          </h3>
          <div class="programs__list-wrapper">
            <ul class="programs__list programs__list--left">
              <?php
                if (have_rows('programs_list_left')) :
                  while (have_rows('programs_list_left')) : the_row();
                ?>
                  <li class="programs__list-item">
                    <?= the_sub_field('programs_list_left_item'); ?>
                  </li>
                <?php
                  endwhile;

                else :
                endif;
              ?>
            </ul>

            <ul class="programs__list programs__list--right">
              <?php
                if (have_rows('programs_list_right')) :
                  while (have_rows('programs_list_right')) : the_row();
                ?>
                  <li class="programs__list-item">
                    <?= the_sub_field('programs_list_right_item'); ?>
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
  </section>
<?php
get_footer();
?>