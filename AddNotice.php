<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            font{
                color: red;
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
            
            .bn{
                border: none;
                padding: 24px;
                width: 100px;
                height: 50px;
                padding: 10px;
                color: white;
                font-family: "montserrat",sans-serif;
                text-transform: uppercase;
                border-radius: 6px;
                cursor: pointer;
                background-size: 200%;
                font-weight: bold;
                margin-left: 0px;
                background-color: #0d6efd;
                margin-top: 10px;
                 
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
            
            .data{
                position: fixed;
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
                top: 0;
                left: 0;
                right: 0;
                right: 0;
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
            
            h2{
                margin-left: 70px;
                position: fixed;
                top: 190px;
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
                background-color: #0d6efd;
                margin-right: 20px;
                margin-top: 0px;
                 
            }
            
            #submitbtn{
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
                background-color: #0d6efd;
                margin-right: 20px;
                margin-top: 0px;
                 
                position: fixed;
                bottom: 10px;
            }
            
            #submitback{
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
                background-color: #0d6efd;
                margin-right: 20px;
                margin-top: 0px;
                 
                position: fixed;
                bottom: 10px;
                left: 37.2%;
            }
            
            
            #action{
                margin-left: 137px;
                top: 370px;
                position: fixed;
            }
            </style>
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
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
             <script>
		function runSpeechRecognition() {
//                     console.log(sy);
                    var output = document.getElementById("description");
                    var action = document.getElementById("action");

                    var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                    var recognition = new SpeechRecognition();

                    recognition.onstart = function() {
                        action.innerHTML = "listening, please speak...";
                    };

                    recognition.onspeechend = function() {
                        action.innerHTML = "stopped listening, hope you are done...";
                        recognition.stop();
                    };

                    recognition.onresult = function(event) {
                        var transcript = event.results[0][0].transcript;
                        output.value =  transcript;
                        $(".custom-error").hide();
                        console.log(output.value);
                        $("#description").focus();
                    };

                     recognition.start();
                     document.getElementById("description").focus();
                     return ;
                    }
		</script>
	<script>
        $(document).ready(function()
        {
            
            $(".custom-error").hide();
            
              $("#option").show();
            $(".tarea").hide();
            
            $("#submitbtn").hide();
            $("#submitback").hide();
            
            $("#err_title").hide();
            $("#err_description").hide();
            
            
            
           $("#title").keyup(function()
           {
               $("#err_title").show();
                var title=$("#title").val();
                
                if(title.length>=2 && title.length<=15)
                {
                    $("#err_title").hide();
                }
           });
           
           $("#description").keyup(function()
           {
               $("#err_description").show();
                var title=$("#description").val();
                
                if(title.length>=2 && title.length<=300)
                {
                    $("#err_description").hide();
                }
           });
           
           
           $("#btntext").click(function()
           {
              $("#btntext").hide();
              $("#btnspeech").hide();
              
              $("#description").show();
              $("#submitbtn").show();
              $("#submitback").show();
              $("#option").hide();
           });
           
           $("#btnspeech").click(function()
           {
              $("#btnspeech").hide();
              $("#submitback").show();
              $(".custom-error").show();
              $("#description").show();
              $("#submitbtn").show();
              $("#btntext").hide();
              $("#option").hide();
           });
           
           $(".close").click(function()
           {
              $(".custom-error").hide();
               return ;
            });
            
            $("#submitback").click(function()
            {
               $("#btnspeech").show();
               $("#description").hide();
               $("#submitbtn").hide();
               $("#submitback").hide();
               $("#btntext").show();
               $("#option").show();
            });
        });
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
        <div class="container-fluid data">
            <!-- About-->
            
            
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                     <h1 class="card-title">NOTICE</h1>
                  <br>
                  <div class="table-responsive ">
                    
                      
                      <div class="custom-error">
                          <h2>Speech to text</h2>
                          <span class="material-symbols-outlined"><p class="close">close</p></span>
                          <span class="material-symbols-outlined speech"><p class="mic">mic</p></span>
                          <h6 id="action"></h6>
                      </div>
                      
                      
                    <?php
        
                    if(isset($_POST['submit']))
                    {
                        $curyear= date("Y") ;
                        $curmonth= date("m");
                        $curdate= date("d");

                        $sql2="SELECT * FROM noticeboard WHERE sid='$sid' AND YEAR(date)='$curyear' AND MONTH(date)='$curmonth' AND DAY(date)='$curdate'";
                        $data3= mysqli_query($con, $sql2);
                        if(mysqli_num_rows($data3)==0)
                        {
                            $title=$_POST['title'];
                            $description=$_POST['description'];

                            if(strlen($title)>=2 && strlen($title)<=15)
                            {
                                if(strlen($description) && strlen($description)<=300)
                                {
                                    $con = new mysqli("localhost", "root", "", "pratix") or die("Connection failed !");

                                    $sql2="INSERT INTO noticeboard(sid,title,description,date) VALUES(?,?,?,?)";

                                    if($stmt=$con->prepare($sql2))
                                    {
                                        $date= date("Y-m-d");
                                        $stmt->bind_param("isss",$sid,$title,$description,$date);
                                        $stmt->execute();
                                        $nset="<div class='alert alert-danger mt-3' role='alert'>*Notice set successfully!</div>";
                                    }
                                }
                            }
                        }
                        else
                        {
                            $err_set="<div class='alert alert-danger mt-3' role='alert'>*One notice can add in a day.
</div>";
                        }
                    }
                    ?>
                    
                    <form method="POST">
                        <h5>Title</h5>
                        <input type="text" class="tbox" id="title" name="title"><br>
                        <font id="err_title">*Contains 2-15 characters</font>
                        <br><br>
                        <h5>Description</h5>
                        <textarea  class="tbox tarea" id="description" name="description"></textarea><br>
                        <font id="err_description">*Contains 2-300 characters</font>
                        <br>
                        <?php
                        if(!empty($nset))
                        {
                            echo $nset;
                        }
                        ?>
                        <p style="color: black" id="option"><b>Choose any one</b></p>
                        <button class="bn"  id="btnspeech"type="button" onclick="runSpeechRecognition()">Speech</button>
                        <button class="bn" id="btntext" type="button">Text</button>
                        <br><br>
                        <input type="submit" name="submit" id="submitbtn" value="Submit">
                        <button type="button" name="submit" id="submitback">Back</button>
                        <br><br>
                        
                        <?php
                        if(isset($_POST['submit']))
                        {
                            if(!empty($err_set))
                            {
                                echo $err_set;
                            }
                        }
                        
                        ?>
                        
                    </form>
                      <a target="_blank" href="https://wa.me/91<?php echo $mobileno; ?>"><img src="https://docs.smooch.io/images/channel-header-logos/logo_whatsapp.png" class="whatsapp" title="Open whatsapp chat" alt="Whatsapp chat"></a>
                  </div>
                  
            </section>
            
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
