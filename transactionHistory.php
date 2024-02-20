<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
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
        <style>
            .pdf{
                height: 40px;
                width: 40px;
                padding: 5px;
                font-size: 30px;
                background-color: #0d6efd;
                color: white;
                 
                cursor: pointer;
                border-radius: 5px;
            }
            
            .tbox{
                margin-top: 10px;
                width: 350px;
                height: 40px;
                border-left: 1px solid #0d6efd;
                border-radius: 3px;
                padding: 10px;
                border-right: 1px solid #0d6efd;
                border-top: 1px solid #0d6efd;
                border-bottom-color: #0d6efd;
                outline: none;
                border: 1px solid #ced4da;
                 box-shadow: 3px 3px 4px rgba(0,0,0,.5);
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
            
            .tbox{
                margin-top: 10px;
                width: 350px;
                height: 40px;
                border-left: 1px solid #0d6efd;
                border-radius: 3px;
                padding: 10px;
                border-right: 1px solid #0d6efd;
                border-top: 1px solid #0d6efd;
                border-bottom-color: #0d6efd;
                outline: none;
                border: 1px solid #ced4da;
                 box-shadow: 3px 3px 4px rgba(0,0,0,.5);
            }
            
            .tarea{
                margin-top: 10px;
                width: 550px;
                height: 100px;
                border-left: 1px solid #0d6efd;
                border-radius: 3px;
                padding: 10px;
                border-right: 1px solid #0d6efd;
                border-top: 1px solid #0d6efd;
                border-bottom-color: #0d6efd;
                outline: none;
                border: 1px solid #ced4da;
                 box-shadow: 3px 3px 4px rgba(0,0,0,.5);
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
            
            .bn{
                outline: none;
                border: none;
                padding: 24px;
                width: 125px;
                height: 60px;
                padding: 20px;
                color: white;
                font-family: "montserrat",sans-serif;
                text-transform: uppercase;
                border-radius: 6px;
                cursor: pointer;
                background-size: 200%;
                font-weight: bold;
                background-color: #0d6efd;
                margin-right: 20px;
                margin-top: 0px;
                 
            }
            
            .whatsapp{
                right: 10px;
                position: fixed;
                bottom: 10px;
                height: 70px;
                width: 70px;
            }
            
                .prf{
                    transition: transform .2s;
                }
                .prf:hover{
                    transform: scale(1.2);
                }
            .weather{
                border-radius: 25px;
                height: 50px;
                width: 50px;
                margin-left: 10px;
                margin-top: 0px;
            }
            
            .notif{
                font-size: 30px;
                margin-top: 20px;
                cursor: pointer;
            }
            
            .box{
                margin-left: 600px;
                background-color: #dfe1e5;
                padding: 20px;
                width: 300px;
                height: 300px;
                overflow-x: auto;
            }
            
            .updateimg{
                color: black;
                height: 50px;
                width: 170px;
                background-color: #dfe1e5;
                font-size: 18px;
                border-radius: 5px;
                align-items: center;
                display: flex;
                justify-content: center;
                margin-top: 10px;
                cursor: pointer;
                box-shadow: 0 .2rem .4rem #0005;
            }
            
            input[type="file"]{
                display: none;
            }
            
            label:active{
                transform: scale(0.9);
            }
            
            .heading{
                height: 30px;
                margin-left: 10px;
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>    
         <script>
            $(document).ready(function()
            {
                var status=true;
                $(".box").hide();
               $(".notif").click(function()
               {
                   if(status===true){
                        $(".box").show();
                        status=false;
                    }
                    else{
                       $(".box").hide();
                        status=true; 
                    }
               });
            });
        </script>
    </head>
    <body id="page-top">
       <?php
            if(isset($_SESSION['seRid']))
            {
                $con = new mysqli("localhost", "root", "", "pratix") or die("Connection failed");
               
                $jid=$_SESSION['seRid'];
                
                $date=date("Y-m-d");
                
                $curdate=date("m");
                $curyear=date("Y");
                
                
                $sql="SELECT mobileno FROM registration WHERE rid='$jid'";
                $result= mysqli_query($con, $sql);
                $data= mysqli_fetch_assoc($result);
                $mobileno=$data['mobileno'];    
                
                $sql3="SELECT bhk,jsociety.sid,fname,fphoto FROM jsociety,society WHERE jid='$jid' AND jsociety.sid=society.sid";
                $result3 = mysqli_query($con, $sql3);
                $data3 = mysqli_fetch_assoc($result3);
                $bhk=$data3['bhk'];   
                $sid=$data3['sid'];
                $mname=$data3['fname'];
                $fphoto=$data3['fphoto'];
                
                $sql2="SELECT sname FROM society WHERE sid='$sid'";
                $result2 = mysqli_query($con, $sql2);
                $data2 = mysqli_fetch_assoc($result2);
                $sname=$data2['sname'];    

                
               
            }
            ?>
        
       
        <div class="getup">
            <div class="wnavbar">
        <?php include './weatherReport.php'; ?>
            </div>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark db" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="MemberProfile.php">
                <span class="d-none sp d-lg-block"><img class="img-fluid prf img-profile rounded-circle mb-2" src="<?php echo 'images//'.$fphoto ?>" alt="..." /><br><b><?php echo $mname; ?></b></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <?php include './MemberNavbar.php'; ?>
        </nav>
        </div>
       
      
        
        
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            
            
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h2>PAYMENT HISTORY</h2>
                    <br><br>
                    
                    <?php
                    $year= date("Y");
                    $month= date("m");
                     
                    $sql="SELECT DAY(date) as day,cost,m_mid FROM m_maintenance WHERE jid='$jid' AND YEAR(date)=YEAR(CURDATE())";
                    $data= mysqli_query($con, $sql);
                    
                   echo "<table class='table'>
                    <thead>
                      <tr>
                          <th><b>Date</th>
                          <th><b>Cost</th>
                          <th><b>PDF</th>                          
                      </tr>
                    </thead>
                    <tbody>";
                    while($row2= mysqli_fetch_assoc($data))
                    {
                        echo "<tr class='tch'><td>" . $row2['day'] . "<td> ".$row2['cost']."<td>"."<a target='_blank' href='generatePDF.php?mid=".$row2['m_mid']."'><span class='material-symbols-outlined'>
<p class='pdf'>description</p>
</span></a>"."</tr>";
                    }
                    ?>
                    </table>
                              </section>
                  </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
