<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<p>Сложение двух чисел</p>
<form action="index.php" name="myform" method="post"> 
       <input type="text" name="chisloa" size="5" maxlength="5" value="Число a">
       <input type="text" name="chisloa" size="5" maxlength="5" value="Число b">
<input name="Submit" type=submit value="Сложить"> 
</form>
	<?php
	$a= $_POST['chisloa']; 
	echo $a;
	$b=$_POST['chislob'];
	echo $b;
	$sum=$a+$b;
	echo $sum;
	?>
</body>
</html>