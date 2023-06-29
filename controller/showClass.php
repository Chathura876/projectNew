<?php
if(isset($_POST['id']))
{
  include '../php/connect.php';
  $cID=$_POST['id'];
  $sql="select * from class where classID = $cID";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
    $classID=$row['classID'];
    $teacherID=$row['teacherID'];
    $classTitle=$row['classTitel'];
    $className=$row['className'];
    $subject=$row['subject'];
    $grade=$row['grade'];
    $description=$row['description'];
    $image=$row['image'];
    $level=$row['level'];
    $type=$row['type'];

    echo '
    <input type="text" class="form-control d-none" id="exampleInputEmail1" 
      autocomplete="off" name="cID" value="'.$classID.'">
    <div class="form-group">
      <label for="exampleInputEmail1">Class Name</label>
      <input type="text" class="form-control" placeholder="Class Name" name="className" value="'.$className.'">
     </div>

     <div class="form-group">
        <label for="exampleInputEmail1">Class Title</label>
        <input type="text" class="form-control" placeholder="Class Title" name="classTitle" value="'.$classTitle.'">
       </div>

       <div class="form-group">
        <label for="exampleInputEmail1">Subject</label>
        <input type="text" class="form-control" placeholder="Class Subject" name="subject" value="'.$subject.'">
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
        <option value="Grade-6">Rasika</option>
        <option value="Grade-7">Janaka</option>
        <option value="Grade-6">Jiwantha</option>
  
      </select>
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <input type="text" class="form-control" placeholder="Description" name="des" value="'.$description.'">
       </div>

       <div class="form-group">
        <img src="../../assets/img/class/'.$image.'" alt="img" style="width: 200px;"><br>
        <label for="exampleInputEmail1">Image</label>
      
        <input type="file" class="form-control" placeholder="Image" name="img" value="'.$image.'">
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

   
    ';
  }
}




?>