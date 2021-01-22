<!DOCTYPE html>
<html>
<head>
	<title>12345</title>
	<!-- LINK CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<div class="time1">
	
</div>
<div class="time2">
	
	<!-- FORM of get input -->
		<form action="index.php" method="get">
			<input type="text" name="username" placeholder="Name">
			<input type="number" name="useryear" placeholder="Your year">
			<input type="submit">

		</form>
		<br>
<?php
	
	$i=1;

  echo "Time Table for 2:<br>";
  for($i=1; $i<=10; $i++){
    echo "2*".$i."=".($i*2)."<br>";


?>
</div>
<div class="time3">
	
</div>
</body>
</html>