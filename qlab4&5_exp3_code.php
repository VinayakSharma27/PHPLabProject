<html>
<head>
<style>
body{
  color: white;
  background-image: url("1.LABBG.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}
</style></head>
<body>
<div class="div3"><p style="text-align: center; font-size: 48px; color: white  ; ,margin-top: 30px;">QUESTIONS</p>
<p style="color: white ; font-size: 22px;">enter an name</p>
<ul style="color: white ;"><li> to check no of vowels</li>

</ul></div>
<form method="POST">
<input type="text" name="name">
<input type="submit" value="Submit">
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$a=$_POST['name'];
$arr=explode(" ",$a);
echo ("<br>the number of whitespaces are: " .(sizeof($arr)-1)."<br>");
$arr1=strtoupper($a);
$vowels=array("A","E","I","O","U");
$len=strlen($arr1);
$c=0;
for($i=0;$i<$len;$i++)
{
if(in_array($arr1[$i], $vowels))
	{
		$c++;
	}
}
echo ("Number of vowels are:" .$c."<br>");
echo $arr1;
}
?>
	</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR: white; COLOR: black  ;">
<?php
show_source("qlab4&5_exp3_code.php");
?>