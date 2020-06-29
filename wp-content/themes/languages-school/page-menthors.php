<?php
// Template name: Преподаватели
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
            Преподаватели
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="menthors">
    <div class="container">
      <div class="row">
        <h1 class="menthors__title inner-title">Преподаватели</h1>
        <p class="menthors__dscr">
          <?php the_field('menthors_dscr');?>
        </p>

        <ul class="menthors__list">
          <?php
            if (have_rows('menthors_list')) :
              while (have_rows('menthors_list')) : the_row();
            ?>
                <li class="menthors__list-item">
                  <img src="<?php echo get_sub_field('menthor_foto')['url'];?>" height="260" width="260" alt="<?php echo get_sub_field('menthor_foto')['alt'];?>" class="menthors__list-img">
                  <b class="menthors__list-title">
                    <?= the_sub_field('menthor_name'); ?>
                  </b>
                  <p class="menthors__list-txt">
                    <?= the_sub_field('menthor_dscr'); ?>
                  </p>
                </li>
            <?php
              endwhile;

            else :
            endif;
          ?>
        </ul>
      </div>
    </div>
  </section>
<?php
get_footer();
?>