<?php

include '../php/connect.php';

function news()
{
  include './php/connect.php';
  echo '<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news text-light"  style=" background: linear-gradient(to bottom, #000000 16%, #000099 100%);">
                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center  py-2 text-white px-1 news" style="background-color: #000000;"><span class="d-flex align-items-center" style="color: white; font-weight: bold;">&nbsp;Hot News</span></div>
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> ';
                $sql="select * from news";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                  $news=$row["news"];

                  echo '<a href="#" class="text-light">'.$news.' </a> <span class="dot"></span> ';
                }

                  
                 
            echo '    </marquee>
            </div>
        </div>
    </div>
</div>';

}
 
function footer()
{
  echo ' <footer id="footer">

    <div class="footer-top  text-light" style=" background: linear-gradient(to bottom, #000000 16%, #000099 100%);">
      <div class="container ">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>New Samadhi</h3>
            <p class="text-light">
              New Samadhi <br>
              Weerakatiya,Middeniya<br>
              Sri Lanka <br><br>
              <strong>Phone:</strong>0474578956<br>
              <strong>Email:</strong> newsamdhi@gmail.com<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Teaching</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Security</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Exam rehearsals</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Review classes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-light">Best Teacher</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4 class="text-light">Join Our Classes</h4>
            <p class="text-light">Join us to win life.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container-fluid d-md-flex py-4" style=" background: linear-gradient(to bottom, #000000 16%, #000099 100%);">

      <div class="me-md-auto text-center text-md-start">
        
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
        
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
