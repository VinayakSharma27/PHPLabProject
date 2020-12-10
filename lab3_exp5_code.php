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
</style>
</head>
<body>
<form>
Enter the berth : <input type="number" name="number">
<button type="submit" name="Sub" value="Enter">Enter</button>
</form>
<?php  
if (isset($_GET['Sub'])){
$num=$_GET['number'];

function berth_type($s)  
{  $ans=0;
    if ($s > 0 && $s < 73) 
    {  $ans=$s%8;
        switch($ans)
        {
            case 1: echo("lower birth");break;
            case 2: echo("Middle birth");break;
            case 3: echo("Upper birth");break;
            case 4: echo("lower birth");break;
            case 5: echo("Middle birth");break;
            case 6: echo("Upper birth");break;
            case 7: echo("Side lower birth");break;
            case 0: echo("Side Upper birth");break;
        }
       
    } 
    else
    { 
        echo "invalid seat";
    } 
}  
berth_type($num);
}
?>
</div>
<DIV CLASS="DIV2" STYLE="BACKGROUND-COLOR: white ; COLOR: black;">
<?php
show_source("lab3_exp4_code.php");
?> 
</body>
</html>