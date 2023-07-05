<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  include '../../php/connect.php';
 $teacherID=$_POST['teacherID'];
  $subject=$_POST['subject'];
  $classID=$_POST['classID'];
  if(isset($_POST['teacher']))
  {
    $teacher=$_POST['teacher'];   
  }
  else{
    $teacher="Null";
  }

  $Lesson=$_POST['Lesson'];
  $des=$_POST['des'];
  $date=$_POST['date'];
  $lessID=$_POST['lessID'];

  // =====================image upload ==============================
  
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
    $uploadDirectory = '../../assets/img/Lesson/';
  
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
// =========================end image Upload===========

// ==================Video upload================
 

  // Get the file details
  $fileName = $_FILES['video']['name']; // Name of the uploaded file
  $fileTmpName = $_FILES['video']['tmp_name']; // Temporary location of the file
  $fileSize = $_FILES['video']['size']; // Size of the file
  $fileError = $_FILES['video']['error']; // Error code associated with the file upload
  $fileType = $_FILES['video']['type']; // Type of the file
  
  // Check if the file was uploaded without any errors
  if ($fileError === 0) {
    // Get the file extension
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
  
    // Generate a unique name for the image
    $uniqueFileName = uniqid('video_', true) . '.' . $fileExtension;
  
    // Specify the directory where you want to save the uploaded images
    $uploadDirectory = '../../assets/video/';
  
    // Set the destination path including the unique file name
    $fileDestination = $uploadDirectory . $uniqueFileName;
  
    // Move the uploaded file to the specified destination
    if (move_uploaded_file($fileTmpName, $fileDestination)) {
      // File upload was successful
      $videoPath = $uniqueFileName;
    } else {
      // File upload failed
      $videoPath = "NULL";
    }
  } else {
    // File upload encountered an error
    $videoPath = "NULL";
  }
  
// ==================Video Upload End ========================

  $sql="UPDATE `lesson` SET `classID` = '$classID', `subject` = '$subject', `teacher` = '$teacher', `LessonTitle` = '$Lesson', `description` = '$des', `image` = '$filePath', `video` = '$videoPath' WHERE `lesson`.`lessonID` = $lessID;";

  $result=mysqli_query($con,$sql);
  if($result)
  {
    session_start();
    header('location:../../view/TeacherView/lesson.php?teacherID='.$teacherID.'');
  
    
  }
}




?>