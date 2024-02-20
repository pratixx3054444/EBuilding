<?php
session_start();

$con=new mysqli('localhost','root','','pratix') or die("Connection failed !");
        echo $_POST['sid'];
        $jid=$_SESSION['seRid'];
        $date= date('Y-m-d');
        $status="T";
        $sid=$_POST['sid'];
        $bhk=$_POST['bhk'];
        $cost=$_POST['cost'];
        $sql="INSERT INTO m_maintenance(sid,jid,bhk,date,cost,pon) VALUES(?,?,?,?,?,?)";
        if($stmt=$con->prepare($sql))
        {
            $stmt->bind_param('iiisis',$sid,$jid,$bhk,$date,$cost,$status);
            $stmt->execute();
            $added="<div class='alert alert-danger mt-3' role='alert'>*Payment success !
    </div>";
            echo '<script>window.location.href="MemberPayment.php"</script>';
        }

   
?>