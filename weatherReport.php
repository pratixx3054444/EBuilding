<div class="navbar-menu-wrapper">   
              <div class="weather-box">
                  <img src="./images/Cloud.jpg" class="weather">
                <font class="temprature"></font> 
                
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;
                
                        <?php
                        
                        $sql2="SELECT * FROM m_maintenance WHERE jid='$jid' AND MONTH(date)=MONTH(CURDATE()) AND YEAR(date)=YEAR(CURDATE()) AND pon='T'";
                        $data2= mysqli_query($con, $sql2);
                        
                        $sql6="SELECT message,DAY(date) as day FROM notifications WHERE sid='$sid' AND jid='$jid' AND DAY(date)=DAY(CURDATE())";
                        $data6= mysqli_query($con, $sql6);
                        if(mysqli_num_rows($data6)==0)
                        {
                            echo '<span class="material-symbols-outlined">
                    <p class="notif">notifications</p>
                </span>
                <div class="box">
                    <div class="heading">
                        <h5>Notifications</h5>
                    </div>
                    <hr>
                    <div class="body">
                <p>No notifications yet</p>';
                        }
                        else if(mysqli_num_rows($data6)>0){
                            
                            if(mysqli_num_rows($data2)==0)
                            {
                            echo '<script>
                            $(document).ready(function()
                            {
                                const audio=new Audio();
                                audio.src="./H42VWCD-notification.mp3";
                                audio.play();
                            });
                            </script>';
                            echo '<span class="material-symbols-outlined">
<p class="notif">notifications_active</p>
</span>
                               
<div class="box">
                    <div class="heading">
                        <h5>Notifications</h5>
                    </div>
                    <hr>
                    <div class="body">';
                            while($row4= mysqli_fetch_assoc($data6))
                            {
                                
                                echo '<span class="material-symbols-outlined">
                                sms
                                </span>&emsp;<font><b>'.$row4['day']."</b>&nbsp;".$row4['message']."<font><br>";
                            }
                            }
                            else
                            {
                                echo '<span class="material-symbols-outlined">
                    <p class="notif">notifications</p>
                </span>
                <div class="box">
                    <div class="heading">
                        <h5>Notifications</h5>
                    </div>
                    <hr>
                    <div class="body">
                <p>No notifications yet</p>';
                            }
                   }

                        ?>
                    </div>
                </div>
</div>
</div>
    
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />