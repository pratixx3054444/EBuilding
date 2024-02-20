<?php
session_start();

$con=new mysqli('localhost','root','','pratix') or die('Connection failed!');

if(isset($_GET['eid'])){
    $sid=$_SESSION['seRid'];
    $date= date("Y-m-d");
    $message="Your event request is accepted!";
    $jid=$_GET['jid'];
    $eid=$_GET['eid'];
    $status="T";
    $sql="UPDATE events SET status='$status' WHERE eid='$eid'";
    mysqli_query($con, $sql);
    
    $sql2="INSERT INTO notifications VALUES('$jid','$sid','$date','$message')";
    mysqli_query($con, $sql2);
    header("Location:ViewEvents.php");
}
?>

