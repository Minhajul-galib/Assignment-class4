<!DOCTYPE html>
<html>
<head>
	<title>PHP Class 3(1st) if else</title>

	<!-- link with css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- font link -->
	<link rel="stylesheet" type="text/css" href="font/font-awesome/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>
<div class ="div1" >
<h1>
	
</h1>
</div>
<div class="div2">

	<!-- Form for get Input -->
		<form action="index.php" method="get">
		<input type="text" name="username" placeholder="Your Name">		
		<input type="number" name="result" placeholder="Your Result">		
		<input type="text" name="gender" placeholder="Female/Male">		
		<input type="submit">
		</form>
		<br>

<?php

 $name = $_GET["username"];
 $people = $_GET["gender"];
 $marks = $_GET["result"];

$rel ='';
if ($people == 'Female') {
	$rel = "Apu";
}
elseif ($people == 'Male') {
	$rel ="Vaia";
}
else{
	$rel = "Please put the right value Female/Male";
}

 if ($marks >=0 && $marks <=2){

	echo "<span style='color:#000000;'><h1>Please, put the value.</h1></span>";
}
elseif ($marks >=3 && $marks <=39) {

	echo "<span style='color:#641E16;'><h1>$name <span style='color:#8E44AD'>$rel</span> we are sorry to saying you that, you have failed. Please, try again. You got $marks</h1></span>";
}
elseif ($marks >=40 && $marks <=49) {
	echo "<span style='color:#1D8348;'><h1>$name <span style='color:#8E44AD'>$rel</span> you passed with name D Grade. You got $marks</h1></span>";
}

elseif ($marks >=50 && $marks <=59) {
	echo "<span style='color:#0E6251'><h1>$name <span style='color:#8E44AD'>$rel</span> you passed with C Grade. You got $marks</h1></span>";
}
elseif ($marks >=60 && $marks <=69) {
	echo "<span style='color:#21618C'><h1>$name <span style='color:#8E44AD'>$rel</span> you passed with name  B Grade. You got $marks</h1></span>";
}
elseif ($marks >=70 && $marks <=79) {
	echo "<span style='color:#154360'><h1>$name <span style='color:#8E44AD'>$rel</span> you passed with name A Grade. You got $marks</h1></span>";
}
elseif ($marks >=80 && $marks <=89) {
	echo "<span style='color:#1C2833'><h1>$name <span style='color:#8E44AD'>$rel</span> you passed with name A+ Grade</h1></span>";
}
elseif ($marks >=90 && $marks <=100) {
	echo "<span style='color:#5B2C6F'><h1>$name $rel you are our <span style='color:#F5B041'>Gold.</span> You got $marks</h1></span>";
}
else{
	echo "<span style='color:#900C3F'><h1>$name are you sure! Please, put the right value</h1></span>";
}
?>
	
	<!-- link with jquery	 -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script>
		
	</script>
</div>
<div class="div3">
<h1>
	
</h1>
</div>
<h2>Minhajul Islam Galib</h2>

<button class="btn"><a href="result sheet class3(2nd)" target="_blank">Result Sheet</a></button>

<button class="btn1"><a href="CHADA" target="_blank">Year Restricted</a></button>

<button class="btn2"><a href="CHADA" target="_blank">User Membership</a></button>

<button class="btn3"><a href="CHADA" target="_blank">LOOP for 50</a></button>

<button class="btn4"><a href="CHADA" target="_blank">For loop 3in &11</a></button>

<button class="btn5"><a href="CHADA" target="_blank">CHANDA</a></button>

<button class="btn6"><a href="CHADA" target="_blank">FOR loop 12345</a></button>


</body> 
</html>	
