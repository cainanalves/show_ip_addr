<?php
	$mac = "http://169.254.169.254/latest/meta-data/network/interfaces/macs/";
	$mac1 = file_get_contents($mac);
	$url = "http://169.254.169.254/latest/meta-data/network/interfaces/macs/$mac1/public-ipv4s";
	$instance_id = file_get_contents($url);
 	echo "<h1><br/><br/><p align='center'>IP: $instance_id </p></h1>";
?>


