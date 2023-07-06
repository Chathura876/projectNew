<?php
// Include your database connection and other necessary code here
include '../php/connect.php';
// Check if the "D" parameter is present in the URL (for deletion logic, if required)
if (isset($_GET['D'])) {
  // Delete logic for the specified registration ID ($_GET['D']) goes here
  // Implement the necessary deletion code
  // Example: $registrationId = $_GET['D']; // Get the registration ID and perform deletion
}

// Retrieve student data from the database
$sql = "SELECT * FROM class";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
$pageNum = 6;
$totalPage = ceil($num / $pageNum);
//$admin = $_GET['AdminID'];

// Generate the table
echo '
   <h1>Student Details</h1>
   <center>
     <table>
        <tr>
          <th>classID</th>
          <th>Teacher</th>
          <th>Subject</th>
          <th>Title</th>
          <th>Class</th>
          <th>Grade</th>
          
           <!-- Add this line for the "Grade" column -->
        </tr>';

while ($row = mysqli_fetch_assoc($result)) {
  $classID = $row['classID'];
  $teacher = $row['teacherID'];
  $subject = $row['subject'];
  $grade = $row['grade'];
  $title = $row['classTitel'];
  $class = $row['className'];

  echo '<tr>
  <td>'.$classID.'</td>
  <td>'.$teacher.'</td>
  <td>'.$subject.'</td>
  <td>'.$title.'</td>
  <td>'.$class.'</td>
  <td>'.$grade.'</td>
  
  <!-- Add this line for the "Grade" column -->
  </tr>';
}

echo '</table>
</center>';

// Generate the pagination buttons
echo '<div>';
// for ($btn = 1; $btn <= $totalPage; $btn++) {
//   echo '<button class="btn btn-light mx-2 mt-3">
//           <a href="student.php?AdminID='.$admin.'&pageNo='.$btn.'" class="text-primary">'.$btn.'</a>
//         </button>';
// }
echo '</div>';

// Generate the "Report" button to download the table data
echo '<button class="btn btn-primary mt-3" onclick="downloadReport()">Report</button>';

?>

<script>
  function downloadReport() {
    window.location.href = 'generate_report_class.php';
  }
</script>
