<?php
require_once('../../controller/AdminPanelControl.php');

include '../../php/connect.php';

$admin=$_GET['AdminID'];
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
      <?php
      $delete=new Admin();
      $delete->RemoveTeacher();
      
      ?>
  <!--============= start add teacher Modal ===========================-->
  <div class="modal" id="AddTD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add New Teacher</h5>
          <button type="button" class="Mclose" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form method="POST" action="../../model/admin/addNewTeacher.php" enctype="multipart/form-data">
              <?php
              echo '
              <input type="text" value='.$admin.' class="d-none" name="admin">';
              ?>
                <div class="container-fluid">
                <div class="row">
                 <div class="col-6">
                
               
                <div class="form-group">
                  <label for="exampleInputEmail1"> Name :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter Fist Name" autocomplete="off" name="Name">
                    
      
                </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIC:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter NIC No" autocomplete="off" name="NIC">
                
                </div>
                </div>
                
               
                <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter Address " autocomplete="off" name="address">
                    </div>
            </div>
              
                
             
                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" 
                      placeholder="Enter Mobile No " autocomplete="off" name="mobile">
                  </div>
                </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">description :</label>
                      <textarea name="dis" id="dis" placeholder="Enter Description"></textarea>
                     
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">University :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter University " autocomplete="off" name="Uni">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Degree :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter Degree " autocomplete="off" name="degree">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter User Name " autocomplete="off" name="userName">
                    </div>
                  </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password :</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" 
                          placeholder="Enter Password " autocomplete="off" name="password">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group mb-2">
                        <label for="grade">Level :</label>
                      <select name="level" id="level" style="width: 180px;">
                        <option value="O/L">O/L</option>
                        <option value="A/L">A/L</option>
                        <option value="Both">Both</option>
                   
                      </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group m-2">
                        <label for="exampleInputEmail1">Image :</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter image " autocomplete="off" name="img">
                      </div>
                    </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Sex :</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="male" />
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
              
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="female" />
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group ">
                  <label for="subject">Subject :</label>
                <select name="subject" id="subject">
                  <option value="Mathematics">Mathematics</option>
                  <option value="Sinhala">Sinhala</option>
                  <option value="Econ">Econ</option>
                  <option value="ICT">ICT</option>
                 
                  
                </select>
                </div>
              </div>
      
         
      
              </div>
              <?php
              echo '<input type="text" class="d-none" value='.$admin.' id="sds" name="admin">
              
              ';
              ?>
              
            
        <center>
                <button type="submit" class="btn btn-success m-2" >Register</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></center>
              </div>
              </form>
        </div>
        <div class="modal-footer">
         
        
        </div>
      </div>
    </div>
  </div>
<!-- 
=========================================End Add teacher Model================================ -->
    <!-- ===============================================Update teacher Model================================= -->

 <!-- Modal -->
  <div class="modal" id="updateTD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Student Details</h5>
          <button type="button" class="close" id="btnClose" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body-u">
        <form method="POST" action="../../model/admin/updateTeacher.php" enctype="multipart/form-data">
              <?php
              echo '
              <input type="text" value='.$admin.' class="d-none" name="admin">';
              ?>  
              <div class="fillFRM">
                <div class="container-fluid">
                <div class="row">
                 <div class="col-6">
                
            
                <div class="form-group">
                  <label for="exampleInputEmail1"> Name :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter Fist Name" autocomplete="off" name="Name">
                    
      
                </div>
               </div>
                <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIC:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter NIC No" autocomplete="off" name="NIC">
                
                </div>
                </div>
                
               
                <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter Address " autocomplete="off" name="address">
                    </div>
            </div>
              
                
             
                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" 
                      placeholder="Enter Mobile No " autocomplete="off" name="mobile">
                  </div>
                </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">description :</label>
                      <textarea name="dis" id="dis" placeholder="Enter Description"></textarea>
                     
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">University :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter University " autocomplete="off" name="Uni">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Degree :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter Degree " autocomplete="off" name="degree">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter User Name " autocomplete="off" name="userName">
                    </div>
                  </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password :</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" 
                          placeholder="Enter Password " autocomplete="off" name="password">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group mb-2">
                        <label for="grade">Level :</label>
                      <select name="level" id="level" style="width: 180px;">
                        <option value="O/L">O/L</option>
                        <option value="A/L">A/L</option>
                        <option value="Both">Both</option>
                   
                      </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group m-2">
                        <label for="exampleInputEmail1">Image :</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter image " autocomplete="off" name="img">
                      </div>
                    </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Sex :</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="male" />
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
              
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="female" />
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group ">
                  <label for="subject">Subject :</label>
                <select name="subject" id="subject">
                  <option value="Mathematics">Mathematics</option>
                  <option value="Sinhala">Sinhala</option>
                  <option value="Econ">Econ</option>
                  <option value="ICT">ICT</option>
                 
                  
                </select>
                </div>
              </div>
      
              </div>
      
              </div>
             
            </div>
            
            
        <center>
                <button type="submit" class="btn btn-warning m-2" >Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></center>
              </div>
              </form>
        </div>
        <div class="modal-footer">
         
        
        </div>
      </div>
    </div>
  </div>
  <!-- ================================end update teacher ============================= -->
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
               $sideMenu=new Admin();
               $sideMenu->getUserSideBar();
               
               ?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Teacher</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="../../controller/generate_report_teacher.php" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Report Generate</a>
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
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                            <div class="col-6">
                            <h3 class="box-title" style="margin-left: 25px; font-size: 23px;">Teacher Details</h3>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-dark text-light" style="margin-left: 440px; font-weight: bold;" id="Add">Add Teacher</button>
                        </div>
                        </div>
                        <div class="row mt-5">
                            <div class="container-fluid">
                                <div class="col-12">
                                    <table class="table table-hover">
                                        <thead class="thead" style="background-color:#efd386;">
                                          <tr style="color: black; font-weight: bold;">
                                            <th scope="col"  bold; color: blacstyle="font-weight:k;">ID</th>
                                            <th scope="col" style="font-weight: bold; color: black;">Name</th>
                                            <th scope="col" style="font-weight: bold; color: black;">NIC</th>
                                            <th scope="col" style="font-weight: bold; color: black;">Address</th>
                                            <th scope="col" style="font-weight: bold; color: black;">Mobile </th>
                                             <th scope="col" style="font-weight: bold; color: black;">Subject</th>
                                          
                                            <th scope="col" style="font-weight: bold; color: black;">Level</th>
                                            <th scope="col" style="font-weight: bold; color: black;">Option</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                         $fill=new Admin();
                                         $fill->fillTeacherTable();
                                          ?>
                                      
                                         
                                        </tbody>
                                      </table>
                                      
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/addteacher.js"></script>

    <script>
        $(document).ready(function(){
          $('.btnUpdate').click(function(){
            var id=$(this).attr('id');
            $('#updateTD').modal('show');
            
            $.post(
              "../../model/admin/showTeacher.php",
              {
                id:id
              },
              function(data){ 
                $('.fillFRM').html(data);
              }
            );
            
           
          });

          $('#btnClose').click(function(){
            $('#updateTD').modal('hide');
          });

          $('#Add').click(function(){
           $('#AddTD').modal('show');
            });
            $('.Mclose').click(function(){
                $('#AddTD').modal('hide');
            });
        });
    </script>
</body>
</html>