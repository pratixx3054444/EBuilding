<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            a{
                color: black;
            }
            
            .nav-link{
                background-color: white;
                color: black;
                margin-top: 5px;
                border-radius: 5px;
                border: none;
                margin-bottom: 7px;
            }
            
            .bn{
                border: none;
                padding: 24px;
                width: 120px;
                height: 60px;
                padding: 20px;
                color: white;
                font-family: "montserrat",sans-serif;
                text-transform: uppercase;
                border-radius: 6px;
                cursor: pointer;
                background-size: 200%;
                font-weight: bold;
                margin-left: 10px;
                background-color: #0d6efd;
                margin-top: 30px;
                 
                text-decoration: none;
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
                width: 0;
                height: 0;
                display: none;
            }
            
            .sclbar{
                overflow-x: auto;
            }
            
            .sclbar::-webkit-scrollbar {
                width: 0;
                height: 0;
                display: none;
            }
            
            table, td, th{
                padding: 1rem;
            }
            
            main.table{
                width: 80vw;
                height: 90vh;
                background-color: #454545;
                color: white;
                box-shadow: 0 .4rem .8rem #0005;
                backdrop-filter:blur(6px);
                overflow-x: auto;
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
                margin-left: 30px;
                margin-top: 20px;
            }
            
            .temprature{
                font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-size: 25px;
            }
            
            .getup{
                overflow: auto;
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
            window.onunload()=function(){null;}
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>    
         <script>
            $(document).ready(function()
            {
                history.pushState(null, null, location.href);
                window.onpopstate = function () {
                    history.go(1);
                };
            });
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
                     <h2 class="mb-0">
                    <img src="./images/E-Building_image.jpg" alt="Application Logo" height="100px" width="100px"/>
                    <span class="text"><?php echo $sname; ?></span>
                    </h2>
                    <div class="resume-section-content">
                    <form method="POST">
                  <div class="table-responsive">
                      <div class="form-group">
                    <br>
                    <br><h3>Member details</h3>
                    <?php
                        $con = new mysqli("localhost", "root", "", "pratix") or die("Connection failed !");

                        $query = "SELECT * FROM jsociety WHERE sid='$sid'";
                        $result2 = mysqli_query($con, $query);
                                               
                       
                        if(mysqli_num_rows($result2)>0)
                        {
                                echo "<table class='sclbar'>
                                <tr>
                                    <th><t5>PROFILE</t5>
                                    <th><t5>FULL NAME</t5>
                                    <th><t5>EMAIL</t5>
                                    <th><t5>FLAT NO.</t5>
                                    <th><t5>FLOOR</t5>
                                    <th><t5>BUILDING NO.</t5>
                                    <th><t5>REMOVE</t5>
                                </tr>
                              </thead>
                              <tbody class='table_body'>";
                                $i=1;
                                while ($data = mysqli_fetch_assoc($result2))
                                {
                                    
                                    echo "<tr><td><img height='100px' width='100px' src='images//".$data['fphoto']."' ><td><b>" . $data['fname'] . "<td><b>" . $data['email'] . "<td><b>" . $data['flat_number'] . "<td><b>" . $data['floor_number']
                                    . "<td><b>" . $data['building_number'] . "<td><a href='deleteMember.php?jid=".$data['jid']."' class='bn'>Remove</a> </tr>";
                                    $i++;
                                }
                        }
                        else
                        {
                            echo "<br><p class='card-title'>No member join society !</p>";
                        }
                    ?>
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
