<?php

class userPanel
{
    function getDashboard()
    {
        $option = "none";
        $stdID = $_GET['stdID'];
        $option = $_GET['option'];

        if ($option == "Dashboard") {
            echo '
                <div class="row mt-5 ml-2">
                    <div class="col-md-4 col-sm-12">
                        
                        <section class="fist" style="margin-top: 150px;">
                            
                            <center>
                            <h2 class="ml-5 mt-2">Our Classes</h2>
            
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                        <div class="card m-3" style="width: 18rem;">
                                            <img class="card-img-top" src="../../assets/img/card.jpg" alt="Card image cap" style="width: 300px; height: 300px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card\'s
                                                    content.</p>
                                                <a href="#" class="btn btn-primary">Join Now</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="carousel-item">
                                        <div class="card m-3" style="width: 18rem;">
                                            <img class="card-img-top" src="../../assets/img/carosol (4).jpg" alt="Card image cap" style="width: 300px; height: 300px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s
                                                    content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card m-3" style="width: 18rem;">
                                        <img class="card-img-top" src="../../assets/img/carosol (8).jpg" alt="Card image cap" style="width: 300px; height: 300px;">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s
                                                content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                        </section>
                    </div>
                    
                    <div class="col-md-4 col-sm-12">
                    <center><h1>New Samadhi LMS</h1></center> 
                    <center><img src="../../assets/img/s.png" alt="logo" style="width: 150px;" class="m-5"></center>
                        <div class="row">
                            <div class="col">
                            <center><button class="btn-lg btn-primary" style="border-radius: 8%; width: 300px;">Join New Classes </button></center> 
                            </div>
                        </div>
                    </div>
                    <div class="cc col-md-4 col-sm-12" style="margin-top: 150px; margin-bottom: 600px;">
                    <div class="calender m-5">
                        <div class="calender-header">
                            <span class="month-picker" id="month-picker">May</span>
                            <div class="year-picker" id="year-picker">
                                <span class="year-change" id="year-pre">
                                    <pre><</pre>
                                </span>
                                <span id="year">2023</span>
                                <span class="year-change" id="next-year">
                                    <pre>></pre>
                                </span>
                            </div>
                        </div>
                        <div class="calender-body">
                            <div class="calender-week-days">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                            </div>
                            <div class="calender-day">

                            </div>
                        </div>
                        <div class="calender-footer">

                        </div>
                        <div class="date-time-formate" style="height: max-content; width: max-content; position: relative; top: 140px; justify-content: center; font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;">
                            <div class="date-text-formate pr-2" style="font-size: 1.4rem; padding-right: 55%; border-right: 3px #9796f0 solid; position: absolute; left: -1rem;">TODAY</div>
                            <div class="date-time-value">
                                <div class="time-formate">2:25:41</div>
                                <div class="date-formate">2023:june:11</div>
                            </div>

                        </div>
                    </div>
                </div>
            
            ';

        }
    }


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
                                <img src="../../'.$img.'" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">'.$fullName.'</span></a>
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./myClasses.php?stdID='.$id.'"
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.html"
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
                            <a href="https://www.wrappixel.com/templates/ampleadmin/"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                Sing Out</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            ';
    }
}


?>
