<?php
if(isset($_POST['StdId']))
{
  include '../../php/connect.php';
   $stdID=$_POST['StdId'];
   $sql="select * from student where stdID = '$stdID'";
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
    $BOD=$row['BOD'];
    $username=$row['UserName'];
    $password=$row['password'];
    
    echo' 
    <div class="container-fluid">
    <div class="row">
     <div class="col-6">
    
    <div class="form-group">
    <label for="exampleInputEmail1">Fist Name :</label>
    <input type="text" class="form-control" id="FName" value="'.$fname.'"
      placeholder="Enter Fist Name" autocomplete="off" name="fname">
      

  </div>
  </div>
  <div class="col-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name :</label>
    <input type="text" class="form-control" id="lName" 
      placeholder="Enter Last Name" autocomplete="off" name="lname" value="'.$lname.'">
  
  </div>
  </div>
  
 
  <div class="col-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Address :</label>
    <input type="text" class="form-control" id="address" 
      placeholder="Enter Address " autocomplete="off" name="address" value="'.$address.'">
      </div>
</div>

  

  <div class="col-6">
    <div class="form-group">
      <label for="exampleInputEmail1">Mobile :</label>
      <input type="text" class="form-control" id="mobile" 
        placeholder="Enter Mobile No " autocomplete="off" name="mobile" value="'.$mobile.'">
    </div>
  </div>
    <div class="col-6">
      <div class="form-group">
        <label for="exampleInputEmail1">School :</label>
        <input type="text" class="form-control" id="school" 
          placeholder="Enter School " autocomplete="off" name="school" value="'.$school.'">
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
        <label for="exampleInputEmail1">User Name :</label>
        <input type="text" class="form-control" id="userName" name="username"  
          placeholder="Enter School " autocomplete="off" value="'.$username.'">
      </div>
    </div>
      <div class="col-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Password :</label>
          <input type="password" class="form-control" id="password" 
            placeholder="Enter password " autocomplete="off" name="password" value="'.$password.'">
        </div>
      </div>
    <div class="col-6">
      <div class="form-group">
        <label for="exampleInputEmail1">Birthday :</label>
        <input type="date" class="form-control" id="bod" 
          placeholder="Enter School " autocomplete="off" name="BOD" value="'.$BOD.'">
      </div>
    </div>
      <!-- <div class="col-12">
        <div class="form-group m-2">
          <label for="exampleInputEmail1">Image :</label>
          <input type="file" class="form-control" id="image"
            placeholder="Enter School " autocomplete="off" name="img">
        </div>
      </div> -->
<div class="col-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Sex :</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="sex" id="male" value="male" />
      <label class="form-check-label" for="inlineRadio1">Male</label>
    </div>

    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="sex" id="female" value="female" />
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
';
   }
   
}

?>