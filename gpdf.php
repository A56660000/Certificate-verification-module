

<?php

// $database = new Database();
// $result = $database->runQuery("SELECT name,author FROM books");
// $header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
// FROM `INFORMATION_SCHEMA`.`COLUMNS` 
// WHERE `TABLE_SCHEMA`='crud' 
// AND `TABLE_NAME`='books'
// and `COLUMN_NAME` in ('name','author')");

//$db = mysqli_connect("localhost", "root", "", "certi_final");
//echo "hello";
//include "verify.php";

session_start();
$num = $_SESSION["certificateNum"] ;
$sql = "SELECT * FROM certificates WHERE c_number = '$num'";

$db = mysqli_connect("localhost", "root", "", "certi_final");
$result = mysqli_query($db, $sql);
$certificate = mysqli_fetch_assoc($result);

if (isset($_POST['generate_pdf'])) {

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('0.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',30);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(70,20,'Certificate Details',0,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}




$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);


//$pdf->Cell(40,12,$num,1);
$header=array("Name","Certificate Number","Course Name","Course Type","Course Duration","Completion Date","Mob Number","Email ID");
$i=0;

//$pdf->Cell(0,20,'Certificate','B',1,'C');
foreach($certificate as $row) {
    $pdf->Ln();
    $pdf->Cell(95,12,$header[$i],0);
    $pdf->Cell(95,12,$row,0);
    $i++;

}
$pdf->Output();


session_destroy();

}
?>