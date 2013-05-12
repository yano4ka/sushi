<html>
<head>
<title>Stoumost_zakaza</title>
</head>
<body>
<H1> Замовлення суші </H1>
<table border=2>
<tr> <td>name</td><td>kilkist</td> <td>result</td> </tr>
<?php
$fp=fopen("P.txt","r");
if ($fp)

   {
       while(!feof($fp))

    {
       $stroka=fscanf($fp,"%s\t %s\t %d\t %d\n");
       list($name,$kilkist,$result)=$stroka;
        //$kilkist=fscanf($fp,"%d\t");
        //$result=fscanf($fp,"%d\n");
echo "<TR><td>$name</td><td>$kilkist</td> <td>$result</td> </TR>";
}
fclose($fp);

}
?>
</body>
</html>
<a href="calculator.html"> kalk</a>
</body>
</html>
