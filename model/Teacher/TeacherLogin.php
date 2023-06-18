<?php

// ===========================Start Login Form Action===================================
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    echo "Hello";
  include 'C:\xampp\htdocs\hnd\php\connect.php';
  $uName     = $_POST['UserName'];
  $uPassword = $_POST['password'];
  $sql       = "select * from teacher where userName = '$uName' AND password = '$uPassword'";
  $result    = mysqli_query($con, $sql);
   while ($row = mysqli_fetch_assoc($result))
   {
        $teacherID = $row['teacherID'];
   }
    if ($result) {
        $num = mysqli_num_rows($result);
         if ($num>0)
         {
             session_start();
                $_SESSION['UserName'] = $uName;
                header('location:../../view/TeacherView/TeacherMainPanel.php?teacherID='.$teacherID.'');
         } 
        else {

            echo '<script type="text/javascript">alert("Invalid Username or Password");</script>';
                header('location: ../../../../hnd/view/TeacherView/TeacherLogin.php');
          
            }
    } 
    else {
       die("Error in Query" . mysqli_error($con));
    }
}
// =========================End Login Form Action=========================================

?>

