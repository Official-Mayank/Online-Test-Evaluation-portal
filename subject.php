<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel = "stylesheet" 
 type = "text/css" 
 href = "subject.css"/>
<head>
	<title>Test Evaluation Portal</title>
</head>
<body>
	<div class="content-wrapper">
		<div class="main-content">
			<div class="nav" id="home">
			 	<ul>
			 		<li style="float:left; margin-left:30px; height:24px"><a href="#"><img src="image/1.png"></a></li>
			 	    <li style="float:left;"><a href="#">Test Evaluation</a></li>
			 	    <li><a href="#">Hello 
			 	    <?php
                            if(isset($_SESSION['Uname'])){
                            echo $_SESSION['Uname'];
                            }
			 	    ?></a>
			 	    </li>
			 	</ul>
			 </div>
		 </div>
	</div>
<div class="container-card">
<table id="t1">
<tr>
	<td><div class="card">
		<center>
			<a href="c_questions.php"><h1>C</h1></a>
		</center>
	</div>
	</td>
	<td>
	<div class="card">
		<center>
			<a href="c++_questions.php"><h1>C++</h1></a>
		</center>
	</div>
	</td>
	<td>
	<div class="card">
		<center>
			<a href="java_questions.php"><h1>JAVA</h1></a>
		</center>
	</div>
	</td>
	</tr>
</div>
<div class=questions>
</div>
 </body>

</html>