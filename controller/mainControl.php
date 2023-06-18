<?php
class Home
{
  // ===This function use to get carousels image====
     public function getCarosal()
    {
        include './php/connect.php';
        $sql = "select * from `image` where imgPosition='Main'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            $imgPath = $row['path'];
            

            echo ' <section id="hero" class="d-flex justify-content-center align-items-center" style="background: url('.$imgPath.') top center; background-repeat: no-repeat;   background-size: cover;">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>Come join us. We will build your future.</h2>
      <a href="../../hnd/grade.php" class="btn-get-started">Get Started</a>
    </div>
  </section>';
        }
    }
// ====End Function========

// ====This function is use get the subject details=======
    public function getClass()
    {
        include './php/connect.php';
        $sql = "select cTB.*,tTB.Timage from class cTB,teacher tTB where cTB.type='Popular' and tTB.teacherID=cTB.teacherID";
        $result=mysqli_query($con,$sql);
    while ($row = mysqli_fetch_assoc($result))
    {
      $Id = $row['classID'];
      
      $classTitel=$row['classTitel'];
      $className=$row['className'];
      $des=$row['description'];
      $image=$row['image'];
      $teacherImage=$row['Timage'];

      echo '
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src='.$image.' class="img-fluid" alt='.$className.' style="width: 300px;">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>'.$className.'</h4>
                  
                </div>

                <h3><a href="course-details.html">'.$classTitel.'</a></h3>
                <p>'.$des.'</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src='.$teacherImage.' class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div>';
    }
    }
  // ====End Function==========


  // ===This function use get gallery images=====
 function get_gallery_images()
 {
        include './php/connect.php';
        $sql = "select * from `image` where imgPosition='gallery'";
        $result=mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($result))
       {
          $Path = $row['path'];
         $imgTitle = $row['ImageTitel'];

      echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
          data-image="'.$Path.'?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260&"
          data-target="#image-gallery">
          <img class="img-thumbnail" src="'.$Path.'" alt='.$imgTitle.'>
        </a>
      </div>
  
      ';

   

       }
 }

  // =====End Function==========
}



// ====Start Teacher class================
class Teacher 
{
  public function getTeacherData()
  {
    include './php/connect.php';
    $sql = "select * from teacher";
    $result = mysqli_query($con, $sql);
     while ($row = mysqli_fetch_assoc($result))
     {
      $image=$row['Timage'];
      $Tname=$row['name'];
      $des=$row['description'];
      $subject = $row['subject'];

      echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src='.$image.' class="img-fluid" alt="" style="width: 200px; height: 220px;">
              <div class="member-content">
                <h4>'.$Tname.'</h4>
                <span>'.$subject.'</span>
                <p>
                 '.$des.'
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>';
     }

  }
}
//=====End Teacher class================

// =================Start Student Class=======================
class Student
{
  function getFeedback()
  {
    include './php/connect.php';
    $sql = "select stdFdTB.feedback,stdTB.* from studentfeedback stdFdTB,student stdTB where stdFdTB.stdID=stdTB.stdID";
    $result = mysqli_query($con, $sql);
    if($result)
    {
      while($row =mysqli_fetch_assoc($result))
      {
        $FName = $row['Fist_Name'];
        $LName = $row['Last_Name'];
        $image = $row['image'];
        $feedback = $row['feedback'];
       $fullName=$FName.' '.$LName; 

echo '

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src='.$image.' class="testimonial-img" alt="">
              <h3>'.$fullName.'</h3>
              <h4> Our Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                '.$feedback.'
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->
      

  ';

      }
    }
     
  }
}
// =======================End Student Classes=========================
?>


