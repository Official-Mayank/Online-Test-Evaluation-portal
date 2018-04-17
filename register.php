<?php 
	
	$host="localhost";
	$user="Mayank";
	$passw="Mayank@123";
	$database="project";
	$table="user_details";
	extract($_POST);

	$mysqli=new mysqli($host,$user,$passw,$database);
		
	 $query="INSERT INTO $table values('$username','$pass','$fullname','$email')";
	 $res=$mysqli->query($query);
	 header("location:index.php");

?>