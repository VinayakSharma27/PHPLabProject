<html>
<head>
<style>
h1 {
  color: white;
}
body{
  color: white;
  background-image: url("1.LABBG.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}
</style>
</head>
<body>
<div class="div3"><p style="text-align: center; font-size: 48px; color: white ; ,margin-top: 30px;">QUESTION:</p>
<p style="color: white; font-size: 22px;">Design a page having Text-box for input and submit button and write a script</p>
<ul style="color: white;"><li> number is even or odd</li>
<li>to print table of entered number</li>
<li>to find sum of square of digits of entered number</li></ul></div>
<div class="div1" style="background-color: white; color: black;">
<form method="POST">
Input: <input type='text' maxlength='5' name='finput'>
<input type='submit' name='Submit' value='Submit'>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$input1=$_POST['finput'];
function evenodd($input1)
{
	$a=$input1%2;
	if($a==0)
		echo " A. The number you entered is even <br><br>";
	else
		echo "A. The number you entered is odd <br><br>";
}
function table($input1)
{
	echo "B. The table of ".$input1." is: <br>";
	for($i=1; $i<=10; $i++)
	{   
		echo $input1 ."*". $i ."=". $input1*$i. "<br>";
	}
	echo "<br><br>";
}
function square($input1)
{ 
    $sum=0;
	for($i=1; $i<=2; $i++)
	{
	$s=$input1%10;
	$sum=$sum+$s*$s;
	$input1/=10;
	}
	echo "C. Sum of square of the number you entered is " .$sum. "<br>";
}
evenodd($input1);
table($input1);
square($input1);
}
?>
</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR: white ; COLOR: black;">
<?php
show_source("lab3_exp1_code.php");
?>
</body>
</html>

