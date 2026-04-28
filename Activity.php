<!DOCTYPE html>
<html>
<body>

<head>

<h1>Final Activty 2</h1>

<div class= "Activity-box">
	<h2>Activity 1: Basic output</h2>

<?php
echo "Name:Margaux S. Royo <br>";
print "Course: BSIT 1X</br>";

echo"The symbol used to end PHP statement is semicolon(;)<br>";
echo"Echo is faster than print<br>";

?>
</div>

<div class= "Activity-box">
	<h2>Activty 2: Multiple Outputs</h2>

<?php
echo "Welcome Mahal!<br>";
echo "I love my husband<br>";
echo "Basta mahal ko sya<br>";
?>

</div>

<div class= "Activity-box">
	<h2>Activty 3: Declaring Variables</h2>

<?php
$name = "Marga";
$age = 20;

echo "Name: ". $name . "<br>";
echo "age: " . $age;
?>

</div>

<div class= "Activity-box">
	<h2>Activty 4: Variable Rules</h2>

<?php
$name = "Marga";
$age = 19;

echo $age;
?>

</div>

<div class= "Activity-box">
	<h2>Activty 5: Arithmetic Operators</h2>

<?php
$a = 10;
$b = 3;

echo"Addition: " . ($a + $b) . "<br>";
echo"Subtraction: " . ($a - $b) . "<br>";
echo"Multiplication: " . ($a * $b) . "<br>";
echo"Division: " . ($a / $b);
?>

</div>

<div class= "Activity-box">
	<h2>Activty 6: Assignment Operators</h2>

<?php
$x = 5;
$x += 3;

echo "The output is: $x";
?>

</div>

<div class= "Activity-box">
	<h2>Activty 7: Comparison Operators</h2>

<?php
$a = 10;
$b = 5;

var_dump($a > $b);
var_dump($a == $b);
?>

</div>

<div class= "Activity-box">
	<h2>MINI PROJECT</h2>

<?php

echo "num1 = 8<br>";
echo "num2 = 4<br><br>";

$num1 = 8;
$num2 = 4;

echo "Sum: " . ($num1 + $num2) . "<br>";
echo "Difference: " . ($num1 - $num2) . "<br>";
echo "Product: " . ($num1 * $num2) . "<br>";
echo "Qoutient: " . ($num1 / $num2);

?>

</div>

</body>
</html>
