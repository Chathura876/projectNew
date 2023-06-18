<?php
class Classes
{
    function getOlClass($Ctype)
    {
        include './php/connect.php';
    
        $sql = "select * from grade where type='$Ctype'";
        $result = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($result))
        {
            $ID = $row['id'];
            $img = $row['image'];
            

            echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
            <a href="./courses.php?gradeID='.$ID.'"><img src='.$img.' class="img-fluid" alt="...">
              <div class="course-content">
               <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Show Classes</h4></a>
                
                </div>
              </div>
            </div>
          </div>';
        }
    }

    function getClasses()
    {
        include './php/connect.php';
        $grade = $_GET['gradeID'];
          $sql = "select cTB. *,tTB.Timage from class cTB,teacher tTB where cTB.grade=$grade and tTB.teacherID=cTB.teacherID";
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

       <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Grade '.$grade.'</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
      <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
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
          </div>
           </div>

      </div>
    </section>
          ';
    }
    }
}





?>



