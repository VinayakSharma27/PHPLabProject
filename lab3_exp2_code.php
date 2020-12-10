<html>
<head>
<style>
input[type=submit]{
background-color: #f44336;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;	
}
body{
  color: white;
  background-image: url("1.LABBG.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}
</style>
<title>
calculator
</title>
</head>
<body>
<center>
<h1>Arithmetic calculator </h1>
<form method="POST">
Please Enter 1st number: <input type='text' maxlength='5' name='finput'>
Please Enter 2nd number: <input type='text' maxlength='5' name='sinput'><br><br>
<input type="submit" value="+" name="add">
<input type="submit" value="-" name="sub">
<input type="submit" value="*" name="mul">
<input type="submit" value="/" name="div">
<br>
</form>
<?php
if(isset($_POST['add']))
{
	$input1=$_POST['finput'];
	$input2=$_POST['sinput'];
	echo ("the sum is ".$input1+$input2);
}
if(isset($_POST['sub']))
{
	$input1=$_POST['finput'];
	$input2=$_POST['sinput'];
	echo ("the diff is".$input1-$input2);
}
if(isset($_POST['mul']))
{
	$input1=$_POST['finput'];
	$input2=$_POST['sinput'];
	echo ("the multiplication is ".$input1*$input2);
}
if(isset($_POST['div']))
{
	$input1=$_POST['finput'];
	$input2=$_POST['sinput'];
	echo ("the division is ".$input1/$input2);
}
?>
</center>
</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR: white ; COLOR: black;">
<?php
show_source("lab3_exp2_code.php");
?>
</body>
</html>