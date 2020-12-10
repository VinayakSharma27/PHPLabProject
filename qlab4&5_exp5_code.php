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
<p style="color:white ; font-size: 22px;">enter the array</p>
<ul style="color: white ;"><li>use,to diffrentiate</li>

</ul></div>

<form method="POST">
<input type="text" name="number"><br>
<input type="submit" value="Submit"><br>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
function evens($a){
	$n=count($a);
	for($i=0;$i<$n; $i++)
	{
		if($a[$i]%2==0){
		$arr1[$i]=$a[$i];
		}
	}
	sort($arr1);
	for($i=0; $i<count($arr1); $i++){
	echo $arr1[$i]." ";
}
}
function odds($a){
	$n=count($a);
	for($i=0;$i<$n; $i++)
	{
		if($a[$i]%2!=0){
		$arr2[$i]=$a[$i];
		}
	}
	sort($arr2);
	for($i=0; $i<count($arr2); $i++){
    echo $arr2[$i]." ";
}
}
$a1=$_POST['number'];
$arr=explode(",",$a1);
$arr1=array();
$arr2=array();
evens($arr);




odds($arr);

}
?>
	</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR:white; COLOR: black;">
<?php
show_source("qlab4&5_exp5_code.php");
?>