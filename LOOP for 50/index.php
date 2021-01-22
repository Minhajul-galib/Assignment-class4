<!DOCTYPE html>
<html>
<head>
	<title>LOOP for 50</title>

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
	<div class="loop1">
		<h1>
			
		</h1>
		
	</div>
	
	<div class="loop2">
		<h3>Increment i=10000</h3>
		<!-- INPUT FORM -->

		<form action="index.php" method="get">
			<input type="text" name="name" placeholder="NAME">
			<input type="number" name="number" placeholder="Greater then 10000">
			<input type="submit">
		</form>
		<br>

	<?php
	
	$name = $_GET["name"];
	$number = $_GET["number"];
	
$i =10001;
while ($i<=$number) {
	echo " I am $name i=$i<br>";
$i=$i+1;

}

?>
	</div>
	
	<div class="loop3">
	<h3>Decrement i=10000</h3>	
		<form action="index.php" method="get">
			<input type="text" name="Lname" placeholder="NAME">
			<input type="number" name="Lnumber" placeholder="Less then 10000">
			<input type="submit">
		</form>
		<br>

	<?php
	
	$Lname = $_GET["Lname"];
	
if ($Lnumber= 0) {
	echo "Put the value";
}
else{
	$Lnumber = $_GET["Lnumber"];
}
$i =10000;
while ($i>$Lnumber) {
	echo " I am $Lname i=$i<br>";
$i=$i-1;

}

?>		


	</div>
	<div class="loop4">
		<h1>
			
		</h1>
	</div>

	
</body>
</html>