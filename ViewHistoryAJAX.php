<?php
session_start();
$con=new mysqli('localhost','root','','pratix') or die("Connection failed !");

$year=$_POST['y'];
$month=$_POST['m'];
$sid=$_SESSION['sesSid'];


echo '<h3>PENDING PAYMENTS</h3>';
$sql="SELECT jid,cost,DAY(date) as ddate,DAYNAME(date) as dndate FROM m_maintenance,maintenance WHERE YEAR(date)=$year AND m_maintenance.sid=$sid AND MONTH(date)=$month AND pon='F'";
$result= mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0)
{
    echo "<table id='recent-purchases-listing' class='table'>
                                 <thead>
                                   <tr>
                                       <th>NAME</th>
                                       <th>COST</th>
                                       <th>FLAT NO
                                       <TH>FLOOR
                                       <TH>WING
                                       <TH>BHK
                                   </tr>
                                 </thead>
                                 <tbody>";
        while($data= mysqli_fetch_assoc($result))
        {
            $jid=$data['jid'];
            $sql2="SELECT fname,flat_number,floor_number,building_number,bhk from jsociety WHERE sid='$sid' AND jid='$jid'";
            $data2= mysqli_query($con, $sql2);
            if($stmt= mysqli_fetch_assoc($data2))
            {
                $fname=$stmt['fname'];
                $cost=$data['cost'];
                $flno=$stmt['flat_number'];
                $floorno=$stmt['floor_number'];
                $bno=$stmt['building_number'];
                $bhk=$stmt['bhk'];
                echo "<tr><td><b>".$fname."<td><b>".$cost."<td><b>".$flno."<td><b>".$floorno."<td><b>".$bno."<td><b>".$bhk."</tr>";
            }
    }
echo "</table><br><br>";
}
else
{
    echo "<br><p class='card-title'>No pending payment in selected month !</p>";
}


echo '<br>';
echo '<h3>EVENTS</h3>';
$sql2="SELECT ename,DAY(date) as ddate,DAYNAME(date) as dndate,uevent FROM events WHERE YEAR(date)=$year AND sid=$sid AND MONTH(date)=$month AND category='F' ";
$result2= mysqli_query($con, $sql2);
if(mysqli_num_rows($result2)>0)
{
 echo "<table id='recent-purchases-listing' class='table'>
                              <thead>
                                <tr>
                                    <th>DAY</th>
                                    <th>DAY</th>
                                    <th>NAME
                                    <th>IMAGE</th>
                                </tr>
                              </thead>
                              <tbody>";
while($data= mysqli_fetch_assoc($result2))
{
    $title=$data['ddate'];
    $description=$data['dndate'];
    $ddate=$data['ename'];
    $dndate=$data['uevent'];
    echo "<tr><td><b>".$title."<td><b>".$description."<td><b>".$ddate."<td><img class='dispimg' id='eimg' src='images/".$dndate."'></tr>";
}

echo "</table><br><br>";
}
else
{
    echo "<br><p class='card-title'>No events selected in this month !</p>";
}



echo '<br>';
echo '<h3>PRIVATE EVENTS</h3>';
$sql3="SELECT ename,DAY(date) as ddate,DAYNAME(date) as dndate,uevent FROM events WHERE YEAR(date)=$year AND sid=$sid AND MONTH(date)=$month AND category='P' AND status='T'";
$result3= mysqli_query($con, $sql3);
if(mysqli_num_rows($result3)>0)
{
 echo "<table id='recent-purchases-listing' class='table'>
                              <thead>
                                <tr>
                                    <th>DAY</th>
                                    <th>DAYNAME</th>
                                    <th>NAME
                                    <th>INVITATION</th>
                                </tr>
                              </thead>
                              <tbody>";
while($data= mysqli_fetch_assoc($result3))
{
    $title=$data['ddate'];
    $description=$data['dndate'];
    $ddate=$data['ename'];
    $dndate=$data['uevent'];
    echo "<tr><td>".$title."<td>".$description."<td>".$ddate."<td><img class='dispimg' id='eimg' src='images/".$dndate."'></tr>";
}

echo "</table><br><br>";
}
else
{
    echo "<br><p class='card-title'>No events selected in this month !</p>";
}

echo '<br>';
echo '<h3>COMPLAINTS</h3><br>';
$sql4="SELECT DAY(date) as ddate,category,description,fname,image,(SELECT fname from complaint LEFT JOIN jsociety ON jsociety.sid=complaint.sid AND jsociety.jid=complaint.cjid AND jsociety.sid='$sid') as tfname FROM complaint,jsociety WHERE YEAR(date)='$year' AND complaint.sid='$sid' AND MONTH(date)='$month' AND status='F'";
$result4= mysqli_query($con, $sql4);
if(mysqli_num_rows($result4)>0)
{
 echo "<table id='recent-purchases-listing' class='table'>
                              <thead>
                                <tr>
                                    <th><b>DAY</th>
                                    <th><b>IMAGE</th>
                                    <th><b>CATEGORY
                                    <th><b>FROM</th>
                                    <th><b>TO</th>
                                </tr>
                              </thead>
                              <tbody>";
while($data= mysqli_fetch_assoc($result4))
{
    $ddate=$data['ddate'];
    $category=$data['category'];
    $fname=$data['fname'];
    $tfname=$data['tfname'];
    $image=$data['image'];
    $description=$data['description'];
    
    echo "<tr><td>".$ddate."<td><img id='eimg' class='dispimg' src='images//".$image."'><td>".$category;
    echo "<td>".$fname;
    if($tfname==null)
    {echo "<td>None";}  
    else
    {
    echo "<td>".$tfname;
    }
    echo '</tr>';
    
}

echo "</table><br><br>";
}
else
{
    echo "<br><p class='card-title'>No events selected in this month !</p>";
}
?>
