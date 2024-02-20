<?php
session_start();

$sid=$_SESSION['sesSid'];

if(isset($_GET['ujid']))
{
    $con=new mysqli('localhost','root','','pratix') or die('Connection failed !');
    
    $curdate=date("m");
    $curyear=date("Y");
    $query="SELECT * FROM maintenance WHERE MONTH(enddate)='$curdate' AND YEAR(enddate)='$curyear'";
    $data2= mysqli_query($con, $query);
    if($r2= mysqli_fetch_assoc($data2))
    {
        $cost1=$r2['cost1'];
        $cost2=$r2['cost2'];
        $cost3=$r2['cost3'];
        $cost4=$r2['cost4'];
        $cost5=$r2['cost5'];
    }
    $ujid=$_GET['ujid'];
    $sql="SELECT * FROM jsociety WHERE sid='$sid' AND jid='$ujid'";
    $data= mysqli_query($con, $sql);
    if($r=mysqli_fetch_assoc($data))
    {
        $bhk=$r['bhk'];
        $paydate=date("Y-m-d");
        $status="T";
        if($bhk==1)
        {
            $sql2="INSERT INTO m_maintenance(sid,jid,bhk,date,cost,pon) VALUES(?,?,?,?,?,?)";
            if($stmt=$con->prepare($sql2))
            {   
                $stmt->bind_param("iiisis",$sid,$ujid,$bhk,$paydate,$cost1,$status);
                $stmt->execute();
                echo "<script>alert('Payment updated !')</script>";
                echo "<script>window.location.href='Payments.php'</script>";
            }
        }
        else if($bhk==2)
        {
            $sql2="INSERT INTO m_maintenance(sid,jid,bhk,date,cost,pon) VALUES(?,?,?,?,?,?)";
            if($stmt=$con->prepare($sql2))
            {   
                $stmt->bind_param("iiisis",$sid,$ujid,$bhk,$paydate,$cost2,$status);
                $stmt->execute();
                echo "<script>alert('Payment updated !')</script>";
                echo "<script>window.location.href='Payments.php'</script>";
            }
        }
        else if($bhk==3)
        {
            $sql2="INSERT INTO m_maintenance(sid,jid,bhk,date,cost,pon) VALUES(?,?,?,?,?,?)";
            if($stmt=$con->prepare($sql2))
            {   
                $stmt->bind_param("iiisis",$sid,$ujid,$bhk,$paydate,$cost3,$status);
                $stmt->execute();
                echo "<script>alert('Payment updated !')</script>";
                echo "<script>window.location.href='Payments.php'</script>";
            }
        }
        else if($bhk==4)
        {
            $sql2="INSERT INTO m_maintenance(sid,jid,bhk,date,cost,pon) VALUES(?,?,?,?,?,?)";
            if($stmt=$con->prepare($sql2))
            {   
                $stmt->bind_param("iiisis",$sid,$ujid,$bhk,$paydate,$cost4,$status);
                $stmt->execute();
                echo "<script>alert('Payment updated !')</script>";
                echo "<script>window.location.href='Payments.php'</script>";
            }
        }
        else if($bhk==5)
        {
            $sql2="INSERT INTO m_maintenance(sid,jid,bhk,date,cost,pon) VALUES(?,?,?,?,?,?)";
            if($stmt=$con->prepare($sql2))
            {   
                $stmt->bind_param("iiisis",$sid,$ujid,$bhk,$paydate,$cost5,$status);
                $stmt->execute();
                echo "<script>alert('Payment updated !')</script>";
                echo "<script>window.location.href='Payments.php'</script>";
            }
        }
        
    }
    
}
?>