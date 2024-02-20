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
            
            .hidden{
                display: none;
            }
            
            .mbhk{
                border: none;
                height: 40px;
                margin-left: 30px;
                width: 30px;
                 background-color: #0d6efd;
                 color: white;
                  
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
                transition: placeholder 1s;
            }
            
            #txt1,#txt2,#txt3,#txt4,#txt5,#txt6{
                color: red;
                margin-left: 0px;
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
                 
            }
            
            .bn2{
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
                margin-top: 30px;
                 
            }
            
            .getright{
                right: 70px;
                position: fixed;
                top: 80px;
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
            
            .prf{
                transition: transform .2s;
            }
            .prf:hover{
                transform: scale(1.2);
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            $(document).ready(function()
            {
               $("#txt1").hide(); 
               $("#txt2").hide(); 
               $("#txt3").hide(); 
               $("#txt4").hide(); 
               $("#txt5").hide(); 
               $("#txt6").hide(); 
               
               $(".bn").hide();

                
                $(".mbhk").click(function()
                {
                    $(".bn").show();
                    $("#txt6").show();
                });


               $("#textbox1").focus(function(){
                   $("#txt1").show();
               });
               $("#textbox2").focus(function(){
                   $("#txt2").show();
               });
               $("#textbox3").focus(function(){
                   $("#txt3").show();
               });
               $("#textbox4").focus(function(){
                   $("#txt4").show();
               });
               $("#textbox5").focus(function(){
                   $("#txt5").show();
               });
               
               
               var d=1;
               $("#viewmaintenance").hide();
            $("#view").click(function() 
            {
                if(d===1){
                    $("#viewmaintenance").show();
                    d=0;
                }
                else{
                    $("#viewmaintenance").hide();
                    d=1;                
                }
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
        <nav class="navbar navbar-expand-lg navbar-dark db fixed-top" id="sideNav">
            <a class="navbar-brand sp js-scroll-trigger" href="SecretoryProfile.php">
                <span class="d-none sp d-lg-block"><img class="img-fluid img-profile prf rounded-circle mx-auto mb-2" src="<?php echo 'images//'.$sphoto ?>" alt="..." /><br><b><?php echo $dsecname; ?></b></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <?php include './SecretiryNavbar.php';  ?>
        </nav>
        
       
        
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <h2>MAINTENANCE ENTRY</h2>
                        <br><br>
                        <?php
                        
                        if(isset($_POST['t1']))
                        {
                            $t1=$_POST['t1'];
                        }
                        ?>
                    
                    <!--First form for maximum BHK selection-->
                        <h4>Maximum BHK</h4>
                            <button onclick="showTextbox(1)" class="mbhk" name="t1"> 1</button>
                            <button onclick="showTextbox(2)" class="mbhk" name="t1"> 2</button>
                            <button onclick="showTextbox(3)" class="mbhk" name="t1"> 3</button>
                            <button onclick="showTextbox(4)" class="mbhk" name="t1"> 4</button>
                            <button onclick="showTextbox(5)" class="mbhk" name="t1"> 5</button>
                                            
                </div>
        </div>
        </div>           
                <div class="getright">
   
                    <!--Second form for cost of each BHK-->
                    
                    <?php
                    $sql="SELECT * FROM maintenance WHERE MONTH(enddate)=MONTH(CURDATE()) AND YEAR(enddate)=YEAR(CURDATE()) AND sid='$sid'";
                    $data= mysqli_query($con, $sql);
                    if(mysqli_num_rows($data)===0)
                    {
                        echo   '<form method="POST">
                        <div id="textboxContainer">
                            <input type="text" id="textbox1" class="hidden tbox" placeholder="1 bhk cost" oninput="validateNumericInput(this)" name="1"><br><font id="txt1">*Only number can include</font>
                            <br>
                            <input type="text" id="textbox2" class="hidden tbox" placeholder="2 bhk cost" oninput="validateNumericInput(this)" name="2"><br><font id="txt2">*Only number can include</font>
                            <br>
                            <input type="text" id="textbox3" class="hidden tbox" placeholder="3 bhk cost" oninput="validateNumericInput(this)" name="3"><br><font id="txt3">*Only number can include</font>
                            <br>
                            <input type="text" id="textbox4" class="hidden tbox" placeholder="4 bhk cost" oninput="validateNumericInput(this)" name="4"><br>
                            <font id="txt4">*Only number can include</font>
                            <br>
                            <input type="text" id="textbox5" class="hidden tbox" placeholder="5 bhk cost" oninput="validateNumericInput(this)" name="5"><br>
                            <font id="txt5">*Only number can include</font>
                            
                            <br>
                            <input type="date" id="textbox6" class="hidden tbox" placeholder="Last date" name="date"                                    min='.date('Y-m-d').' required><br>
                            <font id="txt6">*Select appropriate date</font>
                            
                            <input type="hidden" name="gmbhk" value="<?php echo $t1; ?>"/>
                        
                            <br>
                            <input type="submit" name="submit" class="bn" value="Set">
                            </div>
                        </form>';
                        
        
                    }
                    else{
                        if($row= mysqli_fetch_assoc($data))
                        {
                        echo '<form method="POST">';
                        if(!empty($row['cost1']))
                        {
                            echo '<input type="text" id="textbox1" class="tbox" name="1"><br><font id="txt1">*Only number can include</font><br>';
                        }
                        if(!empty($row['cost2']))
                        {
                            echo '<input type="text" id="textbox2" class="tbox" name="2"><br><font id="txt2">*Only number can include</font><br>';
                            
                        }
                        if(!empty($row['cost3']))
                        {
                            echo '<input type="text" id="textbox3" class="tbox" name="3"><br><font id="txt3">*Only number can include</font><br>';
                        }
                        if(!empty($row['cost4']))
                        {
                            echo '<input type="text" id="textbox4" class="tbox" name="4"><br><font id="txt4">*Only number can include</font><br>';
                        }
                         if(!empty($row['cost5']))
                        {
                            echo '<input type="text" id="textbox5" class="tbox" name="5"><br><font id="txt5">*Only number can include</font><br>';
                        }
                        
                          echo  '<input type="date" id="textbox6" class="tbox" placeholder="Last date" name="date"                                    value='.$row['enddate'].' min='. date("Y-m-d").'>
                            <p id="txt6">*Select appropriate date</p>
                            <br>
                            <input type="submit" class="bn2" name="update" value="Update">
                        </div>';
                          
                          require_once './Maintenance_Script.php';
                        echo '</form>';
                          
                        }
                    }
                        ?>
                        <script>
                            
                            function validateNumericInput(input) {
            // Remove non-numeric characters using a regular expression
            input.value = input.value.replace(/[^0-9]/g, '');
        }
                            
        function showTextbox(number) {
            // Hide all textboxes
            for (var i = 1; i <= 5; i++) {
                document.getElementById('textbox' + i ).classList.add('hidden');
            }

            // Show the selected textbox
//            document.getElementById('textbox' + number).classList.remove('hidden');
        
            for (var i = 1; i <= number; i++) {
                document.getElementById('textbox' + i ).classList.remove('hidden');
            }
            
            $("#textbox6").show();
    }
    </script>
                        
                        <br><br>
                         <?php
                        if(isset($_POST['update']))
                        {
                             $con=new mysqli("localhost","root","","pratix") or die("Connection failed!");
                             $sid=$_SESSION['sesSid'];
                             
                             
                            $ocost=$_POST['1'];
                            $tcost=@$_POST['2'];
                            $thcost=@$_POST['3'];
                            $fcost=@$_POST['4'];
                            $ficost=@$_POST['5'];
                            $enddate=$_POST['date'];

                            if(empty($tcost))
                            {
                                $mbhk=1;
                            }
                            else if(empty ($thcost))
                            {
                                $mbhk=2;
                            }
                            else if(empty ($fcost))
                            {
                                $mbhk=3;
                            }
                            else if(empty ($ficost))
                            {
                                $mbhk=4;
                            }
                            else
                            {
                                $mbhk=5;
                            }
                                                        
                            
                            
                            if($mbhk==1)
                            {
                                if(preg_match("/^[0-9]{1,8}$/", $ocost))
                                {
                                   
                                    $sql="UPDATE maintenance SET cost1='$ocost',enddate='$enddate' WHERE MONTH(enddate)=MONTH(CURDATE()) AND YEAR(enddate)=YEAR(CURDATE()) AND sid='$sid'";
                                    $data2= mysqli_query($con, $sql);
                                    echo '<script>window.location.href="MaintenanceEntry.php"</script>';
                                    $updated="<div class='alert alert-info' role='alert'>*Maintenance updated successfully !
</div>";
                                }
                            }
                            if($mbhk==2)
                            {
                                if(preg_match("/^[0-9]{1,8}$/", $ocost))
                                {
                                    if(preg_match("/^[0-9]{1,8}$/", $tcost))
                                    {
                                        $sql="UPDATE maintenance SET cost1='$ocost',cost2='$tcost',enddate='$enddate' WHERE MONTH(enddate)=MONTH(CURDATE()) AND YEAR(enddate)=YEAR(CURDATE()) AND sid='$sid'";
                                        $data2= mysqli_query($con, $sql);
                                        echo '<script>window.location.href="MaintenanceEntry.php"</script>';
                                        $updated="<div class='alert alert-info' role='alert'>*Maintenance updated successfully !
</div>";
                                    }
                                }
                            }
                            if($mbhk==3)
                            {
                                if(preg_match("/^[0-9]{1,8}$/", $ocost))
                                {
                                    if(preg_match("/^[0-9]{1,8}$/", $tcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $thcost))
                                    {
                                        $sql="UPDATE maintenance SET cost1='$ocost',cost2='$tcost',cost3='$thcost', enddate='$enddate' WHERE MONTH(enddate)=MONTH(CURDATE()) AND YEAR(enddate)=YEAR(CURDATE()) AND sid='$sid'";
                                        $data2= mysqli_query($con, $sql);
                                        echo '<script>window.location.href="MaintenanceEntry.php"</script>';
                                         $updated="<div class='alert alert-info' role='alert'>*Maintenance updated successfully !
</div>";
                                    }
                                    }
                                }
                            }
                            if($mbhk==4)
                            {
                                if(preg_match("/^[0-9]{1,8}$/", $ocost))
                                {
                                    if(preg_match("/^[0-9]{1,8}$/", $tcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $thcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $fcost))
                                    {
                                       $sql="UPDATE maintenance SET cost1='$ocost',cost2='$tcost',cost3='$thcost',cost4='$fcost',enddate='$enddate' WHERE MONTH(enddate)=MONTH(CURDATE()) AND YEAR(enddate)=YEAR(CURDATE()) AND sid='$sid'";
                                        $data2= mysqli_query($con, $sql);
                                        echo '<script>window.location.href="MaintenanceEntry.php"</script>';
                                        $updated="<div class='alert alert-info' role='alert'>*Maintenance updated successfully !
</div>";
                                    }
                                    }
                                    }
                                }
                            }
                            if($mbhk==5)
                            {
                                if(preg_match("/^[0-9]{1,8}$/", $ocost))
                                {
                                    if(preg_match("/^[0-9]{1,8}$/", $tcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $thcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $fcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $ficost))
                                    {
                                        $sql="UPDATE maintenance SET cost1='$ocost',cost2='$tcost',cost3='$thcost',cost4='$fcost',cost5='$ficost',enddate='$enddate' WHERE MONTH(enddate)=MONTH(CURDATE()) AND YEAR(enddate)=YEAR(CURDATE()) AND sid='$sid'";
                                        $data2= mysqli_query($con, $sql);
                                        echo '<script>window.location.href="MaintenanceEntry.php"</script>';
                                         $updated="<div class='alert alert-info' role='alert'>*Maintenance updated successfully !
</div>";
                                    }
                                    }
                                    }
                                    }
                                }
                            }       
                       }
                        ?>
                        
                        
                        
                        
                        <!--Update maintenance code-->
                        <?php  
                         
                        if(isset($_POST['submit']))
                        {
                             $con=new mysqli("localhost","root","","pratix") or die("Connection failed!");
                             $sid=$_SESSION['sesSid'];
                             
                             
                            $ocost=$_POST['1'];
                            $tcost=@$_POST['2'];
                            $thcost=@$_POST['3'];
                            $fcost=@$_POST['4'];
                            $ficost=@$_POST['5'];
                            $enddate=$_POST['date'];

                            if(empty($tcost))
                            {
                                $mbhk=1;
                            }
                            else if(empty ($thcost))
                            {
                                $mbhk=2;
                            }
                            else if(empty ($fcost))
                            {
                                $mbhk=3;
                            }
                            else if(empty ($ficost))
                            {
                                $mbhk=4;
                            }
                            else
                            {
                                $mbhk=5;
                            }
                                                        
                            
                            
                            if($mbhk==1)
                            {
                                if(preg_match("/^[0-9]{1,8}$/", $ocost))
                                {
                                   
                                    $sql="INSERT INTO maintenance(sid,enddate,cost1,cost2,cost3,cost4,cost5) VALUES(?,?,?,?,?,?,?)";

                                    if($stmt=$con->prepare($sql))
                                    {
                                        $stmt->bind_param("isiiiii",$sid,$enddate,$ocost,$tcost,$thcost,$fcost,$ficost);
                                        $stmt->execute();
                                        $added="<div class='alert alert-info' role='alert'>*Maintenance added successfully !
</div>";
                                        echo '<script>window.location.href="MaintenanceEntry.php"</script>';
                                    }
                                    else
                                    {
                                        die("Error in query !");
                                    }
                                }
                            }
                            if($mbhk==2)
                            {
                                if(preg_match("/^[0-9]{1,8}$/", $ocost))
                                {
                                    if(preg_match("/^[0-9]{1,8}$/", $tcost))
                                    {
                                        $con=new mysqli("localhost","root","","pratix") or die("Connection failed!");
                                        $sid=$_SESSION['sesSid'];
                                        $sql="INSERT INTO maintenance(sid,enddate,cost1,cost2,cost3,cost4,cost5) VALUES(?,?,?,?,?,?,?)";

                                        if($stmt=$con->prepare($sql))
                                        {
                                            $stmt->bind_param("isiiiii",$sid,$enddate,$ocost,$tcost,$thcost,$fcost,$ficost);
                                            $stmt->execute();
                                            $added="<div class='alert alert-info' role='alert'>*Maintenance added successfully !</div>";
                                            
                                            echo '<script>window.location.href="MaintenanceEntry.php"</script>';
                                        }
                                        else
                                        {
                                            die("Error in query !");
                                        }
                                    }
                                }
                            }
                            if($mbhk==3)
                            {
                                if(preg_match("/^[0-9]{1,8}$/", $ocost))
                                {
                                    if(preg_match("/^[0-9]{1,8}$/", $tcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $thcost))
                                    {
                                        $con=new mysqli("localhost","root","","pratix") or die("Connection failed!");
                                        $sid=$_SESSION['sesSid'];
                                        $sql="INSERT INTO maintenance(sid,enddate,cost1,cost2,cost3,cost4,cost5) VALUES(?,?,?,?,?,?,?)";

                                        if($stmt=$con->prepare($sql))
                                        {
                                            $stmt->bind_param("isiiiii",$sid,$enddate,$ocost,$tcost,$thcost,$fcost,$ficost);
                                            $stmt->execute();
                                            $added="<div class='alert alert-info mt-3' role='alert'>*Maintenance added successfully !
</div>";
                                            
                                            echo '<script>window.location.href="MaintenanceEntry.php"</script>';
                                        }
                                        else
                                        {
                                            die("Error in query !");
                                        }
                                    }
                                    }
                                }
                            }
                            if($mbhk==4)
                            {
                                if(preg_match("/^[0-9]{1,8}$/", $ocost))
                                {
                                    if(preg_match("/^[0-9]{1,8}$/", $tcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $thcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $fcost))
                                    {
                                       $con=new mysqli("localhost","root","","pratix") or die("Connection failed!");
                                        $sid=$_SESSION['sesSid'];
                                        $sql="INSERT INTO maintenance(sid,enddate,cost1,cost2,cost3,cost4,cost5) VALUES(?,?,?,?,?,?,?)";

                                        if($stmt=$con->prepare($sql))
                                        {
                                            $stmt->bind_param("isiiiii",$sid,$enddate,$ocost,$tcost,$thcost,$fcost,$ficost);
                                            $stmt->execute();
                                            $added="<div class='alert alert-info mt-3' role='alert'>*Maintenance added successfully !
</div>";
                                            
                                            echo '<script>window.location.href="MaintenanceEntry.php"</script>';
                                        }
                                        else
                                        {
                                            die("Error in query !");
                                        }
                                    }
                                    }
                                    }
                                }
                            }
                            if($mbhk==5)
                            {
                                if(preg_match("/^[0-9]{1,8}$/", $ocost))
                                {
                                    if(preg_match("/^[0-9]{1,8}$/", $tcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $thcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $fcost))
                                    {
                                    if(preg_match("/^[0-9]{1,8}$/", $ficost))
                                    {
                                        $con=new mysqli("localhost","root","","pratix") or die("Connection failed!");
                                        $sid=$_SESSION['sesSid'];
                                        $sql="INSERT INTO maintenance(sid,enddate,cost1,cost2,cost3,cost4,cost5) VALUES(?,?,?,?,?,?,?)";

                                        if($stmt=$con->prepare($sql))
                                        {
                                            $stmt->bind_param("isiiiii",$sid,$enddate,$ocost,$tcost,$thcost,$fcost,$ficost);
                                            $stmt->execute();
                                            $added="<div class='alert alert-info' role='alert'>*Maintenance added successfully !
</div>";
                                            
                                        echo '<script>window.location.href="MaintenanceEntry.php"</script>';
                                        }
                                        else
                                        {
                                            die("Error in query !");
                                        }
                                    }
                                    }
                                    }
                                    }
                                }
                            }       
                       }
                        ?>
                        
                        
                        <?php
                        if(!empty($added))
                        {
                            echo $added;
                        }
                        if(isset($_POST['update']))
                        {
                            echo $updated;
                        }
                        ?>
                    
                        
                     
                    </div>
            </section>
        </div>
                    <a target="_blank" href="https://wa.me/91<?php echo $mobileno; ?>"><img src="https://docs.smooch.io/images/channel-header-logos/logo_whatsapp.png" class="whatsapp" title="Open whatsapp chat" alt="Whatsapp chat"></a>
                </div>
                
            
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
