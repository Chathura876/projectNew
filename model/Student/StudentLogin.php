<?php

// ===========================Start Login Form Action===================================
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  include 'C:\xampp\htdocs\hnd\php\connect.php';
  $uName     = $_POST['UName'];
  $uPassword = $_POST['UPassword'];
  $sql       = "select * from student where UserName = '$uName' AND password = '$uPassword'";
  $result    = mysqli_query($con, $sql);
   while ($row = mysqli_fetch_assoc($result))
   {
        $stdID = $row['stdID'];
   }
    if ($result) {
        $num = mysqli_num_rows($result);
         if ($num>0)
         {
             session_start();
                $_SESSION['UserName'] = $uName;
                header('location: ../../view/UserPanal/dashboard.php?stdID='.$stdID.'');
         }
            else {
              echo "<script>invalid();</script>";
                header('location: ../../../../hnd/index.php');
            }
    } 
    else {
       die("Error in Query" . mysqli_error($con));
    }
}
// =========================End Login Form Action=========================================

?>
<script>
    function invalid() {
        alert("Invalid UserName or Password");
    }
</script>
