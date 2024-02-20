<?php
session_start();

$con=new mysqli('localhost','root','','pratix') or die("Connection failed !");

$fname= time().".jpg";
$fpath='C://xampp//htdocs//EBuildingTest//images//';
$_SESSION['sesImg']=$fname;

if(!is_dir($fpath))
{
    mkdir($fpath);
}

if(isset($_FILES['webcam']))
{
    move_uploaded_file($_FILES['webcam']['tmp_name'],$fpath.$fname);
    header("Location:Complaint.php");
}
?>