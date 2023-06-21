<?php
include '../../php/connect.php';

if(isset($_POST['request']))
{
  $request = $_POST['request'];

  // Sanitize the input or use prepared statements to prevent SQL injection
  $request = mysqli_real_escape_string($con, $request);

  $sql = "SELECT * FROM student WHERE grade = '$request'";
  $result = mysqli_query($con, $sql);
  $count = mysqli_num_rows($result);

  if($count > 0) {
    ?>
    <thead>
      <tr>
        <th class="text-dark">Reg No</th>
        <th class="text-dark">First Name</th>
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
    while($row = mysqli_fetch_assoc($result))
    {
      $reg = $row['stdID'];
      $fname = $row['Fist_Name'];
      $lname = $row['Last_Name'];
      $grade = $row['grade'];
      $address = $row['Address'];
      $mobile = $row['mobile'];
      $school = $row['school'];
      ?>
      <tr>
        <td class="text-dark"><?php echo $reg; ?></td>
        <td class="text-dark"><?php echo $fname; ?></td>
        <td class="text-dark"><?php echo $lname; ?></td>
        <td class="text-dark"><?php echo $address; ?></td>
        <td class="text-dark">Grade - <?php echo $grade; ?></td>
        <td class="text-dark"><?php echo $mobile; ?></td>
        <td class="text-dark"><?php echo $school; ?></td>
        <td>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateSTD" >
            Update
          </button>
          <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
      <?php
    }
    ?>
    </tbody>
    <?php
  } else {
    $sql1 = "SELECT * FROM student";
    $result1 = mysqli_query($con, $sql1);
    ?>
    <thead>
      <tr>
        <th class="text-dark">Reg No</th>
        <th class="text-dark">First Name</th>
        <th class="text-dark">Last Name</th>
        <th class="text-dark">Address</th>
        <th class="text-dark">Grade</th>
        <th class="text-dark">Mobile</th>
        <th class="text-dark">School</th>
        <th class="text-dark">Option</th>
      </tr>
    </thead>
    <?php
    while($row = mysqli_fetch_assoc($result1))
    {
      $reg = $row['stdID'];
      $fname = $row['Fist_Name'];
      $lname = $row['Last_Name'];
      $grade = $row['grade'];
      $address = $row['Address'];
      $mobile = $row['mobile'];
      $school = $row['school'];
      ?>
      <tr>
        <td class="text-dark"><?php echo $reg; ?></td>
        <td class="text-dark"><?php echo $fname; ?></td>
        <td class="text-dark"><?php echo $lname; ?></td>
        <td class="text-dark"><?php echo $address; ?></td>
        <td class="text-dark" style="width: 200px;">Grade - <?php echo $grade; ?></td>
        <td class="text-dark"><?php echo $mobile; ?></td>
        <td class="text-dark"><?php echo $school; ?></td>
        <td style="width: 200px;">
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateSTD" >
            Update
          </button>
          <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
      <?php
    }
  }
}
?>
