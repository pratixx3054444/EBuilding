<?php
session_start();

$sid=$_SESSION['seRid'];
$con=new mysqli('localhost','root','','pratix') or die("Connection failed");

echo '<div class="row">';
    $category=$_POST['y'];
    $curdate= date("m");

    if($category==='All')
    {
        $query = "SELECT
    DAY(c.date) AS day,
    c.cid,
    c.image,
    j.fname AS jid,
    cj.fname AS cjid,
    c.category,
    c.description
FROM
    complaint c
JOIN
    jsociety j ON c.sid = j.sid AND c.jid = j.jid
LEFT JOIN
    jsociety cj ON c.sid = cj.sid AND c.cjid = cj.jid AND MONTH(c.date) = MONTH(CURDATE()) AND YEAR(c.date) = YEAR(CURDATE())
WHERE
    c.sid = '$sid'
    AND MONTH(c.date) = MONTH(CURDATE())
    AND YEAR(c.date) = YEAR(CURDATE());";
        
    }else
    {
        $query = "SELECT
    DAY(c.date) AS day,
    c.cid,
    c.image,
    j.fname AS jid,
    cj.fname AS cjid,
    c.category,
    c.description
FROM
    complaint c
JOIN
    jsociety j ON c.sid = j.sid AND c.jid = j.jid
LEFT JOIN
    jsociety cj ON c.sid = cj.sid AND c.cjid = cj.jid AND MONTH(c.date) = MONTH(CURDATE()) AND YEAR(c.date) = YEAR(CURDATE())
WHERE
    c.sid = '$sid'
    AND category='$category'
    AND MONTH(c.date) = MONTH(CURDATE())
    AND YEAR(c.date) = YEAR(CURDATE())
    AND status='F';";
}
    
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
                                echo '<p>No complaints</p>';
                            }
?>
    </div>
