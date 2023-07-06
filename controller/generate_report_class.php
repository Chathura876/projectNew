<?php
require_once '../php/connect.php';
require_once '../controller/TCPDF-main/tcpdf.php';

// Retrieve student data from the database
$sql = "SELECT * FROM class";
$result = mysqli_query($con, $sql);

// Create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Class Report');
$pdf->SetSubject('Class Report');
$pdf->SetKeywords('Class, Report');

// Set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// Set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Set font
$pdf->SetFont('helvetica', '', 12);

// Add a page
$pdf->AddPage();

// Generate table header
$pdf->Cell(40, 10, 'classID', 1);
$pdf->Cell(40, 10, 'Teacher', 1);
$pdf->Cell(40, 10, 'Subject', 1);
$pdf->Cell(40, 10, 'Title', 1);
$pdf->Cell(40, 10, 'Class', 1);
$pdf->Cell(40, 10, 'Grade', 1);

$pdf->Ln();

// Generate table content
while ($row = mysqli_fetch_assoc($result)) {
  $classID = $row['classID'];
  $teacher = $row['teacherID'];
  $subject = $row['subject'];
  $grade = $row['grade'];
  $title = $row['classTitel'];
  $class = $row['className'];

  // Add data to PDF table
  $pdf->Cell(40, 10, $classID, 1);
  $pdf->Cell(40, 10, $teacher, 1);
  $pdf->Cell(40, 10, $subject, 1);
  $pdf->Cell(40, 10, $grade, 1);
  $pdf->Cell(40, 10, $title, 1);
  $pdf->Cell(40, 10, $class, 1);

  $pdf->Ln();
}

// Output the PDF to the browser
$pdf->Output('class_report.pdf', 'D');


