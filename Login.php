<?php
session_start();
?>
<html>    
<head>
        <meta charset="UTF-8">
        <title>Log in</title>
    </head>
        <title>E-building</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        
        <!--Re captcha for Security-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
        <script src="https://www.google.com/recaptcha/api.js"></script>
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
	<script>
//	$(document).ready(function()
//	{
//            
//            //To hide mobile no validation
//            $("#mobile_no_val").hide();
//
//            //To hide mobile no validation image
//            $("#mobile_no_img").hide();
//
//            //To hide password validation
//            $("#pass_small").hide();
//            $("#pass_capital").hide();
//            $("#pass_special").hide();
//            $("#pass_number").hide();
//            $("#pass_length").hide();
//
//            //To hide password validation image
//            $("#pass_small_img").hide();
//            $("#pass_capital_img").hide();
//            $("#pass_special_img").hide();
//            $("#pass_number_img").hide();
//            $("#pass_length_img").hide();
//
//            $("#mobile_no").keyup(function()
//            {
//                $("#mobile_no_img").show();
//                $(".nl1").hide();
//                $("#mobile_no_val").show();
//                check_mobile_no();
//            });
//            function check_mobile_no()
//            {
//
//                var mobile_no = $("#mobile_no").val();
//                var num = /^[6-9][0-9]{9}$/;
//
//                if(num.test(mobile_no))
//                {
//                    $("#mobile_no_val").replaceWith("<p class='txt' id='mobile_no_val' style='color:#34F458'><img src='Right.png'> Valid</p>");
//                    $("#mobile_no").css("border-bottom-color", "#34F458");
//                    return true;
//                }
//                else
//                {
//                    $("#mobile_no_val").replaceWith("<p class='txt' id='mobile_no_val' style='color:#F90A0A'><img src='Wrong.png'>&nbsp; Invalid mobile number</p>");
//                    $("#mobile_no").css("border-bottom-color", "#F90A0A");
//                    return true;
//                }
//
//            }
//            
//            
//            $("#pass").keyup(function()
//            {
//                
//                $("#pass_small").show();
//                $("#pass_capital").show();
//                $("#pass_special").show();
//                $("#pass_number").show();
//                $("#pass_length").show();
//                $(".nl2").hide();
//
//                $("#pass_small_img").show();
//                $("#pass_capital_img").show();
//                $("#pass_special_img").show();
//                $("#pass_number_img").show();
//                $("#pass_length_img").show();
//                check_password();
//            });
//            function check_password()
//            {
//                var small=/[a-z]/;
//                var capital=/[A-Z]/;
//                var number=/[0-9]/;
//                var special=/[$@%*&#!_]/;
//                var pass=$("#pass").val();
//
//                if(small.test(pass))
//                {
//                    $("#pass_small").css("color","#34F458");
//                    $("#pass_small_img").attr("src","Right.png");
//                  
//                }
//                else
//                {
//                    $("#pass_small").css("color","#F90A0A");
//                    $("#pass_small_img").attr("src","Wrong.png");
//                   
//                }
//                if(capital.test(pass))
//                {
//                    $("#pass_capital").css("color","#34F458");
//                    $("#pass_capital_img").attr("src","Right.png");
//                  
//                }
//                else
//                {
//                    $("#pass_capital").css("color","#F90A0A");
//                    $("#pass_capital_img").attr("src","Wrong.png");
//                   
//                }
//                if(number.test(pass))
//                {
//                    $("#pass_number").css("color","#34F458");
//                    $("#pass_number_img").attr("src","Right.png");
//                  
//                }
//                else
//                {
//                    $("#pass_number").css("color","#F90A0A");
//                    $("#pass_number_img").attr("src","Wrong.png");
//                   
//                }
//                if(special.test(pass))
//                {
//                    $("#pass_special").css("color","#34F458");
//                    $("#pass_special_img").attr("src","Right.png");
//                }
//                else
//                {
//                    $("#pass_special").css("color","#F90A0A");
//                    $("#pass_special_img").attr("src","Wrong.png");
//                   
//                }
//                if(pass.length>7)
//                {
//                    $("#pass_length").css("color","#34F458");
//                    $("#pass_length_img").attr("src","Right.png");
//                  
//                }
//                else
//                {
//                    $("#pass_length").css("color","#F90A0A");
//                    $("#pass_length_img").attr("src","Wrong.png");
//                   
//                }
//                if(small.test(pass) && capital.test(pass) && number.test(pass) && special.test(pass) && pass.length>7)
//                {
//                    $("#pass").css("border-bottom-color","#34F458");
//                    
//                    return true;
//                }
//                else
//                {
//                    $("#pass").css("border-bottom-color","#F90A0A");
//                    return false;
//                }
//               
//            }
//           
//           
//           $("#captcha").keyup(function(){
//               $("#captcha").add("<p>Required</p>");
//    
//           });
//         
//    });
        </script>
        
        
        
        <style>
            a{
                padding-left: 50px;
            }
            
            .centered {
    position: fixed;
    top: 50%;
    left: 50%;
    margin-left:-130px;
    margin-top:-35px;
}
.textfield {
   position: relative;
    padding: 10px 15px;
    border:1px solid #e3f2fd;
    border-radius:0px;
    box-shadow: none;
}
.centered span {
    position: absolute;
    z-index: 1;
    background-color:#fff;
    top: 13px;
    left: 13px;
    color:lightblue;
    padding:0 5px;
}
.textfield:focus {
    border:1px solid lightblue;
}
input:focus ~ span,
input:not(:focus):valid ~ span {
    top:-15px;
    left: 0px;
    color: lightblue;
    font-size: 12px;
    background-color: transparent;
}
input::-webkit-input-placeholder{
    color: black;
}
.textfield, span {
	transition: ease-in-out 0.2s all;
	-webkit-transition: ease-in-out 0.2s all;
	-moz-transition: ease-in-out 0.2s all;
	-o-transition: ease-in-out 0.2s all;
}
            
            body{
                background-image:url("Building.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            h1{
                color:azure;
                font-size:40px;
                font-family: sans-serif;
            }
            .container{
                color: black;
                height:570px;
                width:400px;
                box-shadow: 3px 3px ;
                top: 50px;
                position:absolute;
                left: 400px;
                border-color:black ;
                padding: 20px;
                border:1px solid black;
                background:linear-gradient(to top,rgba(20, 20, 20, 0.8)50%,rgba(20,20,20,0.8)50%);
                border-radius: 20px;
            }

            .val{
                width: 300px;
                height: 30px;
                border-left: 0;
                border-right: 0;
                border-top: 0;
                border-bottom-color: black;
                outline: none;
            }

            .form{
                padding-left: 10px;
                margin-top: 10px;
                margin-left: 10px;
            }

            .txt{
                padding-left:10px;
                margin:5px;
            }
           .btn{
                margin-left: 120px;
                background-color: aqua;
                border: none;
                height: 35px;
                width:100px;
                cursor: pointer;
                border-radius: 25px;
            }

            a{
                color:white;
                margin-left: 40px;
            }
            
           

            p{
                color:red;
            }

            img{
                height: 10px;
                width:10px;
            }
            
            .small-i{
                height:100px;
                width:100px;
                border-radius: 50px;
            }
            
            .recaptcha{
                width: 20%;
                height: 40px;
                margin-left: 20px;
                background: aqua;
                text-align: center;
                font-size: 20px;
                font-weight: bold;
                padding-top: 5px;
            }
        </style>
    </head>
    <body>
        
        <?php
        $mobileno = '';
        $password = '';
        $rand= rand(9999,1000);
        
        if (isset($_POST['Submit'])) {
            
            
            if($_POST['captcha']!=$_POST['defcaptcha'])
            {
                $errcaptcha="<p class='txt' id='captcha_img'><img src='Wrong.png'> Wrong captcha</p>";
            }
                
                function passsword_des($str,$iv)
                {
                    $chipper="AES-128-CTR";
                    $key="password$$%%&&@@##**";
                    $options=0;
                    //$iv=1234567891234567;

                    $str= openssl_decrypt($str, $chipper, $key, $options, $iv);
                    return $str;
                }
            
            $mobile_number = $_POST['mobileno'];
            $pass = $_POST['password'];

            if ($mobileno == '' && $password == '') {
                $con = new mysqli("localhost", "root", "", "pratix") or die("Connection failed !");

                $sql = "Select rid,mobileno,password,category,iv from registration,jsociety WHERE mobileno='$mobile_number'  AND registration.rid=jsociety.jid ";
                $result = mysqli_query($con, $sql) or die("Error in sql query");

                $row = mysqli_num_rows($result);
                $data= mysqli_fetch_assoc($result);
               
                if($row === 1)
                {
                    $passw=$data['password'];
                    $iv=$data['iv'];
                    $upiv= hex2bin($iv);
                    $upass= passsword_des($passw, $upiv);
                    if($pass===$upass){
                    $_SESSION['seRid']=$data['rid'];
                    $_SESSION['sesLogin']=true;
                    echo "<script>window.location.href='MemberDashboard.php'</script>";
                    }
                    
                }
                $sql2 = "Select rid,mobileno,password,category,iv from registration,society WHERE mobileno='$mobile_number' AND registration.rid=society.sid ";
                $result2 = mysqli_query($con, $sql2) or die("Error in sql query");

                $row2 = mysqli_num_rows($result2);
                $data2= mysqli_fetch_assoc($result2);
               
                if($row2 === 1)
                {
                    $passw=$data2['password'];
                    $iv=$data2['iv'];
                    $upiv= hex2bin($iv);
                    $upass= passsword_des($passw, $upiv);
                    if($pass===$upass){
                    $rid=$data2['rid'];
                    $_SESSION['seRid']=$rid;
                    $_SESSION['sesLogin']=true;
                    echo "<script>window.location.href='Dashboard.php'</script>";
                    }
                }
                
                $sql3 = "Select rid,mobileno,password,category,iv from registration WHERE mobileno='$mobile_number'";
                $result3 = mysqli_query($con, $sql3) or die("Error in sql query");

                $row3 = mysqli_num_rows($result3);
                $data3= mysqli_fetch_assoc($result3);
               
                if($row3 === 1)
                {
                    $passw=$data3['password'];
                    $iv=$data3['iv'];
                    $upiv= hex2bin($iv);
                    $upass= passsword_des($passw, $upiv);
                    if($pass===$upass){
                    echo $data3['category'];
                    $_SESSION['seRid']=$data3['rid'];
                    $_SESSION['sesLogin']=true;
                    
                    if($data3['category']==='S')
                    {
                        echo "<script>window.location.href='createsociety.php'</script>";
                    }
                    else if($data3['category']==='F')
                    {
                        echo "<script>window.location.href='joinsociety.php'</script>";
                    }
                    else
                    {
                        echo "<script>window.location.href='home.php'</script>";
                    }
                    }
                    else
                    {
                        $err='<p class="txt" id="mobile_no_val"><img src="Wrong.png" id="mobile_no_img"> Password is wrong</p>';
                    }
                }
                else
                    {
                        $err2='<p class="txt" id="pass_small"><img src="Wrong.png" id="pass_small_img"> Mobile number is not registered</p>';
                    }
                
                
            }
            }
        ?>
        <noscript>Please Enable Java script</noscript>
        <form method="post" action="">
            <div class="container">
                <center><h1><b>SIGN IN</b></h1></center>
                    <br>
                    <br>
                        <div class="form"> 
                            <label><input type="text" class="form val" id="mobile_no" placeholder="Enter mobile number" name="mobileno" value="<?php if(isset($_POST['Submit'])){echo $_POST['mobileno'];}?>"></label>
                            
                            <?php
                            if(isset($_POST['Submit']) && !empty($err2))
                            {
                                echo $err2;
                            }
                            
                            ?>
                            <br><br>
                            
                            <input type="password" name="password" class="form val" placeholder="Enter password" id="pass" value="<?php if(isset($_POST['Submit'])){echo $_POST['password'];} ?>">
                           
                            <?php
                           if(isset($_POST['Submit']) && !empty($err))
                           {
                               echo $err;
                           }
                           ?>
                            <br><br><br>
                            
                            
                            <!--Google Recaptcha API for spam prevention-->
                            
<!--                            <div class="g-recaptcha" data-sitekey="6LeEVEgpAAAAAGtluRzwFD7b9IRsTWt-lNJRhJIa"></div>-->

                            <input type="hidden" name="defcaptcha" value="<?php echo $rand?>">
                            
                            <div class="recaptcha"><?php echo $rand; ?></div>
                            <input type="text" name="captcha" class="form val" placeholder="Enter above captcha" id="captcha">
                            <?php if(isset($_POST['Submit']) && !empty($errcaptcha)){echo $errcaptcha;} ?>
                            <br><br>
                            </div>
                            <a href='Registration.php'>Don't have an account?</a>
                            
                            <br><br>
                            <input type="submit" class="btn" id="btn-sub" name="Submit" value="Log in">
                        </div>
            </div>
        </form>
    </body>
</html>
