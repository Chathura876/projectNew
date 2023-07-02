<?php
include '../../php/connect.php';
require_once('../../controller/AdminPanelControl.php');
$admin=$_GET['AdminID'];
$RemoveClass=new Admin();
$RemoveClass->RemoveClass();

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
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

    <!-- ============================================================== -->
    <!--========================Add Class Modal Start ==================-->
    <!-- ============================================================== -->

<div class="modal fade bd-example-modal-xl" aria-labelledby="myExtraLargeModalLabel"  aria-hidden="true" role="dialog" id="addClass">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Class</h5>
        <button type="button" class="Aclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- ======================Start Form=============================== -->
        <form action="../../model/admin/addClass.php" method="POST" enctype="multipart/form-data">
          <?PHP
          echo '<input type="text" value="'.$admin.'" name="admin" class="d-none">';
          ?>
          
            <div class="form-group">
              <label for="exampleInputEmail1">Class Name</label>
              <input type="text" class="form-control" placeholder="Class Name" name="className">
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Class Title</label>
                <input type="text" class="form-control" placeholder="Class Title" name="classTitle">
               </div>

               <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" class="form-control" placeholder="Class Subject" name="subject">
               </div>

               <div class="form-group mb-2 form-control">
                <label for="grade">Grade :</label>
              <select name="grade" id="grade" >
                <option value="Grade-6">Grade-6</option>
                <option value="Grade-7">Grade-7</option>
                <option value="Grade-6">Grade-8</option>
                <option value="Grade-7">Grade-9</option>
                <option value="Grade-6">Grade-10</option>
                <option value="Grade-7">Grade-11</option>
                <option value="Grade-6">Grade-12</option>
                <option value="Grade-7">Grade-13</option>
              </select>
              </div>
              <div class="form-group mb-2 form-control">
                <label for="grade">Teacher :</label>
              <select name="teacher" id="teacher">
              <?php
              $sql="select * from teacher";
              $result=mysqli_query($con,$sql);
              while ($row=mysqli_fetch_assoc($result))
              {
                $name=$row['name'];
                $teacherID=$row['teacherID'];

                echo '  <option value="'.$teacherID.'">'.$name.'</option>';
              }
              
              ?>
          
              </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" class="form-control" placeholder="Description" name="des">
               </div>

               <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" placeholder="Image" name="img">
               </div>

               <div class="form-group mb-2 form-control">
                <label for="grade">Level :</label>
              <select name="level" id="level">
                <option value="O/L">O/L</option>
                <option value="A/L">A/L</option>
              </select>
              </div>
              <div class="form-group mb-2 form-control">
                <label for="grade">Type :</label>
              <select name="type">
                <option value="Normal">Normal</option>
                <option value="popular">popular</option>
              </select>
              </div>
            
            <div class="form-group form-check">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="Aclose">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>

          <!-- =============================End form================== -->

      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>
  <!-- ============================================================== -->
    <!--========================Add Class Modal End ==================-->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!--========================Update Class Modal Start ==================-->
    <!-- ============================================================== -->

    <div class="modal fade bd-example-modal-xl" aria-labelledby="myExtraLargeModalLabel"  aria-hidden="true" role="dialog" id="updateClass">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Class</h5>
        <button type="button" id="Fclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <!-- ======================Start Form=============================== -->
        <form action="../../model/admin/UpdateClass.php" method="POST" enctype="multipart/form-data">
          <?PHP
          echo '<input type="text" value="'.$admin.'" name="admin" class="d-none">';
          ?>
           <div id="Mbody">

           
          
            <div class="form-group">
              <label for="exampleInputEmail1">Class Name</label>
              <input type="text" class="form-control" placeholder="Class Name" name="className">
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Class Title</label>
                <input type="text" class="form-control" placeholder="Class Title" name="classTitle">
               </div>

               <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" class="form-control" placeholder="Class Subject" name="subject">
               </div>

               <div class="form-group mb-2 form-control">
                <label for="grade">Grade :</label>
              <select name="grade" id="grade" >
                <option value="Grade-6">Grade-6</option>
                <option value="Grade-7">Grade-7</option>
                <option value="Grade-6">Grade-8</option>
                <option value="Grade-7">Grade-9</option>
                <option value="Grade-6">Grade-10</option>
                <option value="Grade-7">Grade-11</option>
                <option value="Grade-6">Grade-12</option>
                <option value="Grade-7">Grade-13</option>
              </select>
              </div>
              <div class="form-group mb-2 form-control">
                <label for="grade">Teacher :</label>
              <select name="teacher" id="teacher">

            
              
                
          
              </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" class="form-control" placeholder="Description" name="des">
               </div>

               <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" placeholder="Image" name="img">
               </div>

               <div class="form-group mb-2 form-control">
                <label for="grade">Level :</label>
              <select name="level" id="level">
                <option value="O/L">O/L</option>
                <option value="A/L">A/L</option>
              </select>
              </div>
              <div class="form-group mb-2 form-control">
                <label for="grade">Type :</label>
              <select name="type">
                <option value="Normal">Normal</option>
                <option value="popular">popular</option>
              </select>
              </div>
            </div>
           
            <div class="form-group form-check">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="Fclose">Close</button>
                <button type="submit" class="btn btn-warning">Update</button>
            </div>

          </form>

          <!-- =============================End form================== -->

      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>
  <!-- ============================================================== -->
    <!--========================Update Class Modal End ==================-->
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
            $sideMenuObj=new Admin();
             $sideMenuObj->getUserSideBar();        
        ?>
    
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Classes</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="../../view/Admin/AdminLogin.php" target="_blank"
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
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-6">
                            <h3 class="box-title">Class Details</h3>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary" style="margin-left: 450px;" id="Addbtn">Add Class</button>
                        </div>
                        </div>
    <!-- ================================================================== -->
    <!-- ============================Start table============================ -->
        <!-- =============================================================== -->
                        
                        <div class="row mt-5">
                            <div class="col-12">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">ClassID</th>
                                        <th scope="col">Teacher</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Class</th>
                                       
                                        <th scope="col">Grade</th>
                                        <th scope="col">Option</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $TableData=new Admin();
                                    $TableData->getClassTable();
                                    ?>
                                    
                                    </tbody>
                                  </table>
                            </div>
                        </div>
    <!-- ================================================================== -->
    <!-- ============================End table============================ -->
        <!-- =============================================================== -->

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

            $('#Addbtn').click(function(){
                $('#addClass').modal('show');
            });

            $('#Aclose').click(function(){
                $('#addClass').modal('hide');
            });

            $('.Aclose').click(function(){
                $('#addClass').modal('hide');
            });

            $('.btnUpdate').click(function(){

              var cID=$(this).attr('id');
              $('#updateClass').modal('show');
              $.post(
                "../../controller/showClass.php",
                {
                  id:cID
                },
                function(data){
                  $('#Mbody').html(data);
                }
              );
            });

            $('#Fclose').click(function(){

              $('#updateClass').modal('hide');
            });


        });
    </script>
</body>

</html>