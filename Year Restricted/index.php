<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Year Restricted</title>
	<!-- LINK of css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- LINK of font -->
	<link rel="stylesheet" type="text/css" href="font/font-awesome/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&family=Satisfy&display=swap" rel="stylesheet">
	<!-- LINK of img -->
	<link rel="stylesheet" type="text/css" href="img">
</head>
<body>
	<div class="Restricted1">
		<h1>
			
		</h1>
	</div>
	<div class="Restricted2">
		
		<!-- FORM of get input -->
		<form action="index.php" method="get">
			<input type="text" name="username" placeholder="Name">
			<input type="number" name="useryear" placeholder="Your year">
			<input type="submit">

		</form>
		<br>

<?php
	$name = $_GET["username"];
	$year = $_GET["useryear"];

	if ($year >= 0 && $year <=0.5) {
		echo "<span style='color:#117A65;'><h1>Please, put the value.</h1></span>";
	}
	elseif ($year >= 20 && $year <=35) {
		echo "<span style='color:#6C3483;'><h1>$name Welcome to our new world!!</h1></span> ";
	}
	else{
		echo "<span style='color:#EC7063;'><h1>$name this group is only for those people whom year is 20 to 35</span></h1>";
	}
?>
	</div>
	<div class="Restricted3">
		<h1>
			
		</h1>
	</div>
	<h2>Minhajul Islam Galib</h2>
	<button class="btn1"><a href="CHADA" target="_blank">চাঁদা  Switch</a></button>
</body>
</html>