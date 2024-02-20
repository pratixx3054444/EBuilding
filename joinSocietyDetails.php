 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Flat Owner Details Form</title>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script>
	$(document).ready(function()
	{		
            //Display spaces
            $(".b1").show();
            $(".b2").show();
            $(".b3").show();
            $(".b4").show();
            $(".b5").show();
            $(".b6").show();
            
            //Hide fullname validation
		$("#fname_no_img").hide();
		$("#fname_no_val").hide();

		$("#fname").keyup(function()
		{
                    $(".b1").hide();
                    $("#fname_no_img").show();
                    $("#fname_no_val").show();
                    check_fname();
		});
		function check_fname()
		{
                    //Variable for first name
                    var f_val=/[A-Za-z]/;
                    var fname=$("#fname").val();

                    //First name validation
                    if(f_val.test(fname))
                    {
                        $("#fname_no_val").css("color","#34F458");
                        $("#fname_no_img").attr("src", "Right.png");
                        $("#fname").css("border-bottom-color", "#34F458");
                        return true;
                    }
                    else
                    {
                        $("#fname_no_val").css("color","#F90A0A");
                        $("#fname_no_img").attr("src", "Wrong.png");
                        $("#fname").css("border-bottom-color", "#F90A0A");
                        return false;
                    }
                    if(fname<10 && fname>50)
                    {
                        $("#fname").css("border-bottom-color", "#F90A0A");
                    }
                    else
                    {
                        $("#fname").css("border-bottom-color", "#34F458");
                    }
                    if(f_val.test(fname) && fname<10 && fname>50)
                    {   
                        $("#fname").css("border-bottom-color", "#F90A0A");   
                    }
                    else
                    {
                        $("#fname").css("border-bottom-color", "#34F458");   
                    }
		}
                
                //Hide email validation
                $("#email_val").hide();
                $("#email_img").hide();
                
                //Email validation
                $("#email").keyup(function()
		{
                    $(".b2").hide();
                    $("#email_val").show();
                    $("#email_img").show();
                    check_email();
		});
		function check_email()
		{
			var pattern=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var email=$("#email").val();

			if(pattern.test(email) && email !== '')
			{
                            $("#email_img").attr("src","Right.png");
                            $("#email_val").css("color","#34F458");
                            $("#email").css("border-bottom-color","#34F458");
			}
			else
			{
                            $("#email_img").attr("src","Wrong.png");
                            $("#email_val").css("color","#F90A0A");
                            $("#email").css("border-bottom-color","#F90A0A");
			}
		}
                
                //Hide flat number validation
                $("#flat_no_val").hide();
                $("#flat_no_img").hide();
             
                //Flat number validation
                $("#flat_no").keyup(function()
		{
                    $(".b3").hide();
                    $("#flat_no_val").show();
                    $("#flat_no_img").show();
                    check_flat_no();
		});
		function check_flat_no()
		{
			var pattern=/^[0-9]{3,4}$/;
			var flat_no=$("#flat_no").val();

			if(pattern.test(flat_no) &&  flat_no !== '')
			{
                            $("#flat_no_img").attr("src","Right.png");
                            $("#flat_no_val").css("color","#34F458");
                            $("#flat_no").css("border-bottom-color","#34F458");
			}
			else
			{
                            $("#flat_no_img").attr("src","Wrong.png");
                            $("#flat_no_val").css("color","#F90A0A");
                            $("#flat_no").css("border-bottom-color","#F90A0A");
			}
		}
                
                //Hide floor number validation
                $("#floor_no_val").hide();
                $("#floor_no_img").hide();
             
                //Floor number validation
                $("#floor_no").keyup(function()
		{
                    $(".b4").hide();
                    $("#floor_no_val").show();
                    $("#floor_no_img").show();
                    check_floor_no();
		});
		function check_floor_no()
		{
			var floor_no=$("#floor_no").val();

			if(floor_no<=60 && floor_no>=1&&  floor_no !== '')
			{
                            $("#floor_no_img").attr("src","Right.png");
                            $("#floor_no_val").css("color","#34F458");
                            $("#floor_no").css("border-bottom-color","#34F458");
			}
			else
			{
                            $("#floor_no_img").attr("src","Wrong.png");
                            $("#floor_no_val").css("color","#F90A0A");
                            $("#floor_no").css("border-bottom-color","#F90A0A");
			}
		}


                //Hide building number validation
                $("#building_val").hide();
                $("#building_img").hide();
             
                //Flat building number validation
                $("#building").keyup(function()
		{
                    $(".b5").hide();
                    $("#building_val").show();
                    $("#building_img").show();
                    check_building_no();
		});
		function check_building_no()
		{
                        var pattern=/^[A-Z]{1}$/;
			var building=$("#building").val();

			if(pattern.test(building) &&  building !== '')
			{
                            $("#building_img").attr("src","Right.png");
                            $("#building_val").css("color","#34F458");
                            $("#building").css("border-bottom-color","#34F458");
			}
			else
			{
                            $("#building_img").attr("src","Wrong.png");
                            $("#building_val").css("color","#F90A0A");
                            $("#building").css("border-bottom-color","#F90A0A");
			}
		}
                
                $("#bhk_val").hide();
                $("#bhk_img").hide();
                
                //BHK validation
                $("#bhk").keyup(function()
                {
                    $(".b6").hide();
                    $("#bhk_val").show();
                    $("#bhk_img").show();
                    check_bhk();
                });
                function check_bhk()
                {
                    var pattern=/^[1-5]{1}$/;
                    var bhk=$("#bhk").val();

                    if(pattern.test(bhk) &&  bhk !== '')
                    {
                        $("#bhk_img").attr("src","Right.png");
                        $("#bhk_val").css("color","#34F458");
                        $("#bhk").css("border-bottom-color","#34F458");
                    }
                    else
                    {
                        $("#bhk_img").attr("src","Wrong.png");
                        $("#bhk_val").css("color","#F90A0A");
                        $("#bhk").css("border-bottom-color","#F90A0A");
                    }
                }


                $("#bhktext").show();
                $("#bhkimg").show();
                $(".b6").hide();
                
                $("#bhk").click(function()
                {
                  var bhk=$("#bhk").val();
                  console.log(bhk);
                  
                  if(bhk!=='S')
                  {
                      $("#bhktext").hide();
                      $("#bhkimg").hide();
                      $(".b6").show();
                  }
                  else{
                      $("#bhktext").show();
                      $("#bhkimg").show();
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
        <style>
            body{
                background-image:url("Building.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            h1{
                color:azure;
                font-size:40px;
                text-transform: uppercase;
                font-family: sans-serif;
                left: 0;
                
            }
            .container{
                color: black;
                height:600px;
                width:380px;
                box-shadow: 3px 3px ;
                top: 30px;
                position:absolute;
                left: 400px;
                border-color:black ;
                padding: 20px;
                border:1px solid black;
                background:linear-gradient(to top,rgba(20, 20, 20, 0.8)50%,rgba(20,20,20,0.8)50%);
                border-radius: 10px;
            }

            .val{
                width: 300px;
                height: 30px;
                border-left: 0;
                border-right: 0;
                border-top: 0;
                border-radius: 5px;
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

            .btn:hover{
                background-color: background;
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
                height:70px;
                width:70px;
                border-radius: 50px;
            }
            
            .bn{
                outline: none;
                border: none;
                padding: 24px;
                width: 125px;
                height: 40px;
                padding: 0px;
                color: white;
                font-family: "montserrat",sans-serif;
                text-transform: uppercase;
                border-radius: 6px;
                cursor: pointer;
                background-size: 200%;
                font-weight: bold;
                background-color: #0d6efd;
                margin-right: 20px;
                margin-left: 25%;
                box-shadow: 0 .2rem .4rem #0005
            }
        </style>
    </head>
<body>
    <?php
    if (isset($_POST['join'])) {
        //Variable for error message
        $err_name = '';
        $err_email = '';
        $err_phone = '';
        $err_flat_no = '';
        $err_floor_no = '';
        $err_building_no = '';
        $err_bhk='';

        //Get data of inputed value
        $jid= $_SESSION['seRid'];
        $getsid= $_GET['sid'];
        $sid= base64_decode($getsid);
        $_SESSION['sesSid']=$sid;
        $name = $_POST['fname'];
        $email = $_POST['oemail'];
        $flat_number = $_POST['flat_number'];
        $floor_number = $_POST['floor_number'];
        $building_nuber = $_POST['building_number'];
        $bhk=$_POST['bhk'];
        $jphoto="male.jpg";
        
        if (!preg_match("/[a-zA-Z ]/", $name)) {
            $err_name = "<p>Name can only contain letters and white space</p>";
        }

        if (!preg_match("/^[0-9]{3,4}$/", $flat_number)) {
            $err_flat_no = "<p>Only numbers with maximum 4 digit size</p>";
        }

        if (strlen($floor_number) > 25 && strlen($floor_number)<=0) {
            $err_floor_no = "<p>Floor number must be less than 25</p>";
        }

        if (!preg_match("/^[A-Z]{1}$/", $building_nuber)) {
            $err_name = "<p>Building number is only 1 alphabet</p>";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_email = "<p>Invalid email format</p>";
        }
        
        if (!preg_match("/^[1-5]{1}$/", $bhk)) {
            $err_bhk = "<p>Only 1-5 numeric</p>";
        }

        if ($err_name == '' && $err_email == '' && $err_phone == '' && $err_flat_no == '' && $err_floor_no == '' && $err_building_no == '' && $err_bhk == '') {
            $con = new mysqli("localhost", "root", "", "pratix") or die("Connection failed !");
            
            $query = "INSERT INTO jSociety(jid,sid,fname,email,flat_number,floor_number,building_number,fphoto,bhk) VALUES(?,?,?,?,?,?,?,?,?)";
            if ($stmt = $con->prepare($query)) 
            {
//                setcookie("fowner", true, time()+60*60*24*365*10);
                $stmt->bind_param("iisssissi",$jid,$sid, $name, $email, $flat_number, $floor_number, $building_nuber,$jphoto,$bhk);
                $stmt->execute();
            }
            echo "<script>window.location.href='MemberDashboard.php'</script>";
        }
//        else{
//            echo "Error";
//        }
    }
    ?>
    <div class="container">
        <center><table><tr><td>
                    <td><h1>&ensp;Join Society</h1></table></center>
                        <div class="form"> 
	
	<form action="" method="POST">
		
            <input type="text" class="form val" placeholder="Enter full name" id="fname" name="fname" value="<?php if(isset($_POST['join'])){echo $_POST['fname'];}?>"required>
            <p class="txt" id="fname_no_val"><img src="Wrong.png" id="fname_no_img"> Only contains alphabet</p><br class="b1"><br class="b1">
		
            <input type="email" class="form val" placeholder="Enter email address" id="email" name="oemail" value="<?php if(isset($_POST['join'])){echo $_POST['oemail'];}?>" required>
            <p class="txt" id="email_val"><img src="Wrong.png" id="email_img"> Invalid email</p><br class="b2"><br class="b2">

            <input type="text" class="form val" placeholder="Enter flat number" id="flat_no" name="flat_number" value="<?php if(isset($_POST['join'])){echo $_POST['flat_number'];}?>" required>
            <p class="txt" id="flat_no_val"><img src="Wrong.png" id="flat_no_img"> Contains 3 to 4 digit</p><br class="b3"><br class="b3">
            
            <input type="number" class="form val" placeholder="Enter floor number" id="floor_no" name="floor_number" value="<?php if(isset($_POST['join'])){echo $_POST['floor_number'];}?>" required>
            <p class="txt" id="floor_no_val"><img src="Wrong.png" id="floor_no_img"> Floor number less than 60</p><br class="b4"><br class="b4">
            
            <input type="text" class="form val" placeholder="Enter building number" id="building" name="building_number" value="<?php if(isset($_POST['join'])){echo $_POST['building_number'];}?>" required>
            <p class="txt" id="building_val"><img src="Wrong.png" id="building_img"> Only 1 capital alphabet</p><br class="b5"><br class="b5">
            
            <select name="bhk" class="form val" id="bhk" required>
                <option value="S">Select BHK
                <option value="1">1
                <option value="2">2
                <option value="3">3
                <option value="4">4
                <option value="5">5
            </select>
            
            
            <p class="txt" id="bhktext"><img src="Wrong.png" id="bhkimg"> Required</p><br class="b6"><br class="b6">
            
            <input type="submit" name="join" class="bn" value="Submit">
    </form>
</body>
</html>
