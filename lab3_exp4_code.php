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
	<body><div class="div3"><p style="text-align: center; font-size: 48px; color: white  ; ,margin-top: 30px;">QUESTION:</p>
<p style="color:white  ; font-size: 22px;">enter the numbers</p>
<ul style="color: white ;"><li>to find prime no</li>

</ul></div><br><br>


<form method="POST">
number 1:
<input type="text" name="number1" value="">
number 2:
<input type="text" name="number2" value="">
<input type="submit" value="Submit">
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$var1= $_POST['number1'];
	$var2=$_POST['number2'];
	function div5($a, $b){
		for($i=$a; $i<$b; $i++)
		{if($i%5==0)
			echo $i."<br>";
		}
	}
	div5($var1, $var2);
	echo "Prime numbers between ".$var1." and ".$var2." are: "; 
	while ($var1< $var2)
    {
        $flag = 0;
        for($i = 2; $i <= $var1/2; ++$i)
        {
            if($var1 % $i == 0)
            {
                $flag = 1;
                break;
            }
        }

        if ($flag == 0)
            echo $var1."<br>" ;

        ++$var1;
    }
}
?>
</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR: white ; COLOR: black;">
<?php
show_source("lab3_exp4_code.php");
?>