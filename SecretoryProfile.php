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
            
            .gimg{
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
                        
            label:active{
                transform: scale(0.9);
            }
            </style>
            <script src="script.js"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-Building</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
                <span class="d-none sp d-lg-block"><img class="img-fluid prf img-profile rounded-circle mx-auto gimg mb-2" src="<?php echo 'images//'.$sphoto ?>" alt="..." /><br><b><?php echo $dsecname; ?></b></span>
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
                     <?php
                      if(isset($_POST['submit']))
                      {
                        $err='';
                        $err2='';
                        $err3='';
                        $err4='';
                        
                        
                        //Function for password encryption
                        function passsword_enc($str,$iv)
                        {
                            $chipper="AES-128-CTR";
                            $key="password$$%%&&@@##**";
                            $options=0;
                            //$iv=1234567891234567;

                            $str=openssl_encrypt($str, $chipper, $key, $options, $iv);
                            return $str;
                        }
                        
                        
                        $rid=$_SESSION['seRid'];
                        $password= md5($_POST['password']);
                        $sname=$_POST['secname'];
                        $uphoto=$_FILES['sphoto']['name'];
                        $tmp_name=$_FILES['sphoto']['tmp_name'];
                        $size=$_FILES['sphoto']['size'];
                        $extension=array('png', 'jpg', 'jpeg');
                        $fileextension = strtolower(pathinfo($uphoto, PATHINFO_EXTENSION));

                        $iv= openssl_random_pseudo_bytes(16);
                        $upiv= bin2hex($iv);    
                        $encpass= passsword_enc($password, $iv);
                        
                        if(!preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,12}$/", $password))
                        {
                            $err4="<div class='alert alert-danger mt-3' role='alert'>*Use all combination of password(Capital,Small,Numeric,Special)</div>";
                        }   
                        if(!preg_match("/[A-Za-z]{5,30}/", $sname))
                        {
                            $err3="<div class='alert alert-danger mt-3' role='alert'>*Name must be between 5-30 characters!</div>";
                        }
                        if(!in_array($fileextension, $extension))
                        {
                            $err2="<div class='alert alert-danger mt-3' role='alert'>*Only PNG, JPG or JPEG are accepted!</div>";
                        }
                        if($size>1048576)
                        {
                            $err="<div class='alert alert-danger mt-3' role='alert'>*Photo must be less than 1MB!</div>";
                        }
                        if(empty($uphoto))
                        {
                            $uphoto="male.jpg";
                        }
                        
                        if(isset($password) && !isset($sname) && !isset($uphoto))
                        {
                            $query2="UPDATE registration SET password='$password' WHERE rid='$rid'";
                            $resul3= mysqli_query($con, $query2);
                            echo '<script>window.location.href="SecretoryProfile.php"</script>';
                        }
                        else if(!isset($password) && isset($sname) && !isset($uphoto))
                        {
                            $query="UPDATE society SET secname='$sname' WHERE sid='$sid'";
                            $resul2= mysqli_query($con, $query);
                            echo '<script>window.location.href="SecretoryProfile.php"</script>';
                        }
                        else if(!isset($password) && !isset($sname) && isset($uphoto))
                        {
                            move_uploaded_file($tmp_name, "C://xampp//htdocs//EBuildingTest//images//".$uphoto);
                            $query="UPDATE society SET sphoto='$uphoto' WHERE sid='$sid'";
                            $resul2= mysqli_query($con, $query);
                            echo '<script>window.location.href="SecretoryProfile.php"</script>';
                        }
                        else if(isset($password) && isset($sname) && !isset($uphoto))
                        {
                            $query2="UPDATE registration SET password='$password' WHERE rid='$rid'";
                            $resul3= mysqli_query($con, $query2);
                            
                            $query="UPDATE society SET secname='$sname' WHERE sid='$sid'";
                            $resul2= mysqli_query($con, $query);
                            echo '<script>window.location.href="SecretoryProfile.php"</script>';
                        }
                        else if(isset($password) && !isset($sname) && isset($uphoto))
                        {
                            $query2="UPDATE registration SET password='$password' WHERE rid='$rid'";
                            $resul3= mysqli_query($con, $query2);
                            
                            move_uploaded_file($tmp_name, "C://xampp//htdocs//EBuildingTest//images//".$uphoto);
                            $query="UPDATE society SET sphoto='$uphoto' WHERE sid='$sid'";
                            $resul2= mysqli_query($con, $query);
                            echo '<script>window.location.href="SecretoryProfile.php"</script>';
                        }
                        else if(!isset($password) && isset($sname) && isset($uphoto))
                        {
                            $query2="UPDATE registration SET password='$password' WHERE rid='$rid'";
                            $resul3= mysqli_query($con, $query2);
                            
                            move_uploaded_file($tmp_name, "C://xampp//htdocs//EBuildingTest//images//".$uphoto);
                            $query="UPDATE society SET sphoto='$uphoto' WHERE sid='$sid'";
                            $resul2= mysqli_query($con, $query);
                            echo '<script>window.location.href="SecretoryProfile.php"</script>';
                        }
                        else if(isset($password) && isset($sname) && isset($uphoto))
                        {
                            move_uploaded_file($tmp_name, "C://xampp//htdocs//EBuildingTest//images//".$uphoto);
                            $query="UPDATE society SET secname='$sname',sphoto='$uphoto' WHERE sid='$sid'";
                            $resul2= mysqli_query($con, $query);
                            $query2="UPDATE registration SET password='$password' WHERE rid='$rid'";
                            $resul3= mysqli_query($con, $query2);
                            echo '<script>window.location.href="SecretoryProfile.php"</script>';
                        }
                      }
   ?>                    
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                      <h2>PROFILE PICTURE</h2>
                      
                      <img src="images//<?php echo $sphoto; ?>" class="p gimg" height="300" width="300" alt="Avatar">
                        </div><br><br>
                      <div class="form-group">
                      <h5 for="exampleInputName1">Name</h5>
                      <input type="text" class="tbox" id="exampleInputName1" name="secname" value="<?php echo $dsecname;?>">
                    </div>
                        <br>
                         <div class="form-group">
                      <h5>Change password</h5>
                          <input class="tbox" type="password" name="password">
                    </div>
                        <br>
                    
                       
                        <h5>Upload profile</h5>
                    <div class="form-group">
                      <div class="input-group col-xs">
                          
                          <label class="updateimg">
                        <span class="material-symbols-outlined">
imagesmode
                        </span>&emsp;
                        <b><input type="file" name="sphoto" title="<?php echo $sphoto; ?>">UPLOAD</b>   
                          </label>
                      </div>
                    </div>
                        
                        <br>
                      <input type="submit" name="submit" class="bn" value="Update">
                    </form>
                       
                    <?php
                    
                    if(isset($_POST['submit']))
                    {
                        if(!empty($err))
                        {    echo $err;     }
                        if(!empty($err2))
                        {   echo $err2;     }
                        if(!empty($err3))
                        {   echo $err3;     }
                        if(empty($err4))
                        {   echo $err4;     }
                    }
                    
                    ?>
            </section>
            
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
