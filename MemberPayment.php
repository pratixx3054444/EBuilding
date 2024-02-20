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
                text-decoration: none;
                border: none;
                padding: 24px;
                width: 125px;
                height: 60px;
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
                left: 22%;
                margin-right: 20px;
                box-shadow: 0 .2rem .4rem #0005;
            }
            
            .sp{
                  font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                  font-size: 25px;
                  color: black;
            }
            
            .box{
                margin-left: 600px;
                background-color: #dfe1e5;
                padding: 20px;
                width: 300px;
                height: 300px;
                overflow-x: auto;
            }
            
            .heading{
                height: 30px;
                margin-left: 10px;
            }
            
            .notif{
                font-size: 30px;
                margin-top: 20px;
                cursor: pointer;
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

                
                
                $string="cost".$bhk;
                
                $sql4="SELECT $string as cost,mid FROM maintenance WHERE sid='$sid' AND MONTH(enddate)='$curdate' AND YEAR(enddate)='$curyear'";
                $result4 = mysqli_query($con, $sql4);
                if(mysqli_num_rows($result4)>0)
                {
                    $data4 = mysqli_fetch_assoc($result4);
                    $dcost=$data4['cost'];
                }
                $sql5 = "SELECT fname,fphoto,enddate FROM jsociety INNER JOIN maintenance ON jsociety.sid=maintenance.sid WHERE jid='$jid' AND MONTH(enddate)=MONTH(CURDATE()) AND YEAR(enddate)=YEAR(CURDATE()) AND jsociety.sid='$sid'";
                $result5 = mysqli_query($con, $sql5);
                if($data = mysqli_fetch_assoc($result5))
                {
                    $mname=$data['fname'];
                    $fphoto=$data['fphoto'];
                    $enddate=$data['enddate'];
                }
                else
                {
                    $sql5="SELECT fname,fphoto FROM jsociety WHERE jid='$jid' AND sid='$sid'";
                    $result5= mysqli_query($con, $sql5);
                    
                    if($data5= mysqli_fetch_assoc($result5))
                    {
                        $mname=$data5['fname'];
                        $fphoto=$data5['fphoto'];
                        $emp_m="<p class='card-title'>Maintenance is not set yet !</p>";
                    }
                }
            
            }
            ?>
        <div class="getup">
            <div class="wnavbar">
        <?php include './weatherReport.php'; ?>
            </div>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark db" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="MemberProfile.php">
                <span class="d-none sp d-lg-block"><img class="img-fluid img-profile prf rounded-circle mx-auto mb-2" src="<?php echo 'images//'.$fphoto ?>" alt="..." /><br><b><?php echo $mname; ?></b></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <?php include './MemberNavbar.php'; ?>
        </nav>
        
       
      
        
        
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h2>PAYMENT</h2>
                    <br><br>
                    <form method="POST">
                        <?php
                        
                        $qur="SELECT * FROM m_maintenance WHERE jid='$jid' AND MONTH(date)=MONTH(CURDATE()) AND YEAR(date)=YEAR(CURDATE()) AND pon='T'";
                        $data6= mysqli_query($con, $qur);
                        if($row= mysqli_fetch_assoc($data6))
                        {
                            echo '<p>Payment completed!</p><br><a class="bn" href="transactionHistory.php">View</a>';
                        }
                        else
                        {
                            ?>
                            <div class="payment">
                        <?php
                        if(!empty($emp_m))
                        {
                            die($emp_m);
                        }
                        ?>
                       
                            <h5 for="exampleInputUsername1">Pay </h5>
                            <input type="text" class="tbox" name="pay" value="<?php echo $dcost; ?>" disabled="" >
                            <br><br>
                            <h4 for="exampleInputUsername1">End date</h4>
                            <input type="text" class="tbox" disabled id="exampleInputUsername1" name="date" value="<?php echo $enddate; ?>">
                            <br>
                            <?php
                            if(!empty($added) && isset($_POST['submit']))
                            {
                                echo $added;
                            }
                            ?>
                            <br><br>
                            <input type="submit" id="rzp-button1" name="submit" class="bn" value="Pay">';
                            
                            <?php
                        }
                        ?>
                                 
<!--                            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_wKfma7IElolpws", // Enter the Key ID generated from the Dashboard
    "amount": "5000000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp", //your business name
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_MuIanarFIDIgsI", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>-->
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
          </div>
      </div></div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            var options = {
                "key": "rzp_test_wKfma7IElolpws", // Enter the Key ID generated from the Dashboard
                "amount": "<?php echo $remain * 100; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "currency": "INR",
                "name": "EBuilding",
                "description": "Maintenance Payment",
                "image": "./images/E-Building_image.jpg",
                //                "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the id obtained in the response of Step 1
                "handler": function(response) {
                    // console.log(response);

                    if (response.razorpay_payment_id) {
                        var pid = response.razorpay_payment_id;
                        $.ajax({
                            type: "POST",
                            url: "paymentSuccess.php",
                            data: {
                                pid: pid,
                                bhk: <?php echo $bhk; ?>,
                                cost: <?php echo $dcost; ?>,
                                sid: <?php echo $sid; ?>
                                
                            },
                            success: function(data) {
                                window.location.href = 'transactionHistory.php';
                            },
                            error: function() {
                                alert("An error occurred while adding the maintenance.");
                            }
                        });

                        var form = document.createElement("form");
                        form.method = "POST";

                        var pidInput = document.createElement("input");
                        pidInput.type = "hidden";
                        pidInput.name = "pid";
                        pidInput.value = pid;

                        form.appendChild(pidInput);

                        document.body.appendChild(form);
                        form.submit();
                    }
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.on('payment.failed', function(response) {
                alert(response.error.code);
                alert(response.error.description);
                alert(response.error.source);
                alert(response.error.step);
                alert(response.error.reason);
            });
            document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();

          
                       }
        </script>

<!--
      
      <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_wKfma7IElolpws", // Enter the Key ID generated from the Dashboard
    "amount": "5000000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp", //your business name
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_MwnhRgPdIH5XZc", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
};
</script>-->
       
                    <a target="_blank" href="https://wa.me/91<?php echo $mobileno; ?>"><img src="https://docs.smooch.io/images/channel-header-logos/logo_whatsapp.png" class="whatsapp" title="Open whatsapp chat" alt="Whatsapp chat"></a>
                    </div>
                    
                </div>
                
            </section>
            
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
