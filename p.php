<?php
$sushi=$_REQUEST['sushi'];
echo "sushi=$sushi <br>"; 
$kilkist=$_REQUEST['kilkist'];
echo "kilkist=$kilkist <br>"; 
$result=$_REQUEST['result'];
echo "result=$result <br>"; 
$fp=fopen("s.txt","a");
fputs($fp,"$sushi\t$kilkist\t$result\t");
fclose($fp);
?>
