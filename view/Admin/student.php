<?php

require_once('../../controller/AdminPanelControl.php');

include '../../php/connect.php';



?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">

    <title>Ample Admin Lite Template by WrapPixel</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body >
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
                   $sideBar = new Admin();
                   $sideBar->getUserSideBar();
        ?>


        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
       
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-light">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-dark">Student</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal text-dark">Dashboard</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Sing Out</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box" >
                            <div class="row">
                                <div class="col-4">
                                    <h3 class="box-title">Student Details</h3>
                                </div>
                                <div class="col-4">
    <!-- ===============================================filter student data using grade======================= -->
                                    <select class="form-select" aria-label="Default select example" name="grade" id="grade">
                                    <option value="1" selected>Select Grade</option>
                                        <option value="1">All</option>
                                    <?php
                                    $sql="select * from grade";
                                    $result=mysqli_query($con,$sql);
                                    while ($row=mysqli_fetch_assoc($result))
                                    {
                                        $grade=$row['id'];
                                        echo '<option value='.$grade.'>Grade '.$grade.'</option>';
                                    }
                                    
                                    ?>
                                       
                                        
                                      </select>
                                </div>
<!-- =================================================End filter============================================= -->
                                <div class="col-4">
                                    <button class="btn btn-primary text-light mt-2 mb-4" style="margin-left: 250px; "> Add Student</button>
                           
                                </div>
                            </div>
                            
                           
                            
                          
                            <div class="table-responsive">
                                <table class="table table-hover bg-light mt-5" id="tb">
                                    <thead>
                                      <tr>
                                        <th class="text-dark">Reg No</th>
                                        <th class="text-dark">Fist Name</th>
                                        <th class="text-dark">Last Name</th>
                                        <th class="text-dark">Address</th>
                                        <th class="text-dark">Grade</th>
                                        <th class="text-dark">Mobile</th>
                                        <th class="text-dark">School</th>
                                        <th class="text-dark">Option</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                              $sql="select * from student";
                              $result=mysqli_query($con,$sql);
                              while($row=mysqli_fetch_assoc($result))
                              {
                                    $reg=$row['stdID'];
                                    $fname=$row['Fist_Name'];
                                    $lname=$row['Last_Name'];
                                    $grade=$row['grade'];
                                    $address=$row['Address'];
                                    $mobile=$row['mobile'];
                                    $school=$row['school'];

                                    echo'   <tr>
                                    <td class="text-dark">'.$reg.'</td>
                                    <td class="text-dark">'.$fname.'</td>
                                    <td class="text-dark">'.$lname.'</td>
                                   <td class="text-dark">'.$address.'</td>
                                   <td class="text-dark">Grade - '.$grade.'</td>
                                    <td class="text-dark">'.$mobile.'</td>
                                    <td class="text-dark">'.$school.'</td>
                                    <td>
                                        <button class="btn btn-warning text-dark mr-3">Update</button>
                                         <button class="btn btn-danger text-light">Delete</button>
                                    </td>
                                  </tr>';
                                    

                              }

                            ?>
                                      
                                     
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <script>
$(document).ready(function(){
    $('#grade').on('change', function() {
        var value = $(this).val();
        
        $.ajax({
            url: "../../../hnd/model/admin/StudentFillter.php",
            type: "POST",
            data: { request: value },
            beforeSend: function() {
                $("#tb").html("<span>Loading...</span>");
            },
            success: function(data) {
                $("#tb").html(data);
            }
            
        });
    });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>




</html>