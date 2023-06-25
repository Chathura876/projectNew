<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  include '../php/connect.php';
  $fname=$_POST['fname'];
  $stdid=$_POST['fill'];
  $lname=$_POST['lname'];
  $address=$_POST['address'];
  $mobile=$_POST['mobile'];
  $school=$_POST['school'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sex=$_POST['sex'];
  $BOD=$_POST['BOD'];
  $sql="UPDATE `student` SET `Fist_Name` = '$fname', `Last_Name` = '$lname', `Address` = '$address', `mobile` = '$mobile', `sex` = '$sex', `BOD` = '$BOD', `school` = '$school', `UserName` = '$username', `password`='$password' WHERE `student`.`stdID` ='$stdid';";
  $result=mysqli_query($con,$sql);

  if($result)
  {
    session_start();
    header('location:../../../../hnd/view/Admin/student.php?AdminID=1');
  }
}



?>