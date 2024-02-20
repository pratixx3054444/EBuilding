<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .dispimg{
                height: 100px;
                width: 100px;
            }
            
            font{
                color: red;
            }
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
                margin: 10px;
                font-size: 23px;
                color: black;
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
            
            
            input[type="file"]{
                display: none;
            }
            
            .updateimg{
                color: black;
                height: 50px;
                width: 170px;
                background-color: #0d6efd;
                font-size: 18px;
                border-radius: 5px;
                align-items: center;
                top: 65%;
                right: 19%;
                position: fixed;
                display: flex;
                justify-content: center;
                margin-top: 10px;
                cursor: pointer;
                box-shadow: 0 .2rem .4rem #0005;    
            }
                        
            label:active{
                transform: scale(0.9);
            }
            
            .custom-error{
                position: fixed;
                margin-left: 10%;
                top: 30%;
                height: 230px;
                width: 400px;
                box-shadow: 0 .2rem .4rem #0005;   
                background-color: #dfe1e5;
            }
            
            .speech{
                margin-left: 160px; 
            }
            
            
            .custom-error button{
                margin-left: 10px;
            }
            
            .mic{
                font-size: 50px;
                width: 80px;
                background-color: #454545;
                padding-top: 5px;
                padding-left: 15px;
                color: #eb9447;
                border-radius: 90px;
                box-shadow: 0 .2rem .4rem #0005;
                position: fixed;
                top: 290px;
            }
            
            .close{
                top: 30.9%;
                left: 820px;
                position: fixed;
                cursor: pointer;
                box-shadow: 0 .2rem .4rem #0005;
                background-color: red;
                color: white;
            }
            
            .bn{
                border: none;
                padding: 24px;
                width: 160px;
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
                 
                outline: none;
            }
            
            .bn2{
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
            
            #datetext{
                position: fixed;
                top: 41%;
                right: 30%;
            }
            
            #date{
                position: fixed;
                top: 46%;
                right: 5.5%;
            }
            
            #etext{
                position: fixed;
                top: 60%;
                right: 26%;
            }
            
            .fun{
                height: 50px;
                width: 150px;
                background-color: #dfe1e5;
                border: none;
                text-align: center;
                padding-top: 15px;
                color: black;
                 
                cursor: pointer;
                font-weight: bold;
            }
            
            .pri{
                height: 50px;
                width: 150px;
                background-color: #dfe1e5;
                border: none;
                text-align: center;
                padding-top: 15px;
                color: black;
                 
                cursor: pointer;
                font-weight: bold;
                margin-left: 20px;
            }
            
            .upfun{
                height: 50px;
                width: 150px;
                background-color: green;
                border: none;
                text-align: center;
                padding-top: 15px;
                color: black;
                 
                cursor: pointer;
                font-weight: bold;
            }
            </style>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        	<script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script>
	$(document).ready(function()
	{
            $("#delete").click(function()
            {
                confirm("Are sure you want to delete the member !");
            });
            $("#year").change(function()
            {
                $("#month").change(function(){
                var y=$("#year").val();
                var m=$("#month").val();
                $.ajax({
                    type:"POST",
                    url:"ViewHistoryAJAX.php",
                    data:{'y':y,'m':m},
                    beforeSend: function() {
                        console.log("before send");
                    },
                    success:function(res){
                        var res=res;
                        $("#data").html(res);
                    },
                    complete: function () {
                        console.log("complete");
                    }
                    });
                });
        });
    });
    </script>
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

            <script src="script.js"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-Building</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="icon" type="image/x-icon" href="images/E-Building_image.jpg" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
         
        <?php
            
            
        if(isset ($_SESSION['seRid']))
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
                <span class="d-none sp d-lg-block"><img class="img-fluid prf img-profile rounded-circle mb-2" src="<?php echo 'images//'.$sphoto ?>" alt="..." /><br><b><?php echo $dsecname; ?></b></span>
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
                <h2>HISTORY</h2>
                <div class="resume-section-content">
                    <form method="POST">
                  <div class="table-responsive">
                    
                      <div class="form-group">
                      <select id="year" class="bn2"><option value="Select">Year</option>
                        <?php
                        $m=2023;
                        $cm= date("Y");
                        while($m<=$cm)
                        {
                            echo "<option value=$m>$m</option>";
                            $m=$m+1;
                        }
                        ?>
                      </select>
                      &emsp;
                      <select id="month" class="bn">
                          <option value="S">Month
                          <option value="1">January
                          <option value="2">February
                          <option value="3">March
                          <option value="4">April
                          <option value="5">May
                          <option value="6">June
                          <option value="7">July
                          <option value="8">August
                          <option value="9">September
                          <option value="10">October
                          <option value="11">November
                          <option value="12">December
                      </select>                       
                      </tbody>
                    </table>
                    <br><br>
                    <div id="data"></div>
                  </div>
                 </form>
                    <a target="_blank" href="https://wa.me/91<?php echo $mobileno; ?>"><img src="https://docs.smooch.io/images/channel-header-logos/logo_whatsapp.png" class="whatsapp" title="Open whatsapp chat" alt="Whatsapp chat"></a>
              
                              </section>
                  </div>
                 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
