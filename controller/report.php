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
$sql = "SELECT * FROM student";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
$pageNum = 6;
$totalPage = ceil($num / $pageNum);
//$admin = $_GET['AdminID'];

// Generate the table
echo '
   <h1>student details</h1>
<center><table>
        <tr>
          <th>Registration ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Address</th>
          <th>Grade</th>
          <th>Mobile</th>
          <th>School</th>
        </tr>';

while ($row = mysqli_fetch_assoc($result)) {
  $reg = $row['stdID'];
  $fname = $row['Fist_Name'];
  $lname = $row['Last_Name'];
  $grade = $row['grade'];
  $address = $row['Address'];
  $mobile = $row['mobile'];
  $school = $row['school'];

  echo '<tr>
          <td class="text-dark">'.$reg.'</td>
          <td class="text-dark">'.$fname.'</td>
          <td class="text-dark">'.$lname.'</td>
          <td class="text-dark">'.$address.'</td>
          <td class="text-dark">Grade - '.$grade.'</td>
          <td class="text-dark">'.$mobile.'</td>
          <td class="text-dark">'.$school.'</td>
        </tr>';
}

echo '</table></center>';

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
    window.location.href = 'generate_report.php';
  }
</script>
