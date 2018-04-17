<html>
<head>
	<title>
		test
	</title>
</head>
<body>

 <?php 
	
	$host="localhost";
	$user="Mayank";
	$passw="Mayank@123";
	$database="project";
	$table="user_details";
	extract($_POST);
    $user=$_POST['username'];
	$mysqli=new mysqli($host,$user,$passw,$database);
	 $query="SELECT username FROM $table  WHERE username='$username' AND password='$pass'";
	 $res=$mysqli->query($query);
	 	if($res->num_rows>0)
	 	{
	 		session_start();
	 		$_SESSION['Uname']=$user;
	 		header("location:subject.php");

	 	}
	 	else
	 		header("location:index.php");
 ?>
 </body>
 </html>