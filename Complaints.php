<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body{

	background-color: #eee; 
}
.container{
	width: 900px;
}

.card{
	background-color: #fff;
	border:none;
	border-radius: 10px;
	width: 200px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

.image-container{
	position: relative;
}

.thumbnail-image{
	border-radius: 10px !important;
}


.discount{

	background-color: red;
	padding-top: 1px;
	padding-bottom: 1px;
	padding-left: 4px;
	padding-right: 4px;
	font-size: 10px;
	border-radius: 6px;
	color: #fff;
}


.first{

	position: absolute;
	width: 100%;
	    padding: 9px;
}


.dress-name{
	font-size: 13px;
	font-weight: bold;
	width: 75%;
}


.new-price{
	font-size: 13px;
	font-weight: bold;
	color: red;
	
}
.old-price{
	font-size: 8px;
	font-weight: bold;
	color: grey;
}

.creme{
	background-color: #fff;
	border: 2px solid grey;
	

}
.creme:hover {
	border: 3px solid grey;
}

.creme:focus {
	background-color: grey;

}


.red{
	background-color: #fff;
	border: 2px solid red;
	
}


.red:hover {
	border: 3px solid red;
}
.red:focus {
	background-color: red;
}



.blue{
	background-color: #fff;
	border: 2px solid #40C4FF;
}

.blue:hover {
	border: 3px solid #40C4FF;
}
.blue:focus {
	background-color: #40C4FF;
}
.darkblue{
	background-color: #fff;
	border: 2px solid #01579B;
}
.darkblue:hover {
	border: 3px solid #01579B;
}
.darkblue:focus {
	background-color: #01579B;
}
.yellow{
	background-color: #fff;
	border: 2px solid #FFCA28;
}
.yellow:hover {
	border-radius: 3px solid #FFCA28;
}
.yellow:focus {
	background-color: #FFCA28;
}


.item-size{
	width: 15px;
	height: 200px;
	border-radius: 50%;
	background: #fff;
	border: 1px solid grey;
	color: grey;
	font-size: 10px;
	text-align: center;
	align-items: center;
	display: flex;
	justify-content: center;
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
                margin-top: 20px;
                margin-left: 30px;
                width: 250px;
                height: 30px;
                border-left: 1px solid #0d6efd;
                border-radius: 3px;
                padding: 15px;
                border-right: 1px solid #0d6efd;
                border-top: 1px solid #0d6efd;
                border-bottom-color: #0d6efd;
                outline-color: #0d6efd;
            }
            
            #txt1,#txt2,#txt3,#txt4,#txt5,#txt6{
                color: red;
                margin-left: 40px;
            }
            
            .bn{
                border: none;
                padding: 10px;
                width: 20px;
                height: 10px;
                color: white;
                font-family: "montserrat",sans-serif;
                text-transform: uppercase;
                border-radius: 6px;
                cursor: pointer;
                font-weight: bold;
                background-color: #0d6efd;
                text-decoration: none;
            }
            
            .getright{
                right: 70px;
                position: fixed;
                top: 120px;
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
            
            .bn2{
                outline: none;
                border: none;
                padding: 24px;
                width: 170px;
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
            window.onunload()=function (){null;};
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script>
	$(document).ready(function()
	{
            $("#recent").show();
            $("#search").change(function()
            {
                $("#recent").hide();
                var y=$("#search").val();
                $.ajax({
                    type:"POST",
                    url:"customizeComplaint.php",
                    data:{'y':y},
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
    </script>
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
                    <div class="resume-section-content">
                    <form method="POST">
                  <div class="table-responsive">
                      <div class="form-group">
                    <br>
                    <br><h2>COMPLAINTS</h2>                       
                    <select id="search" class="bn2">
                        <option value="All">All</option>
                        <option value='Plumbing'>Plumbing
                        <option value='Electricity'>Electricity
                        <option value='Parking'>Parking
                        <option value='Garden'>Garden
                        <option value='Other'>Other
                    </select>
                    <br><br>
                    <h2>Pending</h2>
                    
                    <div class="container mt-5">
                        <div class="row" id="recent">
                    <?php
        
                        $curdate= date("m");
                        
                        $query = "SELECT DAY(c.date) AS day,c.cid,c.image,j.fname AS jid,cj.fname AS cjid,c.category,
    c.description FROM complaint c JOIN jsociety j ON c.sid = j.sid AND c.jid = j.jid
LEFT JOIN
    jsociety cj ON c.sid = cj.sid AND c.cjid = cj.jid AND MONTH(c.date) = MONTH(CURDATE()) AND YEAR(c.date) = YEAR(CURDATE())
WHERE
    c.sid = '$sid'
    AND MONTH(c.date) = MONTH(CURDATE())
    AND YEAR(c.date) = YEAR(CURDATE())
    AND status='F';";
                        $result2 = mysqli_query($con, $query);
                        
                       
                            if(mysqli_num_rows($result2)>0)
                            {
                                while ($data = mysqli_fetch_assoc($result2))
                                {
                                    $cid=$data['cid'];
                    ?>
                      
                

    		<div class="col-md-6">
    				<div class="card">

    					<div class="image-container">

    						<div class="first">
    							
    							<div class="d-flex justify-content-between align-items-center">

    						    </div>
    						</div>

    						<img src="images//<?php  echo $data['image'] ?>" class="img-fluid rounded thumbnail-image">
    						

    					</div>


    					<div class="product-detail-container p-2">
                                            <h5>date : <?php echo $data['day']; ?></h5>
                                            <h5><?php echo $data['jid'];  ?></h5>
                                            <h5><?php echo $data['cjid']; ?></h5>
                                            
                                            <h6 style="color:red"><?php echo $data['category'] ?></h6>
                                            <p style="color:black"><?php echo $data['description']; ?></p>
                                            <a class='bn' href='updateComplaintStatus.php?cid=<?php echo $cid?>'>Resolve</a>
                                        </div>
    				</div>
                </div>
<?php
                                }
                            }
                            else{
                                echo 'No complaints';
                            }
?>
    </div>
                    </div>
                    <br><br>
                    
                    
                    <div id="data">
                    
                    </div>
                    
                    <h2>Resolved</h2>
                    <!--Complaint which are resolved-->
                                        <div class="container mt-5">
                        <div class="row" id="recent">
                    <?php
        
                        
                        $query2 = "SELECT DAY(c.date) AS day,c.cid,c.image,j.fname AS jid,cj.fname AS cjid,c.category,
    c.description FROM complaint c JOIN jsociety j ON c.sid = j.sid AND c.jid = j.jid
LEFT JOIN
    jsociety cj ON c.sid = cj.sid AND c.cjid = cj.jid AND MONTH(c.date) = MONTH(CURDATE()) AND YEAR(c.date) = YEAR(CURDATE())
WHERE
    c.sid = '$sid'
    AND MONTH(c.date) = MONTH(CURDATE())
    AND YEAR(c.date) = YEAR(CURDATE())
    AND status='T';";
                        $result3 = mysqli_query($con, $query2);
                        
                       
                            if(mysqli_num_rows($result3)>0)
                            {
                                while ($data = mysqli_fetch_assoc($result3))
                                {
                                    $cid=$data['cid'];
                    ?>
                      
                

    		<div class="col-md-6">
    				<div class="card">

    					<div class="image-container">

    						<div class="first">
    							
    							<div class="d-flex justify-content-between align-items-center">

    						    </div>
    						</div>

    						<img src="images//<?php  echo $data['image'] ?>" class="img-fluid rounded thumbnail-image">
    						

    					</div>


    					<div class="product-detail-container p-2">
                                            <h5>date : <?php echo $data['day']; ?></h5>
                                            <h5><?php echo $data['jid'];  ?></h5>
                                            <h5><?php echo $data['cjid']; ?></h5>
                                            
                                            <h6 style="color:red"><?php echo $data['category'] ?></h6>
                                            <p style="color:black"><?php echo $data['description']; ?></p>
                                        </div>
    				</div>
                </div>
<?php
                                }
                            }
                            else{
                                echo 'No complaints are resolved!';
                            }
?>
    </div>
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
