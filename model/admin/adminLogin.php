<?php

// ===========================Start Login Form Action===================================
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    echo "Hello";
  include 'C:\xampp\htdocs\hnd\php\connect.php';
  $uName     = $_POST['UserName'];
  $uPassword = $_POST['password'];
  $sql       = "select * from admin where userName = '$uName' AND password = '$uPassword'";
  $result    = mysqli_query($con, $sql);
   while ($row = mysqli_fetch_assoc($result))
   {
        $AdminID = $row['id'];
   }
    if ($result) {
        $num = mysqli_num_rows($result);
         if ($num>0)
         {
             session_start();
                $_SESSION['UserName'] = $uName;
                header('location:../../../../../hnd/view/Admin/dashboard.php?AdminID='.$AdminID.'');
         } 
        else {

            echo '<script type="text/javascript">alert("Invalid Username or Password");</script>';
                header('location: ../../../../hnd/view/Admin/teacherLogin.php');
          
            }
    } 
    else {
       die("Error in Query" . mysqli_error($con));
    }
}
// =========================End Login Form Action=========================================

?>

