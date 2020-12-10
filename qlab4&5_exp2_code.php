<html>
<head>
</head><style>
body{
  color: white;
  background-image: url("1.LABBG.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}
</style>
	<body><div class="div3"><p style="text-align: center; font-size: 48px; color: white ; ,margin-top: 30px;">QUESTIONS</p>
<p style="color:white; font-size: 22px;">enter your name</p>
<ul style="color: white;"><li>select gender</li>
</ul></div>
<form method="POST">
<input type="text" name="name" placeholder="enter your name"><br>
<input type="radio" name="gender" value="Male">Male<br>
<input type="radio" name="gender" value="Female">Female<br>
<input type="radio" name="gender" value="Other">Other<br>
<input type="submit" value="Submit"><br>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$a=$_POST['name'];
$gen=$_POST['gender'];
$arr=explode(" ",$a);
if($gen=="Male")
{
	echo ("Mr " .$a."<br>");
}
if($gen=="Female")
{
	echo ("Ms " .$a."<br>");
}
echo ("<br>First name: ".$arr[0]. "<br>");
echo ("Middle name: ".$arr[1]. "<br>");
echo ("Last name: ".$arr[2]. "<br>");
}
?> 
	</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR: white; COLOR: black;">
<?php
show_source("qlab4&5_exp2_code.php");
?>