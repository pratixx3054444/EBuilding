<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            img{
                height: 100px;
                width: 100px;
            }
            
            a{
                color: black;
            }
            h4{
                margin-left: 30px;
            }
            .nav-link{
                background-color: white;
                color: black;
                 
                margin-top: 5px;
                border-radius: 5px;
                border: none;
                margin-bottom: 7px;
                width: 80%;
                margin-left: 20px;
            }
            
            .nav-link:hover{
                background-color: #dfe1e5;
                color: black;
            }
            
            .text-primary{
                text-shadow: 0 .4rem .8rem #0005;
            }
            
            .rounded-circle{
                box-shadow: 0 .4rem .8rem #000;
            }
            
             .db{
                 background-color: #41a7f5;
                    box-shadow: 0 .4rem .8rem #0005;
                    overflow-y: auto; /* or overflow-y: scroll; */
            }
            
            .db::-webkit-scrollbar {
                width: 0; /* Hides the scrollbar */
                height: 0; /* Hides the scrollbar */
                display: none; /* Optional: Hides the scrollbar */
            }
            table, td, th{
                padding: 1rem;
            }
            
            .pstatus{
                height: 40px;
                width: 40px;
                transition: transform .2s;
            }
            
            .prf{
                    transition: transform .2s;
                }
                .prf:hover{
                    transform: scale(1.2);
                }
            
            .pstatus:hover{
                background-color: #dfe1e5;
                border-radius: 20px;
                transform: scale(1.2);
            }
            
            main.table{
                width: 55vw;
                height: 90vh;
                background-color: #454545;
                color: white;
                box-shadow: 0 .4rem .8rem #0005;
                backdrop-filter:blur(6px);
                overflow: hidden;
                border-radius: .8rem;
            }
            
            .table_header{
                width: 100%;
                height: 10%; 
                background-color: #fff4;
                padding: .8rem 1rem;
            }
            
            .table_body{
                width: 95%;
                max-height: 89%;
                background-color: white;
                color: black;
                max-height: calc(89% - .8rem );
                margin: .8rem auto;
                border-radius: .6rem;
                overflow: auto;
            }
            
            .table-body::-webkit-scrollbar-thumb{
                width: 0.5rem;
                height: 0.5rem;
            }
            
            .table-body::-webkit-scrollbar-thumb{
                border-radius: .5rem;
                background-color: #0004;
                visibility: hidden;
            }            
            
            thead th{
                position: sticky;
                top: 0;
                left: 0;
                background-color: #d5d1defe;
            }
            
            .whatsapp{
                right: 10px;
                position: fixed;
                bottom: 10px;
                height: 70px;
                width: 70px;
            }
            
            .weather{
                border-radius: 25px;
                height: 50px;
                width: 50px;
                margin-left: 30px;
                margin-top: 20px;
            }
            
            .temprature{
                font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-size: 25px;
            }
            
            .getup{
                position: fixed;
            }
            
            .wnavbar{
                width: 100%;
                color: black;
                height: 78px;
                position: fixed;
                left: 270px;
                margin-right: 20px;
                background-color: white;
                box-shadow: 0 .2rem .4rem #0005;
            }
            
            .sp{
                  font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                  font-size: 25px;
                  color: black;
            }
            </style>
            <script src="script.js"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-Building</title>
        <link rel="icon" type="image/x-icon" href="images/E-Building_image.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script>
            function preventBack()
            {
                window.history.forward();
                window.onbeforeunload=function(){
                    alert("You won't be able get back");
                };
            }
            setTimeout("preventBack()",0);
            window.onunload()=function (){null;};
        </script>
    </head>
    <body id="page-top">
        
        <?php
            
            if(isset($_SESSION['sesSid']))
            {
                $con = new mysqli("localhost", "root", "", "pratix") or die("Connection failed");
                $sid=$_SESSION['sesSid'];
                $sql = "SELECT sid,sname,secname,sphoto FROM society WHERE sid='$sid' ";
                $result = mysqli_query($con, $sql);
                
                $sql2="SELECT mobileno FROM registration WHERE rid='$sid'";
                $data2= mysqli_query($con, $sql2);
                $result2= mysqli_fetch_assoc($data2);
                
                $data = mysqli_fetch_assoc($result);
                $dsecname=$data['secname'];
                $sphoto=$data['sphoto'];
                $sname=$data['sname'];
                $mobileno=$result2['mobileno'];
            }
            else if(isset ($_SESSION['seRid']))
            {
                $con = new mysqli("localhost", "root", "", "pratix") or die("Connection failed");
                
                
                $_SESSION['sesSid']=$_SESSION['seRid'];
                $sid=$_SESSION['seRid'];
                $sql = "SELECT secname,sphoto,sname FROM society WHERE sid='$sid' ";
                $result = mysqli_query($con, $sql);
                
                $sql2="SELECT * FROM registration WHERE rid='$sid'";
                $data2= mysqli_query($con, $sql2);
                $result2= mysqli_fetch_assoc($data2);

                
                $data = mysqli_fetch_assoc($result);
                $dsecname=$data['secname'];
                $sphoto=$data['sphoto'];
                $sname=$data['sname'];
                $mobileno=$result2['mobileno'];
            }
      ?>
      <div class="getup">
            <div class="wnavbar">
        <?php include './weatherSecretory.php'; ?>
            </div>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark db" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="SecretoryProfile.php">
                <span class="d-none sp d-lg-block"><img class="img-fluid prf img-profile rounded-circle mx-auto mb-2" src="<?php echo 'images//'.$sphoto ?>" alt="..." /><br><b><?php echo $dsecname; ?></b></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <?php include './SecretiryNavbar.php'; ?>
        </nav>
        </div>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                     
                    <h2>PAYMENTS</h2>
                  
                  <div class="table-responsive">
                    
                    <?php
                    $curdate= date("m");
                    $curyear=date("Y");
                        $query = "SELECT jid,cost,bhk,DAY(date) as day FROM m_maintenance WHERE sid='$sid' AND MONTH(m_maintenance.date)='$curdate' AND YEAR(m_maintenance.date)='$curyear' AND pon='T' ";
                        $result2 = mysqli_query($con, $query);
                        
                        if(mysqli_num_rows($result2)>0)
                        {
                                echo "<table id='recent-purchases-listing' class='table'>
                              <thead>
                                <tr>
                                    <th><b>PROFILE</th>
                                    <th><b>DAY</th>
                                    <th><b>NAME</th>
                                    <th><b>BHK</th>
                                    <th><b>COST</th>
                                </tr>
                              </thead>
                              <tbody>";
                                while ($data = mysqli_fetch_assoc($result2))
                                {
                                    $jid=$data['jid'];
                                    $sql2="SELECT fname,fphoto from jsociety WHERE sid='$sid' AND jid='$jid'";
                                    $result3= mysqli_query($con, $sql2);
                                    if($stmt= mysqli_fetch_assoc($result3))
                                    {
                                        $fname=$stmt['fname'];
                                        echo "<tr><td><img src='images//".$stmt['fphoto']."'><td>" . $data['day'] . "<td>" . $fname . "<td>" . $data['bhk']."<td>".$data['cost']."</tr>" ;
                                    }
                                }
                                echo '</table>';
                        }
                        else
                        {
                            echo "<br><p class='card-title'>No member has pay yet !</p>";
                        }
                    ?>
                  </div>
                  </form>
                      <br><br>
                       <h2>PENDING</h2>
                       
                       <form method="GET" action='updatePayments.php'>
                           
                       <table id='recent-purchases-listing' class='table'>
                 <?php
            
                 $sql4="SELECT * FROM maintenance WHERE MONTH(enddate)=MONTH(CURDATE()) AND YEAR(enddate)=YEAR(CURDATE()) AND sid='$sid'";
                 $data4= mysqli_query($con, $sql4);
                 
                 if(mysqli_num_rows($data4)==0)
                 {
                     die('<br><p class="card-title">Maintenance is not set yet !</p>');
                 }
                 
                 
                 $sql5="SELECT * FROM m_maintenance WHERE sid='$sid' AND MONTH(date)=MONTH(CURDATE()) AND YEAR(date)=YEAR(CURDATE())";
                 $data5= mysqli_query($con, $sql5);
                 
                 $sql2="SELECT jsociety.jid,fname,jsociety.bhk,fphoto FROM jsociety,m_maintenance WHERE m_maintenance.sid='$sid' AND m_maintenance.sid=jsociety.sid AND MONTH(date)=MONTH(CURDATE()) AND YEAR(date)=YEAR(CURDATE()) AND NOT jsociety.jid=m_maintenance.jid";
                $data2= mysqli_query($con, $sql2);
                 
                 if(mysqli_num_rows($data5)==0)
                 {
                 
                $sql3="SELECT * FROM jsociety WHERE sid='$sid' ";
                $data3= mysqli_query($con, $sql3);
                
                if(mysqli_num_rows($data3)==0)
                {
                    echo '<br>No pending';
                }
                else if(mysqli_num_rows($data3)>0)
                {
                  echo "<table id='recent-purchases-listing' class='table'>
                              <thead>
                                <tr>
                                    <th><b>PROFILE</th>
                                    <th><b>NAME</th>
                                    <th><b>BHK</th>
                                    <th><b>PENDING</th>
                                    <th><b>PAID</th>
                                    <th><b>NOTIFY</th>
                                </tr>
                              </thead>";
                    while($r= mysqli_fetch_assoc($data3))
                    {
                        $ujid=$r['jid'];
                        $fname=$r['fname'];
                        $bhk=$r['bhk'];
                        echo "<tr><td>".$r['fphoto']."<td>".$fname."<td>".$bhk."<td><a class='btn btn-primary' href='updatePayments.php?ujid=".$ujid."'>PENDING</a><td><a class='btn btn-primary' href='updatePayment.php?ujid=".$ujid."'>PAID</a><td><a class='btn btn-danger' href='notification.php?jid=".$ujid."'>NOTIFY</a></tr>";
                    }
                }
                
                }
                else
                {
                    echo "<table id='recent-purchases-listing' class='table'>
                              <thead>
                                <tr>
                                    <th><b>PROFILE</th>
                                    <th><b>NAME</th>
                                    <th><b>BHK</th>
                                    <th><b>PENDING</th>
                                    <th><b>PAID</th>
                                    <th><b>NOTIFY</th>
                                </tr>
                              </thead>";
                    while($r= mysqli_fetch_assoc($data2))
                    {
                        $ujid=$r['jid'];
                        $fname=$r['fname'];
                        $bhk=$r['bhk'];
                        echo "<tr><td>".$r['fphoto']."<td>".$fname."<td>".$bhk."<td><a class='bn' href='updatePayments.php?ujid=".$ujid."'><img src='Wrong.png' class='pstatus'></a><td><a class='bn' href='updatePayment.php?ujid=".$ujid."'><img src='Right.png' class='pstatus'></a><td><a class='btn btn-danger' href='notification.php?jid=".$ujid."'>NOTIFY</a></tr>";
                    }
//                else 
//                {
//                    echo "<br><p class='card-title'>No members in society !</p>";
//                }
                 }
//                 else
//                 {
//                     $sql6="SELECT jsociety.jid,fname,jsociety.bhk FROM jsociety,m_maintenance WHERE m_maintenance.sid=jsociety.sid AND m_maintenance.sid='$sid' AND MONTH(date)=MONTH(CURDATE()) AND YEAR(date)=YEAR(CURDATE()) AND NOT jsociety.jid=m_maintenance.jid AND NOT pon='T'";
//                     $data6= mysqli_query($con, $sql6);
//                     
//                     echo "<table id='recent-purchases-listing' class='table'>
//                              <thead>
//                                <tr>
//                                    <th><b>NAME</th>
//                                    <th><b>BHK</th>
//                                    <th><b>PENDING</th>
//                                    <th><b>PAID</th>
//                                    <th><b>NOTIFY</th>
//                                </tr>
//                              </thead>";
//                    while($r= mysqli_fetch_assoc($data6))
//                    {
//                        $ujid=$r['jid'];
//                        $fname=$r['fname'];
//                        $bhk=$r['bhk'];
//                        echo "<tr><td>".$fname."<td>".$bhk."<td><a class='btn btn-danger' href='updatePayments.php?ujid=".$ujid."'>PENDING</a><td><a class='btn btn-primary' href='updatePayment.php?ujid=".$ujid."'>PAID</a><td><a class='btn btn-warning' href='notification.php?jid=".$ujid."'>NOTIFY</a></tr>";
//                    }
//                     
//                 }
                
                
                    ?>
                    </table>
                       </form>
                      </tbody>
                    </table>
                    <a target="_blank" href="https://wa.me/91<?php echo $mobileno; ?>"><img src="https://docs.smooch.io/images/channel-header-logos/logo_whatsapp.png" class="whatsapp" title="Open whatsapp chat" alt="Whatsapp chat"></a>
                </div>
                
            </section>
        
       
            
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
