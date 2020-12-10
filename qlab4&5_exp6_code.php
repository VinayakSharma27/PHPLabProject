<html>
<head>
</head><style>
body{
  color: white;
  background-image: url("1.LABBG.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}</style>
	<body><div class="div3"><p style="text-align: center; font-size: 48px; color:white ; ,margin-top: 30px;">QUESTIONS</p>
<p style="color:white ; font-size: 22px;">enter the marks</p>
<ul style="color: white ;"><li>to find average</li>

</ul></div>

<body>
<form method="POST">
<input type="text" value="Name"><br>
<input type="text" value="rnum"><br>
<input type="text" value="math score"><br>
<input type="text" value="sci score"><br>
<input type="text" value="eng score"><br>
<input type="text" value="lang score"><br>
<input type="text" value="msc score"><br>
<input type="submit" value="Submit"><br>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$n=$_POST['name'];
	$rn=$_POST['rnum'];
	$m=$_POST['math'];
	$s=$_POST['sci'];
	$e=$_POST['eng'];
	$l=$_POST['lang'];
	$ms=$_POST['msc'];
	function average($m,$s,$e,$l,$ms){
    $sum=$m+$s+$e+$l+$ms;
	$avg=$sum/5;
	echo "Average marks are: ".$avg."<br>";
	if($avg>=90){echo "your grade is O";}
	if($avg>=70&&$avg<90){echo "your grade is A";}
	if($avg>=60&&$avg<70){echo "your grade is B";}
	if($avg>=50&&$avg<60){echo "your grade is C";}
	if($avg<50){echo "your grade is F";}
	}
	average($m,$s,$e,$l,$ms);	
}
?>
</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR:white; COLOR: black;">
<?php
show_source("qlab4&5_exp6_code.php");
?>
