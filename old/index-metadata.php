
<!DOCTYPE html>
<html>
<body>

<h1>Hello this is metalab Admir</h1>

<?php
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

</body>
</html>