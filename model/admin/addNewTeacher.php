<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include '../../php/connect.php';
  $name=$_POST['Name'];
  $NIC=$_POST['NIC'];
  $address=$_POST['address'];
  $mobile=$_POST['mobile'];
  $dis=$_POST['dis'];
  $Uni=$_POST['Uni'];
  $degree=$_POST['degree'];
  $userName=$_POST['userName'];
  $password=$_POST['password'];
  $sex=$_POST['sex'] ;
  $admin=$_POST['admin'];
  if(isset($_POST['level']))
  {
    $level = $_POST['level'];
  }
  else
  {
    $level = "NULL";
  }

  if(isset($_POST['subject']))
  {
    $subject = $_POST['subject'];
  }
  else
  {
    $subject = "NULL";
  }

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
      $uploadDirectory = '../../assets/img/trainers/';
    
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

    $sql="INSERT INTO `teacher` (`teacherID`, `name`, `NIC`, `sex`, `address`, `mobile`, `description`, `Univicity`, `degree`, `userName`, `password`, `Timage`, `subject`, `level`, `timestamp`) VALUES (NULL, '$name', '$NIC', '$sex', '$address', '$mobile', '$dis', '$Uni', '$degree', '$userName', '$password', '$filePath', '$subject', '$level', current_timestamp());";
    
    $result=mysqli_query($con,$sql);
    if($result)
    {
      session_start();
      header('location:../../view/Admin/teacher.php?AdminID='.$admin.'');
    }
}
//<a href="../../view/Admin/teacher.php"

?>