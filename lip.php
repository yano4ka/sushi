<html>
<head>
</head>
<body>
<H1> Замовлення суші </H1>
<table border=2>
<tr> <td>sushi</td> <td>kilkist</td> <td>result</td> </tr>
<?php
$fp=fopen("s.txt","r");
if ($fp)

   {
       while(!feof($fp))

    {
       $stroka=fscanf($fp,"%s\t %s\t %d\t %d\n");
       list($sushi,$kilkist,$result)=$stroka;
        //$kilkist=fscanf($fp,"%d\t");
        //$result=fscanf($fp,"%d\n");
echo "<TR><td>$sushi/td><td>$kilkist</td> <td>$result</td> </TR>";
}
fclose($fp);

}
?>
</body>
</html>
