<?php
	$con = mysqli_connect("localhost","root","","mydb");
	// check connection
	if (mysqli_connect_error()){
        echo "Fail to connect to MySQL: " . mysqli_connect_error();
    }
?>
