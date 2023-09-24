<?php
  /*
  Template Name: Home Page
  Description: A Home page template.
  */
?>
<?php get_header(); ?>
<div class="section banner-section">
  <div class="container">
    <div class="main inner-wrapper">
      <div class="main-content">
        <div class="main-content-logo"><img src="<?= get_template_directory_uri() . '/images/logo-01.svg'?>" alt="Yoyogi Sushi"></div>
        <div class="main-content-content">
          <?= get_field('top_banner_content')?>
          <a href="javascript:void(0)" onclick="" class="link arrow-link">About Us</a>
        </div>
      </div>
      <div class="main-image">
        <img src="<?= get_field('top_banner_image')?>">
      </div>
    </div>
    <div class="side side-content">SUSHI TRAIN · HAND-ROLL SUSHI BAR · OMAKASE</div>
  </div>
</div>

<div class="section about-us-section" id="about-us-section">
  <div class="container">
    <div class="side side-content">SUSHI TRAIN · HAND-ROLL SUSHI BAR · OMAKASE</div>
    <div class="inner-wrapper">
      <div class="slider">

      </div>
      <div class="main-content">
        <h2>About Us</h2>
        <div class="main-content-details">
          <?= get_field('about_us_content')?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section food-section">
  <div class="container">
    <div class="inner-wrapper top-food-section">
      <div class="food-content">
        <h2><?= get_field('joy_section_heading')?></h2>
        <div class="about-us-content-details">
          <?= get_field('joy_section_content')?>
        </div>
        <a href="<?= get_field('conveyoy_belt_menu')?>" target="_blank" class="link arrow-link">View Menu</a>
      </div>
      <div class="section-image food-image">
        <img src="<?= get_field('joy_section_image')?>" alt="<?= get_field('handroll_bar_heading')?>">
      </div>
    </div>
    <div class="inner-wrapper bottom-food-section">
      <div class="food-content">
        <h2><?= get_field('handroll_bar_heading')?></h2>
        <div class="about-us-content-details">
          <?= get_field('handroll_bar_content')?>
        </div>
        <a href="<?= get_field('handroll_bar_menu')?>" target="_blank" class="link arrow-link">View Menu</a>
      </div>
      <div class="section-image food-image">
        <img src="<?= get_field('handroll_bar_image')?>" alt="<?= get_field('handroll_bar_heading')?>">
      </div>
    </div>
    <div class="side side-content">SUSHI TRAIN · HAND-ROLL SUSHI BAR · OMAKASE</div>
  </div>
</div>

<div class="section beverage-section">
  <div class="container">
    <div class="side side-content">SUSHI TRAIN · HAND-ROLL SUSHI BAR · OMAKASE</div>
    <div class="inner-wrapper">
      <div class="section-image beverage-image">
        <img src="<?= get_field('beverage_image')?>" alt="<?= get_field('beverage_heading')?>">
      </div>
      <div class="beverage-content">
        <h2><?= get_field('beverage_heading')?></h2>
        <div class="about-us-content-details">
          <?= get_field('beverage_content')?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>