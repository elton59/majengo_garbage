<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">


<body>



  

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <div  id="bg-video">
          <img src="assets/images/garbage.jpg"  />
      </div>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
                <h2>About Us</h2>
                            
              <p>Majengo Garbage Collection and Cleaning Services Limited is a private company located in Nairobi incorporated to fill in the gap that existed in providing superior service in cleaning and waste management. The company offers high quality services such as garbage collection and cleaning services for residential and corporate clients. The company aims to partner with local authorities and provide a comprehensive approach for processing household waste and comparable industrial waste.</p> -->
              <div class="main-button-red">
              <a href="staff/customer/signup.php"> <div class="scroll-to-section">Join Us Now!</div></a>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End *****

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <!-- <h4>Cleaning services</h4>
                <p>we offer the best cleaning services in town,customer services is our highest priority</p> -->
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <!-- <h4>Carbage collection</h4>
                <p>Qw conduct door to door garbage collection ensuring your neighbour hood stays clean</p> -->
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <!-- <h4>Loyalty bonus</h4>
                <p>All customers are awarded loyalty bonus</p> -->
              </div>
            </div>
            
            
          </div> -->
        </div>
      </div>
    </div>
  </section>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>