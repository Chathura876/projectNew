<?php

class Admin 
{
      // ===========================================================================
                    //    This function use get a navbar and side menu
    //    ===========================================================================
    function getUserSideBar()
    {
        $id = $_GET['AdminID'];

        include '../../php/connect.php';
        $sql    = "select * from admin where id = '$id'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $name    = $row['name'];
            $img      = $row['image'];
        }
        echo '  <header class="topbar " data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark" >
                <div class="navbar-header bg-dark " data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php?AdminID='.$id.'">
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
                        href="javascript:void(0)"><i class="ti-menu ti-close text-light"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse " id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center ">

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
                                <img src="../../'.$img.'" alt="user-img" width="36"
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
        <aside class="left-sidebar bg-dark" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav ">
                    <ul id="sidebarnav " >
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2 bg-dark">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item bg-dark">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="analysis.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Analysis</span>
                            </a>
                        </li>
                        <li class="sidebar-item bg-dark">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="student.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Student</span>
                            </a>
                        </li>
                        <li class="sidebar-item bg-dark">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./myClasses_.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Teacher</span>
                            </a>
                        </li>
                        <li class="sidebar-item bg-dark">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./newClass.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Class</span>
                            </a>
                        </li>
                        <li class="sidebar-item bg-dark">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Lesson</span>
                            </a>
                        </li>
                        <li class="sidebar-item bg-dark">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Exam</span>
                            </a>
                        </li>
                        <li class="sidebar-item bg-dark">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu text-light">News</span>
                            </a>
                        </li>
                        <li class="sidebar-item bg-dark">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Event</span>
                            </a>
                        </li>
                        <li class="sidebar-item bg-dark">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Customization</span>
                            </a>
                        </li>

                        <li class="text-center p-20 upgrade-btn bg-dark">
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
    
        <div class="page-wrapper" style="background-color: rgb(0, 0, 0);">
          
            ';
    }
// ================================End===================================================
}


?>