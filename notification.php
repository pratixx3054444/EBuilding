<?php
session_start();
$sid=$_SESSION['sesSid'];
$jid=$_GET['jid'];
$date=date("Y-m-d");
$message="Your maintenance is pending!";

$con=new mysqli('localhost','root','','pratix') or die("Connection failed !");
$sql="INSERT INTO notifications(jid,sid,date,message) VALUES(?,?,?,?)";

if($stmt=$con->prepare($sql))
{
    $stmt->bind_param("iiss",$jid,$sid,$date,$message);
    $stmt->execute();
    header("Location:Payment.php");
}


?>