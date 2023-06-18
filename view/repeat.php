<?php



function news()
{
  echo '<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-danger text-light">
                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-dark py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;Hot News</span></div>
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> <a href="#" class="text-light">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </a> <span class="dot"></span> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </a> <span class="dot"></span> <a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse </a>
                </marquee>
            </div>
        </div>
    </div>
</div>';

}
 
function footer()
{
  echo ' <footer id="footer">

    <div class="footer-top bg-dark text-light">
      <div class="container ">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mentor</h3>
            <p class="text-light">
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 class="text-light">Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 class="text-light">Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4 class="text-light">Join Our Newsletter</h4>
            <p class="text-light">Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container-fluid d-md-flex py-4 bg-dark">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>';
}


?>
