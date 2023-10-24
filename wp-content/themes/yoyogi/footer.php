  </main>
</div>
<footer id="footer" role="contentinfo">
  <div class="container">
    <div class="footer-wrapper">
      <div class="footer-inner-wrapper">
        <div class="footer-logo">
          <div class="image-wrapper">
            <img src="<?= get_template_directory_uri() . '/images/footer-logo.svg'?>" alt="Yoyogi Sushi">
          </div>
        </div>
        <div class="footer-social-media">
          <a class="social-media-link" href="https://www.instagram.com/yoyogi.sushi/" target="_blank">
            <img src="<?= get_template_directory_uri() . '/images/instagram.svg'?>" alt="Yoyogi Sushi"> 
          </a>
          <a class="social-media-link" href="https://www.instagram.com/yoyogi.sushi/" target="_blank">
            <img src="<?= get_template_directory_uri() . '/images/facebook.svg'?>" alt="Yoyogi Sushi"> 
          </a>
        </div>
        <div class="footer-address">
          <span>269 Swanston St, Melbourne VIC 3000</span>
        </div>
        <div class="contact">
          <span>TEL: 03 9650 0828</span>
          <span>hello@yoyogisushi.au</span>
        </div>
      </div>
      <div class="footer-inner-wrapper">
        <div class="footer-logo">
          <div class="image-wrapper">
            <img src="<?= get_template_directory_uri() . '/images/superhiro-logo.svg'?>" alt="Yoyogi Sushi">
          </div>
        </div>
        <div class="footer-social-media">
          <a class="social-media-link" href="https://www.instagram.com/superhiromelbourne/" target="_blank">
            <img src="<?= get_template_directory_uri() . '/images/instagram.svg'?>" alt="Yoyogi Sushi"> 
          </a>
          <a class="social-media-link" href="#" target="_blank">
            <img src="<?= get_template_directory_uri() . '/images/facebook.svg'?>" alt="Yoyogi Sushi"> 
          </a>
        </div>
        <div class="footer-address">
          <span>211-213 Swanston St, Melbourne VIC 3000</span>
        </div>
        <div class="contact">
          <span>TEL: 03 9663 7266</span>
          <span>hello@superhiro.com.au</span>
        </div>
        <a href="https://www.superhiro.com.au/" class="link arrow-link" target="_blank">
          <img src="<?= get_template_directory_uri() . '/images/arrow.svg'?>" alt="arrow">
          <span>Enter</span> 
        </a>  
      </div>
    </div>
  </div>
  <div id="copyright">
    <div class="container">
      <span>COPYRIGHT &copy; <?= date('Y');?> YOYOGI SUSHI TRAIN. ALL RIGHTS RESERVED</span>
      <span>DESIGNED BY D&D CREATIVE</span>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>