  <section class="section-dark sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 colmargin">
            <h3 class="text-white">Dr Minu's Eye Clinic</h3>
            <ul class="address-info no-border">
              <li>Fathima Convent Road, <br> Christopher  Nagar, <br> Ollur P.O 680306, <br> Thrissur.</li>
              <li><i class="fa fa-phone"></i> Phone: +91 8714802881</li>
              <li><i class="fa fa-envelope"></i> Email: minusurdas@gmail.com </li>
            </ul>
          </div>
          <!--end item-->

          <div class="col-md-2 clearfix centre">
            <h4 class="uppercase footer-title less-mar3 font-weight-3">Sitemap</h4>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip"></div>
            <ul class="usefull-links no-border">
              <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>about.php"><i class="fa fa-angle-right"></i> About Us</a></li>
              <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>treatments/cataract.php"><i class="fa fa-angle-right"></i> Cataract</a></li>
              <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>treatments/oculoplasty.php"><i class="fa fa-angle-right"></i> Oculoplasty</a> </li>
              <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>treatments/squint.php"><i class="fa fa-angle-right"></i> Squint</a> </li>
              <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>news.php"><i class="fa fa-angle-right"></i> Health News</a></li>
              <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>gallery.php"><i class="fa fa-angle-right"></i> Gallery</a></li>
              <li><a href="<?php echo $GLOBALS['BASE_URL'] ?>contact.php"><i class="fa fa-angle-right"></i> Contact Us</a></li>
            </ul>
          </div>

          <!--end item-->

          <div class="col-md-6 clearfix">
            <h4 class="uppercase footer-title less-mar3 font-weight-3">map location</h4>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip"></div>
            <div class="smart-forms dark bmargin">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15692.69561656876!2d76.2372912!3d10.4869534!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9aad586e88bad9f0!2sDr%20Minu&#39;s%20Eye%20Clinic!5e0!3m2!1sen!2sin!4v1601789727461!5m2!1sen!2sin" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
          <!--end item-->

          <!--end item-->

        </div>
      </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="section-copyrights sec-moreless-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-left text-white"> <span>Copyright © 2020 Dr Minu's Eye Clinic | All rights reserved.</span></div>
          <div class="col-md-6">
            <ul class="social-icons-3 dark-2 less-margin">
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <a href="#" class="scrollup blue"></a><!-- end scroll to top of the page-->
  </div>
  <!-- end site wraper -->

  <!-- ============ JS FILES ============ -->

  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/universal/jquery.js"></script>
  <script src="<?php echo $GLOBALS['BASE_URL'] ?>js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo $GLOBALS['BASE_URL'] ?>js/masterslider/jquery.easing.min.js"></script>
  <script src="<?php echo $GLOBALS['BASE_URL'] ?>js/masterslider/masterslider.min.js"></script>
  <script type="text/javascript">
    (function ($) {
      "use strict";
      var slider = new MasterSlider();
      // adds Arrows navigation control to the slider.
      slider.control('arrows');
      slider.control('bullets');

      slider.setup('masterslider', {
        width: 1600,    // slider standard width
        height: 630,   // slider standard height
        space: 0,
        speed: 45,
        layout: 'fullwidth',
        loop: true,
        preload: 0,
        autoplay: true,
        view: "parallaxMask"
      });

    })(jQuery);
  </script>
  <script src="<?php echo $GLOBALS['BASE_URL'] ?>js/mainmenu/customeUI.js"></script>
  <script src="<?php echo $GLOBALS['BASE_URL'] ?>js/owl-carousel/owl.carousel.js"></script>
  <script src="<?php echo $GLOBALS['BASE_URL'] ?>js/owl-carousel/custom.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/tabs/smk-accordion.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/tabs/custom.js"></script>
  <script src="<?php echo $GLOBALS['BASE_URL'] ?>js/scrolltotop/totop.js"></script>
  <script src="js/mainmenu/jquery.sticky.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/cubeportfolio/main-three-col.js"></script>

  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/smart-forms/jquery.form.min.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/smart-forms/jquery.validate.min.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/smart-forms/additional-methods.min.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/smart-forms/smart-form.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/scripts/functions.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/emailer/mail-book-eye-test.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/emailer/mail-review.js"></script>
  <script type="text/javascript" src="<?php echo $GLOBALS['BASE_URL'] ?>js/scripts/custom.js"></script>
</body>

</html>