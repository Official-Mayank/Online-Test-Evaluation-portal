<html>
<link rel = "stylesheet" 
 type = "text/css" 
 href = "final.css">
<head>
	<title>
		c Questions
	</title>
	<meta charset="utf-8">
</head>
<body>
<div class="content-wrapper">
		<div class="main-content">
			<div class="nav" id="home">
			 	<ul>
			 		<li style="float:left; margin-left:30px; height:24px"><a href="subject.php"><img src="image/1.png"></a></li>
			 	    <li style="float:left;"><a href="#">Test Evaluation</a></li>
			 	</ul>
			 </div>
		 </div>
	</div>
	<div class="card">
	<div class="card-text">
<?php
	$host="localhost";
	$user="Mayank";
	$passw="Mayank@123";
	$database="project";
	$table="cp_questions";
	$count = 1;
	$correctAns = 0;
	extract($_POST);

	$mysqli=new mysqli($host,$user,$passw,$database);
	$query = "SELECT answer FROM $table";

	$sql = $mysqli->query($query);
	while($row = $sql->fetch_row()) {
		$ans = "ans" . $count;

		if($$ans == $row[0]) {
			$correctAns++;
		}

		$count++;
	}

	echo "<h1> You answered $correctAns questions correctly.</h1>"
?>
</div>
</div>
</body>
</html>