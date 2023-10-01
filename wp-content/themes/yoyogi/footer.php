  </main>
</div>
<footer id="footer" role="contentinfo">
  <div class="container">
    <div class="footer-logo">
      <img src="<?= get_template_directory_uri() . '/images/footer-logo.svg'?>" alt="Yoyogi Sushi">
    </div>
    <div class="footer-address">
      <span>269 Swanston St, Melbourne VIC 3000</span>
      <a href="javascript:;" class="link arrow-link" id="view-map">
        <img src="<?= get_template_directory_uri() . '/images/arrow.svg'?>" alt="arrow">
        <span>View Map</span> 
      </a>  
    </div>
    <div class="contact">
      <span>MON - SUN 9:00AM - 10:00PM</span>
      <span>TEL: 03 9988 8899</span>
      <span>hello@yoyogi.com.au</span>
    </div>
  </div>
  <div class="map" id="map">
    <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.06533558808!2d144.96465759999998!3d-37.8119386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642ca42a929c7%3A0x1256e90a9f41c455!2s269%20Swanston%20St!5e0!3m2!1szh-CN!2sau!4v1695534149052!5m2!1szh-CN!2sau" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div id="copyright">
    <div class="container">
      <span>COPYRIGHT &copy; <?= date('Y');?> YOYOGI SUSHI TRAIN. ALL RIGHTS RESERVED</span>
      <span>DEDSIGNED BY D&D CREATIVE</span>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>