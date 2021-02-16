<?php 
//connect to db
$conn = mysqli_connect('localhost', 'root' , 'Abdo@2020' , 'php');
	// check the connection 
	if(!$conn){
		echo 'connection error :'. mysqli_connect_error();
	}
 ?>