<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  include '../../php/connect.php';
  $classID=$_POST['classID'];
  $title=$_POST['title'];

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
  $uniqueFileName = uniqid('doc_', true) . '.' . $fileExtension;

  // Specify the directory where you want to save the uploaded images
  $uploadDirectory = '../../assets/document/';

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



  
}





?>