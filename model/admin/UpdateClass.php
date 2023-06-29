<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include '../../php/connect.php';
  $className=$_POST['className'];
  $classTitle=$_POST['classTitle'];
  $subject=$_POST['subject'];
  $admin=$_POST['admin'];
  $classID=$_POST['cID'];
  if(isset($_POST['grade']))
  {
    $grade=$_POST['grade'];
  }
  else{
    $grade=null;
  }
  if(isset($_POST['teacher']))
  {
    $teacher=$_POST['teacher'];
  }
  else{
    $teacher=null;
  }
  $des=$_POST['des'];
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
     $uploadDirectory = '../../assets/img/class/';
   
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

  
  if(isset($_POST['type']))
  {
    $type=$_POST['type'];
  }
  else{
    $type=null;
  }
  if(isset($_POST['level']))
  {
    $level=$_POST['level'];
  }
  else{
    $level=null;
  }

  $sql="UPDATE `class` SET `teacherID` = '$teacher', `classTitel` = '$classTitle', `className` = '$className', `subject` = '$subject', `grade` = '$grade', `description` = '$des', `image` = '$filePath', `level` = '$level', `type` = '$type' WHERE `class`.`classID` =$classID;";

  $result=mysqli_query($con,$sql);

  if($result)
  {
   

    session_start();
  
    header('location:../../view/Admin/class.php?AdminID='.$admin.'');

    echo '<script>
    alert(\'data updated\');
  
  </script>';}

}




?>