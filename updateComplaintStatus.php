<?php

if(isset($_GET['cid']))
{
    $con=new mysqli("localhost","root","","pratix");
    $cid=$_GET['cid'];
    $sql="UPDATE complaint SET status='T' WHERE cid='$cid'";
    $stmt= mysqli_query($con, $sql);
    header("Location:Complaints.php");
}


?>

