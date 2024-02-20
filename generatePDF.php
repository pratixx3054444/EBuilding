<?php
require ('./fpdf.php');
$con=new mysqli("localhost", "root", "", "pratix") or die("Connection failed !");
$mid=$_GET['mid'];

$date2=date('d-m-y');

$sql="SELECT m_maintenance.sid,cost,date,fname FROM m_maintenance,jsociety WHERE m_mid='$mid' AND jsociety.jid=m_maintenance.jid";
$data= mysqli_query($con, $sql);
if($row= mysqli_fetch_assoc($data))
{
    $sid=$row['sid'];
    $cost=$row['cost'];
    $date=$row['date'];
    $fname=$row['fname'];
}

$sql2="SELECT * FROM society WHERE sid='$sid'";
$data2= mysqli_query($con, $sql2);
if($row2= mysqli_fetch_assoc($data2))
{
    $sname=$row2['sname'];
    $secname=$row2['secname'];
}
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(71,10,'',0,0);
$pdf->Cell(59,5,$sname,0,0);
$pdf->Cell(59,10,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(71,10,'DETAILS',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(70,10,'Date : '.$date,0,1);
$pdf->Cell(10,0,'Name : '.$fname,0,1);
$pdf->Cell(20,10,'Secretory : '.$secname,0,1);
$pdf->Cell(10,8,'',0,1);


$pdf->SetFont('Arial','B',15);
$pdf->Cell(130,5,'BILL DETAILS : ',0,0);
$pdf->Cell(59,5,'',0,0);
$pdf->Cell(189,10,'',0,1);

$pdf->Cell(50,10,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'Date',1,0,'C');
$pdf->Cell(125,6,'Description',1,0,'C');
$pdf->Cell(25,6,'Amount',1,1,'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(30,15,$date2,1,0,'R');
$pdf->Cell(125,15,'Maintenance has been paid by '.$fname.' on '.$date.'.',1,0,'R');
$pdf->Cell(25,15,$cost."/-",1,0,'R');


$pdf->Output();
?>