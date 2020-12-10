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
<p style="color:white; font-size: 22px;">enter your details</p>
<ul style="color: white;"><li>submit to create a file</li>

</ul></div>

<form method="POST" enctype="multipart/form-data">
<input type="text" value="name" name="Name"><br>
<input type="text" value="city" name="city"><br>
<input type="text" value="age" name="age"><br>
<input type="text" value="roll" name="roll"><br><br>
<input type="submit" value="Submit"><br>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$n=$_POST['Name'].":".$_POST['city'].":".$_POST['age'].":".$_POST['roll']."\r\n";
$myfile=fopen("new 1.txt", "a");
fwrite($myfile,$n);
fclose($myfile);
echo("file created");
}
?>
	</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR: white ; COLOR: black;">
<?php
show_source("`lab6_exp1_code.php");
?>
</form>
</body>
</html>