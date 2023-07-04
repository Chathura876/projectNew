<?php
if(isset($_POST['stdID']))
{
  include '../php/connect.php';

$stdID=$_POST['stdID'];
$sql="select * from student where stdID = '$stdID'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
  $reg=$row['stdID'];
  $fname=$row['Fist_Name'];
  $lname=$row['Last_Name'];
  $grade=$row['grade'];
  $address=$row['Address'];
  $school=$row['school'];
  $sex=$row['sex'];
  $fullName = $fname . ' ' . $lname;


  echo '  <form>
<div class="form-group">
  <label for="">Student ID :</label>
  <input type="text" class="form-control" id=""  placeholder="'.$stdID.'">

</div>
<div class="form-group">
  <label for="">Name :</label>
  <input type="text" class="form-control" id="" placeholder="'.$fullName.'">
</div>
<div class="form-group">
  <label for="">Address :</label>
  <input type="text" class="form-control" id="" placeholder="'.$address.'">
</div>
<div class="form-group">
  <label for="">Gender :</label>
  <input type="text" class="form-control" id="" placeholder="'.$sex.'">
</div>
<div class="form-group">
  <label for="">Grade :</label>
  <input type="text" class="form-control" id="" placeholder="'.$grade.'">
</div>
<div class="form-group">
  <label for="">School :</label>
  <input type="text" class="form-control" id="" placeholder="'.$school.'">
</div>


</form>';


}





  

}



?>