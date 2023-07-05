<?php
class Teacher 
{
  // ===========================================================================
                    //    This function use get a navbar and side menu
  //===========================================================================
    function getUserSideBar()
    {
        $id = $_GET['teacherID'];

        include '../../php/connect.php';
        $sql    = "select * from teacher where teacherID = '$id'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $name    = $row['name'];
            $img      = $row['Timage'];
        }
        echo '  <header class="topbar" data-navbar style="background: linear-gradient(to bottom, #000066 10%, #000000 100%);" >
            <nav class="navbar top-navbar navbar-expand-md " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                <div class="navbar-header" data-logobg="skin6" >
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php?stdID='.$id.'" style="background: linear-gradient(to bottom,#29293b 10%, #0e0e0e 100%);">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="../../assets/img/s.ico" style="width: 50px;" alt="homepage" class="m-0" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <h3 class="text-light">New Samadhi</h3>
                            
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
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbar bg="skin5">
                   
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
                       

                       <li >
                            <a class="profile-pic" href="./profile.php">
                                <img src="../../assets/img/trainers/'.$img.'" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">'.$name.'</span></a>
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
        <aside class="left-sidebar" data-sidebarbg="skin6" style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav" >
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2" style="background: linear-gradient(to bottom,#29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link text-light" href="dashboard.php?teacherID='.$id.'"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="background: linear-gradient(to bottom,#29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link text-light" href="profile.php?teacherID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link text-light" href="student.php?teacherID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Student</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="background: linear-gradient(to bottom,#29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link text-light" href="./class.php?teacherID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">My Classes</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link text-light" href="lesson.php?teacherID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Lesson</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link text-light" href="note.php?teacherID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Note</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link text-light" href="404.html"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Error 404</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn" style="background: linear-gradient(to bottom,#29293b 10%, #0e0e0e 100%);">
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

function getProfile()
{
    include '../../php/connect.php';
    $teacherID=$_GET['teacherID'];
    $sql="select * from teacher where teacherID ='$teacherID'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $teacherID=$row['teacherID'];
        $name=$row['name'];
        $NIC=$row['NIC'];
        $sex=$row['sex'];
        $address=$row['address'];
        $mobile=$row['mobile'];
        $description=$row['description'];
        $Univicity=$row['Univicity'];
        $degree=$row['degree'];
        $userName=$row['userName'];
        $password=$row['password'];
        $Timage=$row['Timage'];

        echo ' <div class="white-box">
        <div class="user-bg"> <img width="100%" alt="user" src="../../assets/img/trainers/'.$Timage.'">
            <div class="overlay-box">
                <div class="user-content">
                    <a href="javascript:void(0)"><img src="../../assets/img/trainers/'.$Timage.'"
                            class="thumb-lg img-circle" alt="img"></a>
                    <h4 class="text-white mt-2">'.$userName.'</h4>
                    <h5 class="text-white mt-2">'.$name.'</h5>
                </div>
            </div>
        </div>
        <div class="user-btm-box mt-5 d-md-flex">
            <div class="col-md-6 col-sm-4 text-center">
                <h2>Teacher ID :</h2>
            </div>
            <div class="col-md-6 col-sm-4 text-center">
                <h2>'.$teacherID.'</h2>
            </div>
          
        </div>
    </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material">
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Full Name</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" value="'.$name.'"
                                class="form-control p-0 border-0"> </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="example-email" class="col-md-12 p-0">Address</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" value="'.$address.'"
                                class="form-control p-0 border-0" name="example-email"
                                id="example-email">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Password</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="password" value="'.$password.'" class="form-control p-0 border-0">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Phone No</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" value="'.$mobile.'"
                                class="form-control p-0 border-0">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Description</label>
                        <div class="col-md-12 border-bottom p-0">
                            <textarea rows="5" class="form-control p-0 border-0" value="'.$description.'"></textarea>
                        </div>
                    </div>
                 
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>';
    }
}


function getStudentTable()
{
    include '../../php/connect.php';
    $teacherID = $_GET['teacherID'];
    $sql = "SELECT * FROM studentteacher WHERE teacherID = $teacherID";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $stdID = $row["stdID"];

        $sql = "SELECT * FROM student WHERE stdID = $stdID";
        $result_student = mysqli_query($con, $sql);
        $row_student = mysqli_fetch_assoc($result_student);

        echo '<tr>
                <td>'.$stdID.'</td>
                <td>'.$row_student["Fist_Name"].'</td>
                <td>'.$row_student["Address"].'</td>
                <td>'.$row_student["sex"].'</td>
                <td>'.$row_student["grade"].'</td>
                <td>'.$row_student["school"].'</td>
                <td>
                    <button class="viewBtn text-primary ml-2" id="'.$stdID.'">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
              </tr>';
    }
}


}



?>