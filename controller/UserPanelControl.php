<?php

class userPanel
{
   

    // ===========================================================================
                    //    This function use get a navbar and side menu
    //    ===========================================================================
    function getUserSideBar()
    {
        $id = $_GET['stdID'];

        include '../../php/connect.php';
        $sql    = "select * from student where stdID = '$id'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $Fname    = $row['Fist_Name'];
            $Lname    = $row['Last_Name'];
            $fullName = $Fname . " " . $Lname;
            $img      = $row['image'];
            $a="'../../.$img.'";
        }
        echo '  <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php?stdID='.$id.'">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="../../assets/img/s.ico" style="width: 50px;" alt="homepage" class="m-0" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <h3 class="text-dark">New Samadhi</h3>
                            
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                       

                       <li>
                            <a class="profile-pic" href="./profile.php">
                                <img src="../../uploadImage/'.$img.'" alt="" width="36" class="img-circle"><span class="text-white font-medium">'.$fullName.'</span></a>

                                  
                        </li>
                       
                   
                       
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?stdID='.$id.'"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php?stdID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./myClasses_.php?stdID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">My Classes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./newClass.php?stdID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">New Classes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Note</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Payment</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Error 404</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="../../index.php"
                                class="btn d-grid btn-danger text-white" >
                                Sing Out</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
    
        <div class="page-wrapper">
          
            ';
    }
// ================================End===================================================

// =====================================================================================
//                   This function use to get new class for user userPanel
// ====================================================================================
function GetNewClass()
{
    include '../../php/connect.php';
    $id = $_GET['stdID'];

    $sql1="select * from studentclass where stdID=$id";
    $result1=mysqli_query($con,$sql1);
    $num=mysqli_num_rows($result1);
    if($num>0)
    {
        $sql = "SELECT stdTB.grade, clTB.*
        FROM student stdTB
        INNER JOIN class clTB ON clTB.grade = stdTB.grade
         WHERE stdTB.stdID = $id";



    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $classTitel = $row['classTitel'];
        $className = $row['className'];
        $image = $row['image'];
        $des = $row['description'];
        $classID = $row['classID'];

        echo '
        
        <div class="col-md-4">
        <div class="card mt-3" style="width: 18rem;">
        <img class="card-img-top" src="../../' . $image . '" alt="Card image cap" style="width: 300px; height: 300px;">
        <div class="card-body">
          <h3 class="card-title">' . $className . '</h3>
          <p class="card-text">' . $des . '</p>
           <a href="../../view/UserPanal/myClasses.php?stdID='. $id .'& classID='.$classID.'" class="btn btn-dark" onclick="message()">Join Now</a>
        </div>
      </div></div>
      <script>
        function message()
        {
            alert(\'Join Successfully..\');
        }
      </script>';
      
    }
    }
    else if($num==0)
    {
        $sql = "SELECT stdTB.grade, clTB.*
        FROM student stdTB
        INNER JOIN class clTB ON clTB.grade = stdTB.grade
        LEFT JOIN studentclass sc ON sc.classID = clTB.classID
        WHERE stdTB.stdID = $id";



    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $classTitel = $row['classTitel'];
        $className = $row['className'];
        $image = $row['image'];
        $des = $row['description'];
        $classID = $row['classID'];

        echo '
        
        <div class="col-md-4">
        <div class="card mt-3" style="width: 18rem;">
        <img class="card-img-top" src="../../' . $image . '" alt="Card image cap" style="width: 300px; height: 300px;">
        <div class="card-body">
          <h3 class="card-title">' . $className . '</h3>
          <p class="card-text">' . $des . '</p>
           <a href="../../view/UserPanal/myClasses.php?stdID='. $id .'& classID='.$classID.'" class="btn btn-dark" onclick="message()">Join Now</a>
        </div>
      </div></div>
      <script>
        function message()
        {
            alert(\'Join Successfully..\');
        }
      </script>';
      
    }
    }
   
   
}

//    ===========================End=====================================

// ===================================================================================
//             This function is call to get join student to classes
// ===================================================================================

function SaveMyClass()
{
  include '../../php/connect.php';
  $stdID=$_GET['stdID'];
   $classID=$_GET['classID'];

   $sql="INSERT INTO `studentclass` ( `id`,`stdID`, `ClassID`, `date`, `timeStamp`) VALUES ('',$stdID, $classID, '2023-06-06', current_timestamp());";
   $result=mysqli_query($con,$sql);
   if(!$result)
   {
    echo '
    <script>
        alert(\'you join before\');
    </script>
    ';
   }
}
 //================================End================================================== 
 //  ======================================================================================
//                   This function is called get my Classes
// =======================================================================================

function getMyClass()
{
 include '../../php/connect.php'; 
 $stdID=$_GET['stdID'];
 
 $sql = "SELECT stdTB.*, classTB.*
 FROM studentclass stdTB
 JOIN class classTB ON classTB.classID = stdTB.ClassID
 WHERE stdTB.stdID = $stdID";

 $result=mysqli_query($con,$sql);
 while($row=mysqli_fetch_assoc($result))
 {
    $className=$row['className'];
    $image=$row['image'];
    $des=$row['description'];

    echo ' <div class="col-md-4 col-sm-12 mt-3">
    <div class="card" style="width: 18rem;">

        <img class="card-img-top" src="../../'.$image.'" alt="Card image cap"  style="width: 300px; height: 300px;">

        <div class="card-body">
          <h5 class="card-title">'.$className.'</h5>
          <p class="card-text">'.$des.'</p>
          <a href="#" class="btn btn-success">Launch Now </a>
        </div>
      </div>
   </div>';
 }
}

// =================================End==================================================
}




?>

