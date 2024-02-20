<html>
    <head>
        <title>E-building</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script>
	$(document).ready(function()
	{
            //To hide mobile no validation
            $("#mobile_no_val").hide();

            //To hide mobile no validation image
            $("#mobile_no_img").hide();

            //To hide password validation
            $("#pass_small").hide();
            $("#pass_capital").hide();
            $("#pass_special").hide();
            $("#pass_number").hide();
            $("#pass_length").hide();

            //To hide password validation image
            $("#pass_small_img").hide();
            $("#pass_capital_img").hide();
            $("#pass_special_img").hide();
            $("#pass_number_img").hide();
            $("#pass_length_img").hide();

            //To hide confirm password validation
            $("#con_pass_val").hide();

            //To hide confirm password validation
            $("#con_pass_img").hide();

        	//Hide spaces 
        	$(".nl1").show();
        	$(".nl2").show();
        	$(".nl3").show();
                $(".nl4").show();
	
		//Hide space in fname
		$(".fl1").show();
                
		//Hide fullname validation
//		$("#fname_no_img").hide();
//		$("#fname_no_val").hide();
//
//		$("#fname").keyup(function()
//		{
//			$(".fl1").hide();
//			$("#fname_no_img").show();
//			$("#fname_no_val").show();
//			check_fname();
//		});
//		function check_fname()
//		{
//			var f_val=/[A-Za-z]/;
//			var fname=$("#fname").val();
//
//			if(f_val.test(fname))
//			{
//                            $("#fname_no_val").css("color","#34F458");
//                            $("#fname_no_img").attr("src", "Right.png");
//                            $("#fname").css("border-bottom-color", "#34F458");
//                            return true;
//			}
//			else
//			{
//				$("#fname_no_val").css("color","#F90A0A");
//                                $("#fname_no_img").attr("src", "Wrong.png");
//                                $("#fname").css("border-bottom-color", "#F90A0A");
//                                return false;
//			}
//                        if(fname<10 && fname>50)
//                        {
//                            $("#fname").css("border-bottom-color", "#F90A0A");
//                        }
//                        else
//                        {
//                            $("#fname").css("border-bottom-color", "#34F458");
//                        }
//                        if(f_val.test(fname) && fname<10 && fname>50)
//                        {
//                            $("#fname").css("border-bottom-color", "#F90A0A");   
//                        }
//                        else
//                        {
//                            $("#fname").css("border-bottom-color", "#34F458");   
//                        }
//		}
//			

            $("#register").click(function()
            {
                $(".nl4").hide();
                $("#utype_img").show();
                $("#utype").show();
            });
            
            $("#mobile_no").keyup(function()
            {
                $("#mobile_no_img").show();
                $(".nl1").hide();
                $("#mobile_no_val").show();
                check_mobile_no();
            });
            function check_mobile_no()
            {

                var mobile_no = $("#mobile_no").val();
                var num = /^[6-9][0-9]{9}$/;

                if(num.test(mobile_no))
                {
                    $("#mobile_no_val").replaceWith("<p class='txt' id='mobile_no_val' style='color:#34F458'><img src='Right.png'> Valid</p>");
                    $("#mobile_no").css("border-bottom-color", "#34F458");
                    return true;
                }
                else
                {
                    $("#mobile_no_val").replaceWith("<p class='txt' id='mobile_no_val' style='color:#F90A0A'><img src='Wrong.png'>&nbsp; Invalid mobile number</p>");
                    $("#mobile_no").css("border-bottom-color", "#F90A0A");
                    return true;
                }

            }

            $("#pass").keyup(function()
            {
                
                $("#pass_small").show();
                $("#pass_capital").show();
                $("#pass_special").show();
                $("#pass_number").show();
                $("#pass_length").show();
                $(".nl2").hide();

                $("#pass_small_img").show();
                $("#pass_capital_img").show();
                $("#pass_special_img").show();
                $("#pass_number_img").show();
                $("#pass_length_img").show();
                check_password();
            });
            function check_password()
            {
                var small=/[a-z]/;
                var capital=/[A-Z]/;
                var number=/[0-9]/;
                var special=/[$@%*&#!]/;
                var pass=$("#pass").val();

                if(small.test(pass))
                {
                    $("#pass_small").css("color","#34F458");
                    $("#pass_small_img").attr("src","Right.png");
                }
                else
                {
                    $("#pass_small").css("color","#F90A0A");
                    $("#pass_small_img").attr("src","Wrong.png");
                }
                if(capital.test(pass))
                {
                    $("#pass_capital").css("color","#34F458");
                    $("#pass_capital_img").attr("src","Right.png");
                }
                else
                {
                    $("#pass_capital").css("color","#F90A0A");
                    $("#pass_capital_img").attr("src","Wrong.png");
                }
                if(number.test(pass))
                {
                    $("#pass_number").css("color","#34F458");
                    $("#pass_number_img").attr("src","Right.png");
                }
                else
                {
                    $("#pass_number").css("color","#F90A0A");
                    $("#pass_number_img").attr("src","Wrong.png")
                }
                if(special.test(pass))
                {
                    $("#pass_special").css("color","#34F458");
                    $("#pass_special_img").attr("src","Right.png");
                }
                else
                {
                    $("#pass_special").css("color","#F90A0A");
                    $("#pass_special_img").attr("src","Wrong.png");
                }
                if(pass.length>7 && pass.length<13)
                {
                    $("#pass_length").css("color","#34F458");
                    $("#pass_length_img").attr("src","Right.png");
                }
                else
                {
                    $("#pass_length").css("color","#F90A0A");
                    $("#pass_length_img").attr("src","Wrong.png");
                }
                if(small.test(pass) && capital.test(pass) && number.test(pass) && special.test(pass) && pass.length>7)
                {
                    $("#pass").css("border-bottom-color", "#34F458");
                    return true;
                }
                else
                {
                    $("#pass").css("border-bottom-color","#F90A0A");
                    return false;
                }
        }

        $("#con_pass").keyup(function () {
            $("#con_pass_val").show();
            $("#con_pass_img").show();
            $(".nl3").hide();
            check_confirm_password();
        });
        function check_confirm_password()
        {
            var pass = $("#pass").val();
            var con_pass = $("#con_pass").val();
            if (pass === con_pass) {
                $("#con_pass").css("border-bottom-color", "#34F458");
                $("#con_pass_img").attr("src", "Right.png");
                $("#con_pass_val").css("color", "#34F458");
                return true;
            }
            else
            {
                $("#con_pass").css("border-bottom-color", "#F90A0A");
                $("#con_pass_img").attr("src", "Wrong.png");
                $("#con_pass_val").css("color", "#F90A0A");
                return false;
            }
        }

        setTimeout(function()
        {
            $("div").removeClass("alert alert-danger");
            $(".mdata").hide();
        },1500);
        
        
    });
        </script>
        <style>
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
                height:630px;
                width:400px;
                top: 50px;
                position:absolute;
                left: 400px;
                border-color:black ;
                padding: 20px;
                border:1px solid black;
                background:linear-gradient(to top,rgba(20, 20, 20, 0.8)50%,rgba(20,20,20,0.8)50%);
                border-radius: 10px;
            }

          
            
            a{
                color: white;
                margin-left: 70px;
            }
            
            .val, .val option{
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
                margin-left: 100px;
                background-color: aqua;
                border: none;
                height: 35px;
                width:100px;
                cursor: pointer;
                border-radius: 25px;
            }

            ::placeholder{
                color: black;
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
    </head>
    <body>
        <?php
        
        
        $fname='';
        $utypeerr='';
        $mobileno='';
        $password='';
        $cpass='';
        if(isset($_POST['register']))
        {
            $utype=$_POST['utype'];
            $mobile_number = $_POST['mobileno'];
            $pass=$_POST['pass'];
            $con_pass=$_POST['con_pass'];

            
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
            
            //validate if usert type is Unselected
            if($utype==='U')
            {
                $utypeerr="<p class='txt'><img src='Wrong.png'> Select user type</p>";
            }
                // Validate mobile number format
                if (empty($mobile_number)) {
                  $mobileno="<p>Enter mobile number<p>";
                }
                else if(!preg_match("/^[6-9][0-9]{9}/", $mobile_number))
                {
                    $mobileno="<p>Invalid format<p>";
                }

                  
                if(isset($_POST['pass']))
                {
                    if(empty($_POST['pass']))
                    {
                        $password="<p>*Enter password</p>";
                    }
                    else if(!preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,12}$/", $pass))
                    {
                        $password="<p>*Use all combination of password</p>";
                    }
                    
                }    
                 if(isset($_POST['con_pass']))
                {
                    if(empty($_POST['con_pass']))
                    {
                        $cpass="<p>*Enter confirm password</p>";
                    }
                    else if($con_pass!==$pass)
                    {
                        $cpass="<p>*Password is not same</p>";
                    }
                }
                
                if($mobileno=='' && $password=='' && $cpass=='' && $utype!=='U')
                {
                    $con=new mysqli("localhost","root","","pratix") or die("Connection failed !".$con->connect_errno);
                    
                    $status=0;
                    
                    function insertData($con,$mobile_number,$encpass,$utype,$upiv){
                        $sql="INSERT INTO Registration(mobileno,password,category,iv) VALUES(?,?,?,?)";
                            $stmt=$con->prepare($sql);
                            if($stmt)
                            {
                                $stmt->bind_param("ssss",$mobile_number, $encpass, $utype ,$upiv);
                                $stmt->execute();
                                echo "<script>window.location.href='home.php'</script>";
                            }
                    }

                    $sql2="SELECT mobileno FROM registration";
                    $result= mysqli_query($con, $sql2);
                    if(mysqli_num_rows($result)===0)
                    {
                        $iv= openssl_random_pseudo_bytes(16);
                        $upiv= bin2hex($iv);    
                        $encpass= passsword_enc($pass, $iv);
                        insertData($con, $mobile_number, $encpass, $utype, $upiv);
                        echo "<script>window.location.href='Login.php'</script>";
                    }
                    else
                    {
                        while ($data= mysqli_fetch_assoc($result))
                        {
                            if($mobile_number === $data['mobileno'])
                            {
                                $existed="<div class='alert alert-danger'>
 <p class='mdata'>Mobile number is already registerd!</p>
</div>";
                                break;
                            }
                            else
                            {
                                $iv= openssl_random_pseudo_bytes(16);
                                $upiv= bin2hex($iv);    
                                $encpass= passsword_enc($pass, $iv);
                                insertData($con, $mobile_number, $encpass, $utype, $upiv);
                                echo "<script>window.location.href='Login.php'</script>";
                                break;
                            }        
                        } 
                    }
                }  
        }
        ?>
        <form method="POST" action="">
            <div class="container">
                <center><h1><b>SIGN UP</b></h1></center>
                    <br> 
                    <br>
                    <div class="form">
                        <select class="form val" name="utype" required>
                            <option value="U">Select user type</option>
                            <option value="S">Secretory</option>
                            <option value="F">Flat Owner</option>
                        </select>
                        <?php if(!empty($utypeerr)){echo $utypeerr;}else{echo '<br><br>'; } ?>
                        <input type="text" class="form val" placeholder="Enter mobile number" id="mobile_no" name="mobileno" value="<?php if(isset($_POST['register'])){echo $_POST['mobileno'];} ?>">
                        <p class="txt" id="mobile_no_val"><img src="Wrong.png" id="mobile_no_img"> Invalid mobile number</p>
                        <br class="nl1"><br class="nl1"><br class="nl1" />

                        <input type="password" class="form val" placeholder="Enter password" id="pass" name="pass" value="<?php if(isset($_POST['register'])){echo $_POST['pass'];}?>">
                        <p class="txt" id="pass_small"><img src="Wrong.png" id="pass_small_img"> Atleast one small letter</p>
                        <p class="txt" id="pass_capital"><img src="Wrong.png" id="pass_capital_img"> Atleast one capital letter</p>
                        <p class="txt" id="pass_number"><img src="Wrong.png" id="pass_number_img"> Atleast one numeric digit</p>
                        <p class="txt" id="pass_special"><img src="Wrong.png" id="pass_special_img"> Atleast one special character</p>
                        <p class="txt" id="pass_length"><img src="Wrong.png" id="pass_length_img"> Contain 8-12 character</p>
                        <br class="nl2"><br class="nl2"><br class="nl2">

                        <input type="password" class="form val" placeholder="Confirm password" id="con_pass" name="con_pass" value="<?php if(isset($_POST['register'])){echo $_POST['con_pass'];}?>">
                        <p class="txt" id="con_pass_val"><img src="Wrong.png" id="con_pass_img"> Password is not same </p>
                        <br class="nl3"><br class="nl3"><br class="nl3" />
                        
                        <a href='Login.php'>Already have an account?</a>
                        <br><br>
                        <input type="submit" class="btn" id="register" name="register" value="Register">
                        
                    </div>
            </div>
            
        </form>
        <?php
            if(!empty($existed))
            {
                echo $existed;
            }
            ?>
    </body>
</html>