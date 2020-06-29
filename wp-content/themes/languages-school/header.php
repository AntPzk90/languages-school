<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php wp_title() ?></title>
  <link rel="shortcut icon" href="<?php echo bloginfo('template_url');?>/assets/img/ico.ico" type="image/x-icon">
  <?php
    wp_head();
  ?>
</head>

<body <?php body_class(); ?>>
  <?= wp_body_open() ?>
  <header class="header">
    <div class="header__wrapper">
      <div class="header__logo-wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo-link">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/header-logo.png" height="149" width="149" alt="header-logo" class="header__logo-img">
        </a>
      </div>
      <div class="header__top">
        <button type="button" class="header__top-btn mobile-btn">
          <span class="mobile-btn__decor"></span>
        </button>
        <div class="header__top-wrapper big-container">
          <ul class="header__address-list">
            <li class="header__address-list-item">
                <?= the_field('address_1', 2);?>
            </li>
            <li class="header__address-list-item">
                <?= the_field('address_2', 2);?>
            </li>
          </ul>
          <ul class="header__tel-list">
            <li class="header__tel-list-item">
              <a href="tel:<?= the_field('tel_number_link_1', 2);?>" class="header__tel-list-link">
                <?= the_field('tel_number_1', 2);?>
              </a>
            </li>
            <li class="header__tel-list-item">
              <a href="tel:<?= the_field('tel_number_link_2', 2);?>" class="header__tel-list-link">
                <?= the_field('tel_number_2', 2);?>
              </a>
            </li>
          </ul>
          <ul class="header__social-list">
            <li class="header__social-list-item">
              <a href="<?= the_field('facebook_link', 2);?>" class="header__social-list-link header__social-list-link--fb">
                <?= the_field('facebook', 2);?>
              </a>
            </li>
            <li class="header__social-list-item">
              <a href="<?= the_field('instagram_link', 2);?>" class="header__social-list-link header__social-list-link--inst">
                <?= the_field('instagram', 2);?>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="header__bottom">
            <div class="header__bottom-wrapper">
              <nav class="header__nav">
                <?php
                  wp_nav_menu( [
                    'menu'            => 'Main', 
                    'container'       => false, 
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul class="header__nav-list">%3$s</ul>',
                    'depth'           => 0,
                  ] );
                ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>