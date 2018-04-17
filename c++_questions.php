<html>
<link rel = "stylesheet" 
 type = "text/css" 
 href = "Questions.css"/>
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
<div class="upper-text">
	<h1>C++ Programming</h1>
</div>
<?php 
	
	$host="localhost";
	$user="Mayank";
	$passw="Mayank@123";
	$database="project";
	$table="cp_questions";
	$count = 1;
	extract($_POST);

	$mysqli=new mysqli($host,$user,$passw,$database);
		
	 $query="SELECT question_no,question,option1,option2,option3,option4 FROM $table";
	 $res=$mysqli->query($query);
	 if($res->num_rows>0)
	 {
	 	echo "<div class='questions' id='questions'>";
	 	echo "<h3>Select one from the following:</h3>";
	 	echo "<br>";
	 	echo "<form action='final_c++.php' method='post'>";
	 	while($row=$res->fetch_row())
	 	{
	 		echo "$row[0] $row[1]<br>";
	 		echo "<input type='radio' name='ans" . $count . "' value='1'>$row[2]<br>";
	 		echo "<input type='radio' name='ans" . $count . "' value='2'>$row[3]<br>";
	 		echo "<input type='radio' name='ans" . $count . "' value='3'>$row[4]<br>";
	 		echo "<input type='radio' name='ans" . $count . "' value='4'>$row[5]<br>";
	 		echo "<br>";
	 		$count++;
	 	}
	 	echo "<input type='submit' id='s-button'value='Submit'>";
	 	echo "</form>";
	 	echo "</div>";
	 }

 	$query1="SELECT answer FROM $table";

?>

</body>
</html>