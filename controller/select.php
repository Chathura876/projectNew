<?php
if (isset($_POST['std_id']))
{
  include '../php/connect.php';
  $id=$_POST['std_id'];
  $sql="select * from student where stdID=$id";
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
    $username=$row['UserName'];

    echo ' <form method="POST" enctype="multipart/form-data">
    <div class="container-fluid">
    <div class="row">
     <div class="col-6">
    
   
    <div class="form-group">
      <label for="exampleInputEmail1">Fist Name :</label>
      <input type="text" class="form-control" id="exampleInputEmail1" 
        placeholder="'.$fname.'" autocomplete="off" name="uFName" >
        

    </div>
    </div>
    <div class="col-6">
    <div class="form-group">
      <label for="exampleInputEmail1">Last Name :</label>
      <input type="text" class="form-control" id="exampleInputEmail1" 
        placeholder="'.$lname.'" autocomplete="off" name="uLName">
    
    </div>
    </div>
    
   
    <div class="col-6">
    <div class="form-group">
      <label for="exampleInputEmail1">Address :</label>
      <input type="text" class="form-control" id="exampleInputEmail1" 
        placeholder="'.$address.'" autocomplete="off" name="uaddress">
        </div>
</div>
  
    
 
    <div class="col-6">
      <div class="form-group">
        <label for="exampleInputEmail1">Mobile :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" 
          placeholder="'.$mobile.'" autocomplete="off" name="umobile">
      </div>
    </div>
      <div class="col-6">
        <div class="form-group">
          <label for="exampleInputEmail1">School :</label>
          <input type="text" class="form-control" id="exampleInputEmail1" 
            placeholder="'.$school.'" autocomplete="off" name="uschool">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="exampleInputEmail1">User Name :</label>
          <input type="text" class="form-control" id="exampleInputEmail1" 
            placeholder="'.$username.'" autocomplete="off" name="uUserName">
        </div>
      </div>
        <!-- <div class="col-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Password :</label>
            <input type="password" class="form-control" id="exampleInputEmail1" 
              placeholder=" " autocomplete="off" name="upassword">
          </div>
        </div> -->
      <div class="col-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Birthday :</label>
          <input type="date" class="form-control" id="exampleInputEmail1"  autocomplete="off" name="uBOD">
        </div>
      </div>
        <div class="col-12">
          <div class="form-group m-2">
            <label for="exampleInputEmail1">Image :</label>
            <input type="file" class="form-control" id="exampleInputEmail1"
              placeholder="Enter image" autocomplete="off" name="uimg">
          </div>
        </div>
  <div class="col-6">
    <div class="form-group">
      <label for="exampleInputEmail1">Sex :</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="usex" id="inlineRadio1" value="male" />
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
  
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="usex" id="inlineRadio2" value="female" />
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
  <select name="ugrade" id="grade">
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


<center>
    <button type="submit" class="btn btn-warning m-2" >Update</button>
    <button type="button" class="btn btn-dark" id="btnClose" data-dismiss="modal">Close</button></center>
  </div>
  </form>
</div>';
  }
}


?>