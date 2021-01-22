<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>User membership</title>
	<!-- link css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- LINK font -->
	<link rel="stylesheet" type="text/css" href="font/font-awesome/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&family=Satisfy&display=swap" rel="stylesheet">
	
</head>
<body>
	<div class="member1">
		<h1>
			
		</h1>
	</div>
	<div class="member2">
	<h3>Credit: 01, 02, 03, 04</h3>	
		<form action="index.php" method="get">
			<input type="text" name="name" placeholder="NAME">
			<input type="number" name="Credit" placeholder="Credit">
			<input type="submit">
		</form>
		<br>
<?php

	$fullname = $_GET["name"];
	$credit = $_GET["Credit"];

switch ($credit) {
	case '01':
		echo "<h1>Hello! $fullname. You are in group A</h1>";
		break;
	case '02':
		echo "<h1>Hello! $fullname. You are in group B</h1>";
		break;
	case '03':
		echo "<h1>Hello! $fullname. You are in group C</h1>";
		break;
	case '04':
		echo "<h1>Hello! $fullname. You are in group B</h1>";
		break;
	default:
		echo "<h1>Please put the right value</h1>";
		break;
}

?>
		
	</div>
	<div class="member3">
		<h1>
			
		</h1>
	</div>
	<h2>Minhajul Islam Galib</h2>
	<button class="btn1"><a href="CHADA" target="_blank">চাঁদা  Switch</a></button>

</body>
</html>