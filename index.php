<!DOCTYPE html>
<html>
<body>

<h1>PHP Jenkins test page</h1>

<?php
echo "<b>Ovo je testna php stranica. </b> \n <br>";
echo "<b>Admir Osmanovic </b> \n <br>";
echo "<b>Ovo je testna web stranica </b> \n <br>";
echo "HH Inc. \n <br> <br>";

echo "<b>Instance ID: </b> ";
$instance_id = file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");
echo $instance_id, "\n <br>";
echo "<b>Instance Region: </b>";
$instance_region = file_get_contents("http://169.254.169.254/latest/meta-data/placement/availability-zone");
echo $instance_region, "\n <br>";

echo "<b>Instance Private-IP: </b>";
$instance_private_ip = file_get_contents("http://169.254.169.254/latest/meta-data/hostname");
echo $instance_private_ip, "\n <br>";

?> 

  <div align=center>
    <h2>Watchdog</h2>
    
    <img src="doge.jpg" >
   </div>
  
</body>
</html>


