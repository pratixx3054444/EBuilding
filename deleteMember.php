 <?php

$jid=$_GET['jid'];

if(isset($_GET['jid']))
{
    $con=new mysqli('localhost','root','','pratix') or die('Connection failed');
    $sql="delete from jsociety WHERE jid='$jid'";
    $data= mysqli_query($con, $sql);

    if($data){
        header("Location:Dashboard.php");
    }else{
        die("There was a problem is deleting record");
    }
}
?>