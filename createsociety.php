<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Society Details</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            $(document).ready(function ()
            {
                //Display spaces
                $(".b2").show();
                $(".b3").show();
                $(".b4").show();
                $(".b5").show();
                $(".fl1").show();
                
                
                //Hide fullname validation
		$("#fname_no_img").hide();
		$("#fname_no_val").hide();

		$("#fname").keyup(function()
		{
                    $(".fl1").hide();
                    $("#fname_no_img").show();
                    $("#fname_no_val").show();
                    check_fname();
		});
		function check_fname()
		{
                    //Variable for first name
                    var f_val=/^[A-Za-z ]{5,30}/;
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
                
                
                //Hide fullname validation
                $("#sname_img").hide();
                $("#sname_val").hide();

                $("#sname").keyup(function ()
                {
                    $(".b1").hide();
                    $("#sname_img").show();
                    $("#sname_val").show();
                    check_sname();
                });
                function check_sname()
                {
                    //Variable for first name
                    var pattern = /^[a-zA-Z ]{5,20}$/;
                    var sname = $("#sname").val();

                    //First name validation
                    if (pattern.test(sname))
                    {
                        $("#sname_val").css("color", "#34F458");
                        $("#sname_img").attr("src", "Right.png");
                        $("#sname").css("border-bottom-color", "#34F458");
                    } else
                    {
                        $("#sname_val").css("color", "#F90A0A");
                        $("#sname_img").attr("src", "Wrong.png");
                        $("#sname").css("border-bottom-color", "#F90A0A");
                    }
                }

                //Hide email validation
                $("#city_val").hide();
                $("#city_img").hide();

                //Email validation
                $("#city").keyup(function ()
                {
                    $(".b2").hide();
                    $("#city_val").show();
                    $("#city_img").show();
                    check_city();
                });
                function check_city()
                {
                    var pattern = /^[a-zA-Z]{2,28}$/;
                    var city = $("#city").val();

                    if (pattern.test(city) && city !== '')
                    {
                        $("#city_img").attr("src", "Right.png");
                        $("#city_val").css("color", "#34F458");
                        $("#city").css("border-bottom-color", "#34F458");
                    } else
                    {
                        $("#city_img").attr("src", "Wrong.png");
                        $("#city_val").css("color", "#F90A0A");
                        $("#city").css("border-bottom-color", "#F90A0A");
                    }
                }

                //Hide flat number validation
                $("#state_val").hide();
                $("#state_img").hide();

                //Flat number validation
                $("#state").keyup(function ()
                {
                    $(".b3").hide();
                    $("#state_val").show();
                    $("#state_img").show();
                    check_state();
                });
                function check_state()
                {
                    var pattern = /^[a-zA-Z ]{3,20}$/;
                    var state = $("#state").val();

                    if (pattern.test(state) && state !== '')
                    {
                        $("#state_img").attr("src", "Right.png");
                        $("#state_val").css("color", "#34F458");
                        $("#state").css("border-bottom-color", "#34F458");
                    } else
                    {
                        $("#state_img").attr("src", "Wrong.png");
                        $("#state_val").css("color", "#F90A0A");
                        $("#state").css("border-bottom-color", "#F90A0A");
                    }
                }

                //Hide flat number validation
                $("#nearby_val").hide();
                $("#nearby_img").hide();
                //Hide floor number validation
                $("#nearby").keyup(function ()
                {
                    $(".b4").hide();
                    $("#nearby_val").show();
                    $("#nearby_img").show();
                    check_nearby();
                });
                function check_nearby()
                {
                    var pattern = /^[a-zA-Z ]{5,20}$/;
                    var nearby = $("#nearby").val();

                    if (pattern.test(nearby) && nearby !== '')
                    {
                        $("#nearby_img").attr("src", "Right.png");
                        $("#nearby_val").css("color", "#34F458");
                        $("#nearby").css("border-bottom-color", "#34F458");
                    } else
                    {
                        $("#nearby_img").attr("src", "Wrong.png");
                        $("#nearby_val").css("color", "#F90A0A");
                        $("#nearby").css("border-bottom-color", "#F90A0A");
                    }
                }


                //Hide building number validation
                $("#zip_val").hide();
                $("#zip_img").hide();

                //Flat building number validation
                $("#zip").keyup(function ()
                {
                    $(".b5").hide();
                    $("#zip_val").show();
                    $("#zip_img").show();
                    check_zip();
                });
                function check_zip()
                {
                    var pattern = /^[0-9]{6}$/;
                    var zip = $("#zip").val();

                    if (pattern.test(zip) && zip !== '')
                    {
                        $("#zip_img").attr("src", "Right.png");
                        $("#zip_val").css("color", "#34F458");
                        $("#zip").css("border-bottom-color", "#34F458");
                    } else
                    {
                        $("#zip_img").attr("src", "Wrong.png");
                        $("#zip_val").css("color", "#F90A0A");
                        $("#zip").css("border-bottom-color", "#F90A0A");
                    }
                }

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
                font-family: sans-serif;
            }
            .container{
                color: black;
                height:580px;
                width:380px;
                box-shadow: 3px 3px ;
                top: 30px;
                position:absolute;
                left: 400px;
                border-color:black ;
                padding: 20px;
                border:1px solid black;
                background:linear-gradient(to top,rgba(20, 20, 20, 0.8)50%,rgba(20,20,20,0.8)50%);
                border-radius: 25px;
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


            .txt{
                padding-left:10px;
                margin:5px;
            }
        </style>

        <!-- Server side validation  -->
        <?php
        // Check if the form has been submitted
        if (isset($_POST['submit'])) {
            $err_secname='';
            $err_name = '';
            $err_nearby = '';
            $err_city = '';
            $err_state = '';
            $err_zip = '';
            // Get the form data and sanitize it
            $secname=$_POST['secname'];
            $_SESSION['sessecname']=$secname;
            $sname = $_POST["sname"];
            $nearby = $_POST["nearby"];
            $city = $_POST["city"];
            $state = $_POST["state"];
            $zip = $_POST["zip"];

            // Validate the form data
            if (!preg_match("/^[a-zA-Z ]{5,30}$/", $secname)) {
                $err_secname = "<p>Only letters and white space allowed</p>";
            }
            
            if (!preg_match("/^[a-zA-Z ]{5,20}$/", $sname)) {
                $err_name = "<p>Only letters and white space allowed</p>";
            }
            if (!preg_match("/^[a-zA-Z ]{5,20}$/", $nearby)) {
                $err_nearby = "<p>Only letters and white space allowed</p>";
            }
            if (!preg_match("/^[a-zA-Z]{2,28}$/", $city)) {
                $err_city = "<p>Only letters and white space allowed</p>";
            }
            if (!preg_match("/^[a-zA-Z ]{3,20}$/", $state)) {
                $err_state = "<p>Only letters and white space allowed</p>";
            }
            if (!preg_match("/^[0-9]{6}$/", $zip)) {
                $err_zip = "<p>Only 5 letters allowed</p>";
            }
            if ($err_name == '' && $err_city == '' && $err_nearby == '' && $err_state == '' && $err_zip == ''&& $err_secname=='') {

                $con = new mysqli("localhost", "root", "", "pratix") or die("Connection failed !");
                $sql = "INSERT INTO society(sid,secname,sname,city,state,nearby,pin,sphoto) VALUES(?,?,?,?,?,?,?,?)";
                $stmt = $con->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("isssssss",$sid, $secname,$sname, $city, $state, $nearby, $zip, $sphoto);
                    $sid=$_SESSION['seRid'];
//                    setcookie("CEsecretory", true, time()+60*60*24*365*10);
                    $sphoto="male.jpg";
                    $stmt->execute();
                    echo "<script>window.location.href='Dashboard.php'</script>";
                }
            }
        }
        ?>

    </head>
    <body>
        <div class="container">
            <center><table><tr><td>
                        <td><h1>&ensp;Create Society</h1></tr></table></center>
            <div class="form"> 

                <form method="post">
                    <input type="text" class="form val" placeholder="Enter full name" id="fname" name="secname" value="<?php if(isset($_POST['submit'])){echo $_POST['secname'];}?>">
                        <p class="txt" id="fname_no_val"><img src="Wrong.png" id="fname_no_img"> Only allow alphabet</p>
				<br class="fl1"><br class="fl1">

                    <input type="text"  class="form val" placeholder="Enter society name" id="sname" name="sname" value="<?php if (isset($_POST['submit'])) {
            echo $_POST['sname'];
        } ?>" required>
                    <p class="txt" id="sname_val"><img src="Wrong.png"  id="sname_img"> Only 5 to 20 alphabet</p><br class="b1"><br class="b1">
                    <?php if (isset($_POST['sname'])) {
                        echo $err_name;
                    } ?>
                    <input type="text" class="form val" placeholder="Enter city" id="city" name="city" value="<?php if (isset($_POST['submit'])) {
                        echo $_POST['city'];
                    } ?>" required>
                    <p class="txt" id="city_val"><img src="Wrong.png" id="city_img"> Only 5 to 20 alphabets</p><br class="b2"><br class="b2">
<?php if (isset($_POST['city'])) {
    echo $err_city;
} ?>
                    <input type="text" class="form val" placeholder="Enter state" id="state" name="state" value="<?php if (isset($_POST['submit'])) {
                        echo $_POST['state'];
                    } ?>" required>
                    <p class="txt" id="state_val"><img src="Wrong.png" id="state_img"> Only 5 to 20 alphabets</p><br class="b3"><br class="b3">
<?php if (isset($_POST['state'])) {
    echo $err_state;
} ?>
                    <input type="text" class="form val" placeholder="Enter nearby LandMark" id="nearby" name="nearby" value="<?php if (isset($_POST['submit'])) {
    echo $_POST['nearby'];
} ?>" required>
                    <p class="txt" id="nearby_val"><img src="Wrong.png" id="nearby_img"> Only 5 to 20 alphabets</p><br class="b4"><br class="b4">
<?php if (isset($_POST['nearby'])) {
    echo $err_nearby;
} ?>
                    <input type="text" class="form val" placeholder="Enter pincode" id="zip" name="zip" value="<?php if (isset($_POST['submit'])) {
    echo $_POST['zip'];
} ?>" required>
                    <p class="txt" id="zip_val"><img src="Wrong.png" id="zip_img"> Only 6 digits</p><br class="b5"><br class="b5">
<?php if (isset($_POST['zip'])) {
    echo $err_zip;
} ?>
                    <input type="submit" name="submit" class="btn" value="Submit">
                    </div>
                    </div>
                </form>
                </body>
                </html>