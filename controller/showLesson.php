<?php
if(isset($_POST['id']))
{
  include '../php/connect.php';
  // $admin=$_GET['AdminID'];

  $lessonID=$_POST['id'];
  $sql="select * from lesson where lessonID = $lessonID";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
        $lessonID=$row['lessonID'];
        $subject=$row['subject'];
        $teacher=$row['teacher'];
        $LessonTitle=$row['LessonTitle'];
        $description=$row['description'];
        $date=$row['date'];
        $classID=$row['classID'];
        $image=$row['image'];
        $video=$row['video'];
  }
  echo '
  
  <section>
    <div class="container-fluid">
     
      <div class="row">
        <div class="col-6">
          <video src="../../assets/img/media/'.$video.'" controls   style="width: 450px; ">ff</video>
        </div>
       
        <div class="col-6 bg-secondary text-light">
          <div class="row">
            <center><h1 class="mt-3">Lesson Details</h1></center>
          </div>
          <div class="row">
          <form action="../../model/admin/addClass.php" method="POST" enctype="multipart/form-data">';
   
                                                    
            
            echo'  <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" class="form-control" placeholder="Subject" name="subject" value="'.$subject.'">
               </div>
  
               
              <div class="form-group">
                <label for="exampleInputEmail1">Class ID</label>
                <input type="text" class="form-control" placeholder="Class ID" name="classID" value="'.$classID.'">
               </div>
  
               <div class="form-group mb-2 form-control">
                <label for="grade">Teacher :</label>
              <select name="Teacher" id="teacher" value="'.$teacher.'">';
  
             
                $sql="select * from teacher";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                  $id=$row['teacher'];
                  $name=$row['name'];
  
                  echo '<option value="'.$name.'">'.$name.'</option>';
                }
  
  
        
                
           
            echo'  </select>
              </div>
  
               <div class="form-group">
                  <label for="exampleInputEmail1">Lesson Title</label>
                  <input type="text" class="form-control" placeholder="Lesson Title" name="Lesson" value="'.$LessonTitle.'">
                 </div>
  
                 <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" class="form-control" placeholder="Description" name="subject" value="'.$description.'">
                 </div>
  
              
  
                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" class="form-control" placeholder="Description" name="date" value="'.$date.'">
                 </div>
  
                 <div class="form-group">
                  <label for="exampleInputEmail1">Thumbnail</label>
                  <input type="file" class="form-control" placeholder="Image" name="img" value="'.$image.'">
                 </div>
  
                 <div class="form-group">
                  <label for="exampleInputEmail1">Video</label>
                  <input type="file" class="form-control" placeholder="Image" name="video"value="'.$video.'">
                 </div>
  
                 <div class="form-group">
                  <input type="submit" class="form-control bg-warning text-light mb-2" value="Update">
                <button type="button" class="btn btn-dark form-control">Cloase</button>
                 </div>
            </form></div>
        </div>
        

      </div>
    </div>
  </section>
  
  ';

}
?>