<?php 
//connect to db
$conn = mysqli_connect('localhost', 'root' , '' , 'php');
	// check the connection 
	if(!$conn){
		echo 'connection error :'. mysqli_connect_error();
	}
 ?>
