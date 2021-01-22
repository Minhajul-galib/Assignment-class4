<!DOCTYPE html>
<html>
<head>
	<title>CHADA with switch</title>
	<!-- CSS link -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- FONT css -->
	<link rel="stylesheet" type="text/css" href="font/font-awesome/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&family=Satisfy&display=swap" rel="stylesheet">
	<!-- MEDIA link -->
	<link rel="stylesheet" type="text/css" href="img">
</head>
<body>

	<div class="CHADA">
		<h1>
			
		</h1>
		
	</div>
	
	<div class="CHADA1">
		<!-- INPUT FORM -->

		<form action="index.php" method="get">
			<input type="text" name="name" placeholder="NAME">
			<input type="number" name="number" placeholder="Taka">
			<input type="submit">
		</form>
		<br>
	<?php

	$fullname = $_GET["name"];
	$taka = $_GET["number"];


if ($taka >=0 && $taka <=2) {

	echo "<span style='color:#641E16;'><h1>put the value </h1></span>";
}
elseif ($taka >=21 && $taka <=40) {
	echo "<span style='color:#1D8348;'><h1>$fullname আপনার কাছে $taka টাকা থেকে বেশি আশা করেছি </h1></span>";
}

elseif ($taka >=41 && $taka <=60) {
	echo "<span style='color:#0E6251'><h1>$fullname Thank you ভাই $taka টাকা থেকে বেশি দেওয়ার দোয়া রইল </h1></span>";
}
elseif ($taka >=61 && $taka <=80) {
	echo "<span style='color:#21618C'><h1>$fullname আপনার ভালো হোক</h1></span>";
}
elseif ($taka >=81 && $taka <=100) {
	echo "<span style='color:#FFFFFF'><h1>$fullname আপনাকে অসংখ্য ধন্যবাদ</h1></span>";
}
elseif ($taka >=101 && $taka <=100000000000) {
	echo "<span style='color:#5B2C6F'><h1>$fullname ভাই আপনি আমাদের <span style='color:#F5B041'>Gold.</span> You got $marks</h1></span>";
}
else{
	echo "<span style='color:#900C3F'><h1>$fullname ভাই আপনি কিভাবে $taka দিলেন</h1></span>";
}

	?>

	</div>
	
	<div class="CHADA2">
		<h1>
			
		</h1>
	</div>

	<h2>Minhajul Islam Galib</h2>

<button><a href="http://localhost/Class4(1st%20assignment)" target="_blank">Home Page</a></button>
</body>
</html>