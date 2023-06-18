<?php

// =============Register Data insert================================================
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  include './php/connect.php';
  $FName = $_POST['FName'];
  $LName = $_POST['LName'];
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];
  $school = $_POST['school'];
  $UserName = $_POST['UserName'];
  $password = $_POST['password'];
  $BOD = $_POST['BOD'];
  $sex = $_POST['sex'];

  // ========select district===========
  if(isset($_POST['district']))
  {
    $district = $_POST['district'];
  }
  else
  {
    $district = "NULL";
  }

  // ====================================

  // =========select grade==============
  if(isset($_POST['grade']))
  {
    $grade = $_POST['grade'];
  }
  else
  {
    $grade = "NULL";
  }
  // ========================================

  // Get the file details
  $fileName = $_FILES['img']['name']; // Name of the uploaded file
  $fileTmpName = $_FILES['img']['tmp_name']; // Temporary location of the file
  $fileSize = $_FILES['img']['size']; // Size of the file
  $fileError = $_FILES['img']['error']; // Error code associated with the file upload
  $fileType = $_FILES['img']['type']; // Type of the file

  // Check if the file was uploaded without any errors
  if ($fileError === 0) {
    // Specify the directory where you want to save the uploaded images
    $uploadDirectory = './uploadImage/';
    
    // Generate a unique name for the image by appending a timestamp
    $fileTimestamp = time();
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileDestination = $uploadDirectory . $fileTimestamp . '.' . $fileExtension;
    
    // Move the uploaded file to the specified destination
    if (move_uploaded_file($fileTmpName, $fileDestination)) {
      // File upload was successful
      $filePath = $fileDestination;
    } else {
      // File upload failed
      $filePath = "NULL";
    }
  } else {
    // File upload encountered an error
    $filePath = "NULL";
  }

  

  $sql = "select * from student where UserName = '$UserName'";
  $result = mysqli_query($con, $sql);
  if($result)
  {
    $num = mysqli_num_rows($result);
    if($num>0)
    {
      // echo '
      // <script>
      // alert("User Name already exist!");
      // </script>
      // ';
    }
    else
    {
      $sql = "INSERT INTO `student` (`stdID`, `Fist_Name`, `Last_Name`, `Address`, `district`, `mobile`, `sex`, `BOD`, `grade`, `school`, `UserName`, `password`, `image`, `timestamp`) VALUES (NULL, '$FName', '$LName', '$address', '$district', '$mobile', '$sex', '$BOD', '$grade', '$school', '$UserName', '$password', '$filePath', current_timestamp());";
      $result = mysqli_query($con, $sql);
      if($result)
      {
        echo '
        <script>
        alert("Your entry was submitted successfully!");
        </script>
        ';
      }
      else
      {
        die("Error". mysqli_error($con));
      }
    }
  }
}



// ====================End Register Data insert======================================



//=============================Start Login Form========================================
echo '  
<!--============Strat Login Modal ==========================-->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  bg-danger text-light">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- =============================start login form========================== -->
        <form action="../../hnd/model/Student/StudentLogin.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">User Name :</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter User Name" autocomplete="off" name="UName">
           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password :</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off" name="UPassword">
          </div>
          
          <button type="submit" class="btn btn-dark m-3">Login</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>

        <!-- ========end login form======== -->
      </div>
    
    </div>
  </div>
</div>
<!-- =================Login Modal End==================== -->


<!--==============Register Modal ==================-->
<div class="modal" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel"
  aria-hidden="true" >
  <div class="modal-dialog modal-xl " role="document" >
    <div class="modal-content">
      <div class="modal-header  bg-success text-light">
        <h2 class="modal-title" id="exampleModalLabel"> Register</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <!-- =======start register form======= -->
        <form method="POST" enctype="multipart/form-data">
          <div class="container-fluid">
          <div class="row">
           <div class="col-6">
          
         
          <div class="form-group">
            <label for="exampleInputEmail1">Fist Name :</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter Fist Name" autocomplete="off" name="FName">
              

          </div>
          </div>
          <div class="col-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Last Name :</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter Last Name" autocomplete="off" name="LName">
          
          </div>
          </div>
          
         
          <div class="col-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Address :</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter Address " autocomplete="off" name="address">
              </div>
      </div>
        
          
       
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Mobile :</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Mobile No " autocomplete="off" name="mobile">
            </div>
          </div>
            <div class="col-6">
              <div class="form-group">
                <label for="exampleInputEmail1">School :</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Enter School " autocomplete="off" name="school">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="exampleInputEmail1">User Name :</label>
                <input type="text" class="form-control" id="exampleInputEmail1" 
                  placeholder="Enter School " autocomplete="off" name="UserName">
              </div>
            </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Password :</label>
                  <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter School " autocomplete="off" name="password">
                </div>
              </div>
            <div class="col-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Birthday :</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Enter School " autocomplete="off" name="BOD">
              </div>
            </div>
              <div class="col-12">
                <div class="form-group m-2">
                  <label for="exampleInputEmail1">Image :</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter School " autocomplete="off" name="img">
                </div>
              </div>
        <div class="col-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Sex :</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="male" />
              <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
        
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="female" />
              <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
          </div>
        </div>
      <div class="col-6">
        <div class="form-group ">
          <label for="district">District :</label>
        <select name="district" id="district">
          <option value="Aparam">Aparam</option>
          <option value="Anuradhapura">Anuradhapura</option>
          <option value="Badulla">Badulla</option>
          <option value="Batticaloa">Batticaloa</option>
          <option value="Colombo">Colombo</option>
          <option value="Galle">Galle</option>
          <option value="Gampaha">Gampaha</option>
          <option value="Hambantota">Hambantota</option>
          <option value="Jaffna">Jaffna</option>
          <option value="Kalutara">Kalutara</option>
          <option value="Kandy">Kandy</option>
          <option value="Kegalle">Kegalle</option>
          <option value="Kilinochchi">Kilinochchi</option>
          <option value="Kurunegala">Kurunegala</option>
          <option value="Mannar">Mannar</option>
          <option value="Matale">Matale</option>
          <option value="Matara">Matara</option>
          <option value="Monaragala">Monaragala</option>
          <option value="Mullaitivu">Mullaitivu</option>
          <option value="Nuwara Eliya">Nuwara Eliya</option>
          <option value="Polonnaruwa">Polonnaruwa</option>
          <option value="Puttalam">Puttalam</option>
          <option value="Ratnapura">Ratnapura</option>
          <option value="Trincomalee">Trincomalee</option>
          <option value="Vavuniya">Vavuniya</option>
          
        </select>
        </div>
      </div>

      <div class="col-6">
        <div class="form-group mb-2">
          <label for="grade">Grade :</label>
        <select name="grade" id="grade">
          <option value="Grade-6">Grade-6</option>
          <option value="Grade-7">Grade-7</option>
          <option value="Grade-6">Grade-8</option>
          <option value="Grade-7">Grade-9</option>
          <option value="Grade-6">Grade-10</option>
          <option value="Grade-7">Grade-11</option>
          <option value="Grade-6">Grade-12</option>
          <option value="Grade-7">Grade-13</option>
        </select>
        </div>
      </div>

        </div>
      
      
  <center>
          <button type="submit" class="btn btn-success m-2" >Register</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></center>
        </div>
        </form>

        <!-- ========end register form======== -->
      </div>

    </div>
  </div>
</div>
<!-- =================Register Modal End==================== -->


<!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-danger  ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto "><a href="index.html" class="text-light">Newසමාධි</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="./assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0  ">
        <ul class="text-light">
          <li><a class="active text-light" href="index.php">Home</a></li>
          <li><a href="grade.php" class="text-light">Classes</a></li>
          <li><a href="trainers.php" class="text-light">Teacher</a></li>
          <li><a href="events.php" class="text-light">Events</a></li>
          <!-- <li><a href="pricing.php" class="text-light">Pricing</a></li> -->

          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="about.php" class="text-light">About</a></li>
          <li><a href="contact.php"class="text-light">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle text-light bg-danger"></i>
      </nav><!-- .navbar -->

      <button class="btn btn-primary get-started-btn" target="_blank" data-toggle="modal" data-target="#RegisterModal" style="background-color:rgb(30, 132, 180);">Register</button>
      <button class="get-started-btn btn-light  m-2" target="_blank" data-toggle="modal" data-target="#LoginModal" style="background-color:white; color:black;">Login</button>

    </div>
  </header>';


?>
<script>
  function success(nn)
  {
    alert(nn);}
</script>
