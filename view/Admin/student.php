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
                            <a href="../../controller/generate_report.php" target="_blank"
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

<!-- ===============================================Add Student Model================================= -->

<!-- ============================Send Data to Database=========================== -->


  
  <!--============= start add student Modal ===========================-->
  <div class="modal" id="AddSTD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add New Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form method="POST" action="../../model/admin/stdRegister.php" enctype="multipart/form-data">
                <div class="container-fluid">
                <div class="row">
                 <div class="col-6">
                
               
                <div class="form-group">
                  <label for="exampleInputEmail1">Fist Name :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Fist Name" autocomplete="off" name="FName">
                    
      
                </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Last Name" autocomplete="off" name="LName">
                
                </div>
                </div>
                
               
                <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Address " autocomplete="off" name="address">
                    </div>
            </div>
              
                
             
                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Enter Mobile No " autocomplete="off" name="mobile">
                  </div>
                </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">School :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter School " autocomplete="off" name="school">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter School " autocomplete="off" name="UserName">
                    </div>
                  </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password :</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter School " autocomplete="off" name="password">
                      </div>
                    </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Birthday :</label>
                      <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter School " autocomplete="off" name="BOD">
                    </div>
                  </div>
                    <div class="col-12">
                      <div class="form-group m-2">
                        <label for="exampleInputEmail1">Image :</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter School " autocomplete="off" name="img">
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
                <label for="district">District :</label>
              <select name="district" id="district">
                <option value="Aparam">Aparam</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Badulla">Badulla</option>
                <option value="Batticaloa">Batticaloa</option>
                <option value="Colombo">Colombo</option>
                <option value="Galle">Galle</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Hambantota">Hambantota</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Kalutara">Kalutara</option>
                <option value="Kandy">Kandy</option>
                <option value="Kegalle">Kegalle</option>
                <option value="Kilinochchi">Kilinochchi</option>
                <option value="Kurunegala">Kurunegala</option>
                <option value="Mannar">Mannar</option>
                <option value="Matale">Matale</option>
                <option value="Matara">Matara</option>
                <option value="Monaragala">Monaragala</option>
                <option value="Mullaitivu">Mullaitivu</option>
                <option value="Nuwara Eliya">Nuwara Eliya</option>
                <option value="Polonnaruwa">Polonnaruwa</option>
                <option value="Puttalam">Puttalam</option>
                <option value="Ratnapura">Ratnapura</option>
                <option value="Trincomalee">Trincomalee</option>
                <option value="Vavuniya">Vavuniya</option>
                
              </select>
              </div>
            </div>
      
            <div class="col-6">
              <div class="form-group mb-2">
                <label for="grade">Grade :</label>
              <select name="grade" id="grade">
                <option value="6">Grade-6</option>
                <option value="7">Grade-7</option>
                <option value="8">Grade-8</option>
                <option value="9">Grade-9</option>
                <option value="10">Grade-10</option>
                <option value="11">Grade-11</option>
                <option value="12">Grade-12</option>
                <option value="13">Grade-13</option>
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
=========================================End Add Student Model================================ -->

<!-- ===============================================Update Student Model================================= -->

 <!-- Modal -->
  <div class="modal" id="updateSTD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Student Details</h5>
          <button type="button" class="close" id="btnClose" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body-u">
            <form action="../../controller/stdUp.php" method="POST" enctype="multipart/form-data" id="uploadFRM">
             
              <div class="getFRM">
                <div class="container-fluid">
                <div class="row">
                 <div class="col-6">
                
               
                <div class="form-group">
                  <label for="exampleInputEmail1">Fist Name :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Fist Name" autocomplete="off" name="fname">
                    
      
                </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter Last Name" autocomplete="off" name="lname">
                
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
                      <label for="exampleInputEmail1">School :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter School " autocomplete="off" name="school">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter School " autocomplete="off" name="username">
                    </div>
                  </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password :</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" 
                          placeholder="Enter School " autocomplete="off" name="password">
                      </div>
                    </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Birthday :</label>
                      <input type="date" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter School " autocomplete="off" name="BOD">
                    </div>
                  </div>
                    <!-- <div class="col-12">
                      <div class="form-group m-2">
                        <label for="exampleInputEmail1">Image :</label>
                        <input type="file" class="form-control" id="exampleInputEmail1"
                          placeholder="Enter School " autocomplete="off" name="uimg">
                      </div>
                    </div> -->
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
                <label for="district">District :</label>
              <select name="udistrict" id="district">
                <option value="Aparam">Aparam</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Badulla">Badulla</option>
                <option value="Batticaloa">Batticaloa</option>
                <option value="Colombo">Colombo</option>
                <option value="Galle">Galle</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Hambantota">Hambantota</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Kalutara">Kalutara</option>
                <option value="Kandy">Kandy</option>
                <option value="Kegalle">Kegalle</option>
                <option value="Kilinochchi">Kilinochchi</option>
                <option value="Kurunegala">Kurunegala</option>
                <option value="Mannar">Mannar</option>
                <option value="Matale">Matale</option>
                <option value="Matara">Matara</option>
                <option value="Monaragala">Monaragala</option>
                <option value="Mullaitivu">Mullaitivu</option>
                <option value="Nuwara Eliya">Nuwara Eliya</option>
                <option value="Polonnaruwa">Polonnaruwa</option>
                <option value="Puttalam">Puttalam</option>
                <option value="Ratnapura">Ratnapura</option>
                <option value="Trincomalee">Trincomalee</option>
                <option value="Vavuniya">Vavuniya</option>
                
              </select>
              </div>
            </div>
      
            <div class="col-6">
              <div class="form-group mb-2">
                <label for="grade">Grade :</label>
              <select name="grade" id="grade">
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
            </div>
      
              </div>
            
            </div>
          </div>
        <center> <input type="text" class="d-none" id="fill" name="fill">
                 <input type="submit" class="btn btn-warning m-2" id="update" value="Update">
                <button type="button" class="btn btn-dark" id="btnClose" data-dismiss="modal">Close</button></center>
              
              </form>
        </div>
        <div class="modal-footer">
         
        
        </div>
      </div>
    </div>
  </div>
<!-- 
=========================================End Update Student Model================================ -->

<!-- =============================Start Delete Student ================================================ -->
<?php
 if(isset($_GET['D']))
 {
  $d=$_GET['D'];
  $sql="DELETE FROM student WHERE `student`.`stdID` =$d";
  $result=mysqli_query($con,$sql);
 }

?>

<!-- ===================================== End Delete Proccess ======================== -->
                                <div class="col-4">
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AddSTD" style="margin-left: 250px;">
                                        Add Student
                                      </button>
                           
                                </div>
                            </div>
                            
                           
                            
                          
                            <div class="table-responsive">
                                <table class="table table-hover bg-light mt-5" id="tb">
                                <thead class="thead" style="background-color:#efd386;">
                                      <tr>
                                        <th style="font-weight: bold; color: black;">Reg No</th>
                                        <th style="font-weight: bold; color: black;">Fist Name</th>
                                        <th style="font-weight: bold; color: black;">Last Name</th>
                                        <th style="font-weight: bold; color: black;">Address</th>
                                        <th style="font-weight: bold; color: black;">Grade</th>
                                        <th style="font-weight: bold; color: black;">Mobile</th>
                                        <th style="font-weight: bold; color: black;">School</th>
                                        <th style="font-weight: bold; color: black;">Option</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                              $sql="select * from student ";
                              $result=mysqli_query($con,$sql);
                              $num=mysqli_num_rows($result);
                              $pageNum=6;
                              $totalPage=ceil($num/$pageNum);
                              $admin=$_GET['AdminID'];

                              for($btn=1;$btn<=$totalPage;$btn++)
                              {
                                echo '<button class="btn btn-light mx-2 mt-3"><a href="student.php?AdminID='.$admin.'&pageNo='.$btn.'" class="text-primary">'.$btn.'</a></button>';
                              }
                              if(isset($_GET['pageNo']))
                              {
                                $page=$_GET['pageNo'];
                                //echo $page;
                              }
                              else
                              {
                                $page=1;
                              }

                              $startLimit = ($page- 1) * $pageNum;
                              $sql = "SELECT * FROM student LIMIT ".$startLimit.','.$pageNum;
                              
                              $result = mysqli_query($con, $sql);

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
                                   <td class="text-dark" style="width: 200px;">Grade - '.$grade.'</td>
                                    <td class="text-dark">'.$mobile.'</td>
                                    <td class="text-dark">'.$school.'</td>

                                    <td style="width: 200px;">
                                        <button type="button" id="'.$reg.'" class="ubtn btn  ml-5" name="ubtn" >
                                        <i class="fas fa-edit"></i>
                                          </button>
                                         <a href="./student.php?AdminID='.$admin.'&D='.$reg.'" class="btn  text-danger" onclick="deleteData()"><i class="fa fa-trash" aria-hidden="true"></i> </a>
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
<script>
function deleteData() {
  confirm("Are you sure delete this ?");
}
</script>
<script>$(document).ready(function(){
  $('.ubtn').click(function(){
    var reg=$(this).attr('id');
    $('#fill').val(reg);
   $.post("../../model/admin/stdUpdate.php",
   {
    StdId:reg
   },
   function(data){
    $('.getFRM').html(data);
   }
   );
 
    $('#updateSTD').modal('show');
  });


  $('#btnClose').click(function(){
    $('#updateSTD').modal('hide');
  });
});</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- <script>
  $(document).ready(function(){
    $('#upbtn').click(function(){
      upID=$(this).attr('id');
      alert(upID);
    });
  }); -->
<!-- </script> -->

</body>




</html>