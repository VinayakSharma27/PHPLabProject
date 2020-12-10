<html>
<head><style>
body{
  color: white;
  background-image: url("1.LABBG.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}
</style></head>
<body>
<div class="div3"><p style="text-align: center; font-size: 48px; color: white ; ,margin-top: 30px;">QUESTION:</p>
<p style="color: white; font-size: 22px;">enter an array</p>
<ul style="color: white;"><li> max</li>
<li>min</li>
</ul></div>
<?php
echo "<form method='POST'><input type='text' name='finput'><input type='submit' value='Submit'></form>";
if($_SERVER['REQUEST_METHOD']=="POST")
{
$a=$_POST['finput'];
$arr=explode(",", $a);
$max=$arr[0];
for($i=0;$i<7;$i++)
{
if($arr[$i]>$max)
{
	$max=$arr[$i];
}
}
echo("The max is: ".$max);
echo "<br>"; 
$mi=$arr[0];
for($i=0;$i<7;$i++)
{
if($arr[$i]<$mi)
{
	$mi=$arr[$i];
}
}
echo("The mi is: ".$mi); 
}
?>
	</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR: white; COLOR: black;">
<?php
show_source("qlab4&5_exp1_code.php");
?>
</body>
</html>