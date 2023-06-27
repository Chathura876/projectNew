<?php
if(isset($_POST['id']))
{
  include '../../php/connect.php';
  $id=$_POST['id'];
  $sql="select * from teacher where teacherID=$id";
  $result=mysqli_query($con,$sql);
  while ($row=mysqli_fetch_assoc($result))
  {
    $name=$row['name'];
    $NIC=$row['NIC'];
    $address=$row['address'];
    $mobile=$row['mobile'];
    $dis=$row['description'];
    $Uni=$row['Univicity'];
    $degree=$row['degree'];
    $userName=$row['userName'];
    $password=$row['password'];
    $sex=$row['sex'] ;
  
    $level =$row['level'];
    $subject =$row['subject'];
    $image =$row['Timage'];

    echo'
    <div class="container-fluid">
                <div class="row">
                 <div class="col-6">
                  <input type="text" class="form-control d-none" id="exampleInputEmail1" 
              autocomplete="off" name="Tid" value="'.$id.'">
            
                <div class="form-group">
                  <label for="exampleInputEmail1"> Name :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter Fist Name" autocomplete="off" name="Name" value="'.$name.'">
                    
      
                </div>
               </div>
                <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIC:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter NIC No" autocomplete="off" name="NIC" value="'.$NIC.'">
                
                </div>
                </div>
                
               
                <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter Address " autocomplete="off" name="address" value="'.$address.'">
                    </div>
            </div>
              
                
             
                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" 
                      placeholder="Enter Mobile No " autocomplete="off" name="mobile" value="'.$mobile.'">
                  </div>
                </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">description :</label>
                      <input type="text" name="dis" id="dis" placeholder="Enter Description" value="'.$dis.'">
                     
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">University :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter University " autocomplete="off" name="Uni" value="'.$Uni.'">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Degree :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter Degree " autocomplete="off" name="degree" value="'.$degree.'">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" 
                        placeholder="Enter User Name " autocomplete="off" name="userName" value="'.$userName.'">
                    </div>
                  </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password :</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" 
                          placeholder="Enter Password " autocomplete="off" name="password" value="'.$password.'">
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
                          placeholder="Enter image " autocomplete="off" name="img" value="'.$image.'">
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
    ';
  }
}


?>