<html>
<head>
<style>
body{
  color: green;
  background-image: url("1.LABBG.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}
</style></head>
<body>
<div class="div3"><p style="text-align: center; font-size: 48px; color: white ; ,margin-top: 30px;">QUESTION:</p>
<p style="color: white; font-size: 22px;">Design a page having Text-box for input and submit button and write a script</p>
<ul style="color: white;"><li> call by value</li>
<li>call by reference</li>
</ul></div>
<div class="div1" style="background-color: black; color: white;">
<form method="POST">
number1:
<input type="text" name="number1">
number2:
<input type="text" name="number2">
<button name="cbv">Call by Value </button>
<button name="cbr">Call by Reference </button>

<?php
if(isset($_POST['cbv']))
{
	$var1= $_POST['number1'];
	$var2=$_POST['number2'];
	function swap($a,$b)
	{
		$t=$a;
		$a=$b;
		$b=$t;
		echo "<br>The numbers you entered are ".$a." and ".$b;
	}
	swap($var1, $var2);
}
if(isset($_POST['cbr']))
{
	$var1= $_POST['number1'];
	$var2=$_POST['number2'];
	function swap(&$a,&$b)
	{
		$t=$a;
		$a=$b;
		$b=$t;
		echo "<br>The numbers you entered are ".$a." and ".$b;
	}
	swap($var1, $var2);
}

	?>
	</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR: white; COLOR: BLUE;">
<?php
show_source("lab3_exp3_code.php");
?>
	