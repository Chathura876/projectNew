<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  include '../../php/connect.php';
  $FName = $_POST['FName'];
  $LName = $_POST['LName'];
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];
  $school = $_POST['school'];
  $UserName = $_POST['UserName'];
  $password = $_POST['password'];
  $BOD = $_POST['BOD'];
  $sex = $_POST['sex'];
  $admin= $_POST['admin'];

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
    // Get the file extension
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
  
    // Generate a unique name for the image
    $uniqueFileName = uniqid('img_', true) . '.' . $fileExtension;
  
    // Specify the directory where you want to save the uploaded images
    $uploadDirectory = '../../uploadImage/';
  
    // Set the destination path including the unique file name
    $fileDestination = $uploadDirectory . $uniqueFileName;
  
    // Move the uploaded file to the specified destination
    if (move_uploaded_file($fileTmpName, $fileDestination)) {
      // File upload was successful
      $filePath = $uniqueFileName;
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
        session_start();
        // $_SESSION['UserName'] = $uName;
        header('location:../../../../../hnd/view/Admin/student.php?AdminID='.$admin.'');
      }
      else
      {
        die("Error". mysqli_error($con));
      }
    }
  }
}
// ==========================End data Send Process======================
?>