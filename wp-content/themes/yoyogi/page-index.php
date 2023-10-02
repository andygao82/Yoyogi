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
        <div class="main-content-content fadeUp">
          <?= get_field('top_banner_content')?>
          <a href="javascript:void(0)" class="link arrow-link fadeUp-10" id="about-us-link">
            <img src="<?= get_template_directory_uri() . '/images/arrow.svg'?>" alt="arrow">
            <span>About Us</span>
          </a>
        </div>
      </div>
      <div class="main-image fadeUp-10">
        <img src="<?= get_field('top_banner_image')?>">
      </div>
    </div>
    <div class="side side-content">SUSHI TRAIN · HAND-ROLL SUSHI BAR · OMAKASE</div>
  </div>
</div>

<div class="section about-us-section" id="about-us">
  <div class="container">
    <div class="side side-content">SUSHI TRAIN · HAND-ROLL SUSHI BAR · OMAKASE</div>
    <div class="inner-wrapper">
      <section id="main-slider" class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <?php for ($i = 1; $i <= 8; $i++): ?>
              <?php if (get_field('about_us_gallery_image_' . $i)) : ?>
                <li class="splide__slide">
                  <img src="<?php echo get_field('about_us_gallery_image_' . $i) ?>" alt="<?= $post->post_title?>">
                </li>
              <?php endif; ?>
            <?php endfor ?>
          </ul>
        </div>
        <div class="splide__arrows">
          <button class="splide__arrow splide__arrow--prev">
            <img src="<?= get_template_directory_uri() . '/images/arrow.svg'?>" alt="arrow">
          </button>
          <button class="splide__arrow splide__arrow--next">
            <img src="<?= get_template_directory_uri() . '/images/arrow.svg'?>" alt="arrow">
          </button>
        </div>
      </section>
      <div class="main-content">
        <h2 class="fadeUp">About Us</h2>
        <div class="main-content-details fadeUp">
          <?= get_field('about_us_content')?>
          <a href="<?= get_field('conveyoy_belt_menu')?>" target="_blank" class="link arrow-link fadeUp-10">
            <img src="<?= get_template_directory_uri() . '/images/arrow.svg'?>" alt="arrow">
            <span>View Menu</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section food-section">
  <div class="container">
    <div class="inner-container">
      <div class="wrapper">
        <div class="inner-wrapper top-food-section" id="sushi-train">
          <div class="food-content">
            <h2 class="fadeUp"><?= get_field('joy_section_heading')?></h2>
            <div class="food-content-details fadeUp">
              <?= get_field('joy_section_content')?>
            </div>
            <a href="<?= get_field('conveyoy_belt_menu')?>" target="_blank" class="link arrow-link fadeUp-10">
              <img src="<?= get_template_directory_uri() . '/images/arrow.svg'?>" alt="arrow">
              <span>View Menu</span>
            </a>
          </div>
          <div class="section-image food-image">
            <img src="<?= get_field('joy_section_image')?>" alt="<?= get_field('joy_section_heading')?>">
            <div class="food-text-image fadeUp-10">
              <img src="<?= get_template_directory_uri() . '/images/huizhuan.svg'?>" alt="arrow">
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="inner-wrapper bottom-food-section" id="hand-roll">
          <div class="food-content">
            <h2 class="fadeUp"><?= get_field('handroll_bar_heading')?></h2>
            <div class="food-content-details fadeUp">
              <?= get_field('handroll_bar_content')?>
            </div>
            <a href="<?= get_field('handroll_bar_menu')?>" target="_blank" class="link arrow-link fadeUp-10">
              <img src="<?= get_template_directory_uri() . '/images/arrow.svg'?>" alt="arrow">
              <span>View Menu</span>
            </a>
          </div>
          <div class="section-image food-image fadeUp-10">
            <img src="<?= get_field('handroll_bar_image')?>" alt="<?= get_field('handroll_bar_heading')?>">
            <div class="food-text-image">
              <img src="<?= get_template_directory_uri() . '/images/shoujuan.svg'?>" alt="arrow">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="side side-content">SUSHI TRAIN · HAND-ROLL SUSHI BAR · OMAKASE</div>
  </div>
</div>
<div class="section beverage-section" id="beverage">
  <div class="container">
    <div class="side side-content">SUSHI TRAIN · HAND-ROLL SUSHI BAR · OMAKASE</div>
    <div class="inner-wrapper">
      <div class="section-image beverage-image fadeUp-10">
        <img src="<?= get_field('beverage_image')?>" alt="<?= get_field('beverage_heading')?>">
      </div>
      <div class="beverage-content">
        <h2 class="fadeUp"><?= get_field('beverage_heading')?></h2>
        <div class="beverage-content-details fadeUp-10">
          <?= get_field('beverage_content')?>
        </div>
      </div>
      <div class="beverage-text-image">
        <img src="<?= get_template_directory_uri() . '/images/circle.svg'?>" alt="arrow">
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>