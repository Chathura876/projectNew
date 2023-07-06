<?php
 include '../../php/connect.php';
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
        echo '  <header class="topbar "  style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
            <nav class="navbar top-navbar navbar-expand-md " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                <div class="navbar-header " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
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
                            <h4 class="text-light">Newසමාධි</h4>
                            
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
                <div class="navbar-collapse collapse " id="navbarSupportedContent" style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                   
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
        <aside class="left-sidebar " data-sidebarbg="skin6" style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav ">
                    <ul id="sidebarnav " >
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2 " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true" style="font-size: 20px;"></i>
                                <span class="hide-menu text-light" style="font-weight: bold;">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="analysis.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Analysis</span>
                            </a>
                        </li>
                        <li class="sidebar-item " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="student.php?AdminID='.$id.'"
                                aria-expanded="false">
                               <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Student</span>
                            </a>
                        </li>
                        <li class="sidebar-item " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="teacher.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Teacher</span>
                            </a>
                        </li>
                        <li class="sidebar-item " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="class.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Class</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="lesson.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Lesson</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Exam</span>
                            </a>
                        </li>
                        <li class="sidebar-item " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="news.php?AdminID='.$id.'"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu text-light">News</span>
                            </a>
                        </li>
                        <li class="sidebar-item " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Event</span>
                            </a>
                        </li>
                        <li class="sidebar-item " style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu text-light">Customization</span>
                            </a>
                        </li>

                        <li class="text-center p-20 upgrade-btn" style="background: linear-gradient(to bottom, #29293b 10%, #0e0e0e 100%);">
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
    
        <div class="page-wrapper" style="background-color: #f0efef;">
          
            ';
    }
// ================================End===================================================
function fillTeacherTable()
{
    include '../../php/connect.php';
    $sql="select * from teacher";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
      $Tid=$row['teacherID'];
      $name=$row['name'];
      $address=$row['address'];
      $mobile=$row['mobile'];
      $subject=$row['subject'];
      $NIC=$row['NIC'];
      $level=$row['level'];
      $adminid = $_GET['AdminID'];


        echo '<tr>
        <td>'.$Tid.'</td>
        <td>'.$name.'</td>
        <td>'.$NIC.'</td>
        <td>'.$address.'</td>
        <td>'.$mobile.'</td>
        <td>'.$subject.'</td>
      
        <td>'.$level.'</td>
        <td><button class="btnUpdate btn " id="'.$Tid.'"> <i class="fas fa-edit"></i> </button>
        <a href="../Admin/teacher.php?AdminID='.$adminid.'& Tid='.$Tid.'" class="btnDelete btn text-danger" id="'.$Tid.'"><i class="fas fa-trash-alt"></i></a>
        </td>
      </tr>';
    }
}

function RemoveTeacher()
{
    include '../../php/connect.php';
    if(isset($_GET['Tid']))
    {
        $TeacherID=$_GET['Tid'];
        $sql="DELETE FROM teacher WHERE `teacher`.`teacherID` =$TeacherID";
        $result=mysqli_query($con,$sql);
    }
    
}

function getClassTable()
{
    include '../../php/connect.php';
    $sql = "select * from class";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $classID = $row['classID'];
        $teacher = $row['teacherID'];
        $subject = $row['subject'];
        $grade = $row['grade'];
        $title = $row['classTitel'];
        $class = $row['className'];
        $adminid = $_GET['AdminID'];

        echo '  <tr>
        <td>' . $classID . '</td>
        <td>' . $teacher . '</td>
        <td>' . $subject . '</td>
        <td>' . $title . '</td>
        <td>' . $class . '</td>
        <td>' . $grade . '</td>
        <td>
            <button class="btnUpdate btn " id="' . $classID . '"> <i class="fas fa-edit"></i> </button>
            <a href="./class.php?AdminID='.$adminid.'& classID='.$classID.'" class="btn text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
      </tr>';
    }
}

function RemoveClass()
{
    include '../../php/connect.php';
    if(isset($_GET['classID']))
    {
        $classID=$_GET['classID'];
        $sql="DELETE FROM class WHERE `class`.`classID` =$classID";
        $result=mysqli_query($con,$sql);
    }
     
}



function getLessonTable()
{
    include '../php/connect.php';
    $sql="select * from lesson";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $lessonID=$row['lessonID'];
        $subID=$row['subID'];
        $teacherID=$row['teacherID'];
        $LessonTitle=$row['LessonTitle'];
        $description=$row['description'];
        $date=$row['date'];


        echo ' <tr>
        <th scope="row">'.$lessonID.'</th>
        <td>'.$subID.'</td>
        <td>'.$teacherID.'</td>
        <td>'.$LessonTitle.'</td>
        <td>'.$description.'</td>
        <td>'.$date.'</td>
  
        <td>
            <button class="upBtn" id="'.$lessonID.'"><i class="fa fa-edit" aria-hidden="true"></i></button>
            <button class="btn text-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </td>
      </tr>';

    }
}

}

?>