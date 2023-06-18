<?php
require_once('../hnd/controller/mainControl.php');
require_once('./view/repeat.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Newසමාධි</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link rel="icon" href="./assets/img/s.ico" type="image/x-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
  integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/card.css">
<!-- 
  ==========image gallery style========== -->
<style>
  .btn:focus,
  .btn:active,
  button:focus,
  button:active {
    outline: none !important;
    box-shadow: none !important;
  }

  #image-gallery .modal-footer {
    display: block;
  }

  .thumb {
    margin-top: 15px;
    margin-bottom: 15px;
  }
</style>
<!-- ============================================== -->
</head>

<body>

<!-- ======include connect========== -->
<?php
include './php/connect.php';

?>

  <!-- ======= Header ======= -->
<?php

include './view/navbar.php';

?>
<!-- ======= Header End ======= -->
  
  <!-- ======= Hero Section ======= -->
 <?php
   $homeObj = new Home();
   $homeObj->getCarosal();
   
   ?>
 <!-- End Hero -->

 <!-- ===News header===== -->
   <?php
   news();
   ?>
 <!-- End News -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/1679970743560.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>What is new Samadhi institute? What do you get from our Institute?</h3>
            <p class="fst-italic">
              New Samadhi educational institute is the educational institution which has recorded the best o/l and a/l results in the southern province since 2008.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>It is an educational institution run by the examiners of question papers.</li>
              <li><i class="bi bi-check-circle"></i> Being the institution that has sent more than 10k A-passes and the highest number of students to the university since the opening day.</li>
              <li><i class="bi bi-check-circle"></i> This is the educational institution with the highest number of revisions.</li>
            </ul>
            <p>
              So come join us and understand the difference.
            </p>

          </div>
           <div class="col-12 col-lg-6  pt-4 pt-lg-0 order-2 order-lg-1 content">
          <video src="./assets/img/media/දුරස්ථ අධ්_යාපන ක්_රමයේ සාර්ථකත්වය.mp4" controls   style="width: 650px; ">ff</video>
           </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Teachers</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Classes</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Lessons</p>
          </div>

        </div>

      </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content"  style="background-color:rgb(30, 132, 180);">
              <h3>Why Choose Our Educational Institution?</h3>
              <p>
                Since the year 2008, our institution has been winning the trust of students and parents and maintaining that trust, and we have managed to produce record results every year. Our only aim is to provide a very high service using new technology and to dedicate ourselves to teach children as much as possible.
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">Magni Dolores</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Nemo Enim</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Midela Teren</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Pira Neve</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Dirada Pack</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">Moton Ideal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">Verdo Park</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Subject</h2>
          <p>Popular Classes</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <!-- ===Add Subject Item=== -->
        <?php
        $homeObj->getClass();
        ?>
           <!-- End Subject Item -->

         
        </div>

      </div>
    </section>
    <!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
 <div class="section-title">
          <h2>Teachert</h2>
          <p>Our Teacher</p>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php
          $TeacherObj=new Teacher();
          $TeacherObj->getTeacherData();
          ?>
          </div>

      </div>
    </section>
    <!-- End Trainers Section -->

  </main>
  <!-- End #main -->


<!-- ======Gallery Start====== -->
  
<div class="container">
  <section>
  <div class="section-title">
    <h2>Gallery</h2>
    <p>Gallery</p>
  </div>
  <div class="row">
    <div class="row">
      <?php
      $home=new Home();
      $home->get_gallery_images();
      
      ?>
    </div>


    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="image-gallery-title"></h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                class="sr-only">Close</span>
            </button>
          </div>
          <div class="modal-body">
            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i
                class="fa fa-arrow-left"></i>
            </button>

            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                class="fa fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</div>
<!-- ======End Gallery====== -->

<!-- ======= Student Feedback Section ======= -->

  <section id="testimonials" class="testimonials mt-2">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Student Feedback</h2>
      <p>What are they saying</p>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
        <?php
          $feedback = new Student();
          $feedback->getFeedback();
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section>

<!-- End Testimonials Section -->


  <!-- ======= Footer ======= -->
  <?php
    footer();
  ?>
 <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script src="./assets/js/card.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
  let modalId = $('#image-gallery');

    $(document)
      .ready(function () {

        loadGallery(true, 'a.thumbnail');

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
          $('#show-previous-image, #show-next-image')
            .show();
          if (counter_max === counter_current) {
            $('#show-next-image')
              .hide();
          } else if (counter_current === 1) {
            $('#show-previous-image')
              .hide();
          }
        }

        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */

        function loadGallery(setIDs, setClickAttr) {
          let current_image,
            selector,
            counter = 0;

          $('#show-next-image, #show-previous-image')
            .click(function () {
              if ($(this)
                .attr('id') === 'show-previous-image') {
                current_image--;
              } else {
                current_image++;
              }

              selector = $('[data-image-id="' + current_image + '"]');
              updateGallery(selector);
            });

          function updateGallery(selector) {
            let $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-title')
              .text($sel.data('title'));
            $('#image-gallery-image')
              .attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
          }

          if (setIDs == true) {
            $('[data-image-id]')
              .each(function () {
                counter++;
                $(this)
                  .attr('data-image-id', counter);
              });
          }
          $(setClickAttr)
            .on('click', function () {
              updateGallery($(this));
            });
        }
      });

    // build key actions
    $(document)
      .keydown(function (e) {
        switch (e.which) {
          case 37: // left
            if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
              $('#show-previous-image')
                .click();
            }
            break;

          case 39: // right
            if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
              $('#show-next-image')
                .click();
            }
            break;

          default:
            return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
      });
</script>
</body>

</html>
