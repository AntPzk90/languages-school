<?php
// Template name: Экзамены Cambridge English
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
            <?php the_field('exams_title');?>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="exams">
    <div class="container">
      <div class="row">
        <h1 class="exams__title inner-title">
          <?php the_field('exams_title');?>
        </h1>
        <div class="exams__wrapper">
          <div class="exams__dscr-wrapper">
            <div class="exams__img-wrapper">
            <?php $image = get_field('exams_img');?>
            <img src="<?php echo $image['url'] ?>" height="89" width="475" alt="exams-img" class="exams__img">
            </div>
            <div class="exams__dscr">
              <p class="exams__dscr-txt">
                <b class="exams__dscr-bold">
                  <?php the_field('exams_bold_text');?>
                </b>
                <?php the_field('exams_dscr');?>
              </p>
            </div>
          </div>
          <div class="exams__lists-wrapper">
            <h3 class="exams__lists-title">
              <?php the_field('exams_sub_title');?>
            </h3>
            <div class="exams__lists-wrapper-inner">
              <div class="exams__list-wrapper exams__list-wrapper--left">
                <div class="exams__list-decor">
                  <?php the_field('exams_decor_text_left');?>
                </div>
                <b class="exams__list-sub-title">
                  <?php the_field('exams_list_title_left');?>
                </b>
                <ul class="exams__list">
                  <?php
                    if (have_rows('exams_list_left')) :
                      while (have_rows('exams_list_left')) : the_row();
                    ?>
                      <li class="exams__list-item">
                        <span class="exams__list-item-column exams__list-item-colum--txt">
                          <?= the_sub_field('exams_list_dscr'); ?>    
                        </span>
                        <span class="exams__list-item-column exams__list-item-colum--price">
                          <?= the_sub_field('exams_list_price'); ?>
                          <span class="exams__mnemon">
                            &#8372;
                          </span>
                        </span>
                      </li>
                    <?php
                      endwhile;

                    else :
                    endif;
                  ?>
                </ul>
              </div>

              <div class="exams__list-wrapper exams__list-wrapper--right">
                <div class="exams__list-decor">
                <?php the_field('exams_decor_text_right');?>
                </div>
                <b class="exams__list-sub-title">
                  <?php the_field('exams_list_title_right');?>
                </b>
                <ul class="exams__list">
                  <?php
                    if (have_rows('exams_list_right')) :
                      while (have_rows('exams_list_right')) : the_row();
                    ?>
                      <li class="exams__list-item">
                        <span class="exams__list-item-column exams__list-item-colum--txt">
                          <?= the_sub_field('exams_list_dscr'); ?>    
                        </span>
                        <span class="exams__list-item-column exams__list-item-colum--price">
                          <?= the_sub_field('exams_list_price'); ?>
                          <span class="exams__mnemon">
                            &#8372;
                          </span>
                        </span>
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
    </div>
  </section>
<?php
get_footer();
?>