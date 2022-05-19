<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Write a PHP program using nested for loop that creates a chess board. 
 echo "<table width = '400px' border=1px>";
for($i=1;$i<=8;$i++)
{
    echo "<tr>";
    for($j=1;$j<=8;$j++)
    {
        
        if(($i+$j)%2==0)
        {
           echo "<td height=30px width=30px bgcolor=white>";
        }
        
        else
        {
           echo "<td height=30px width=30px bgcolor=black>";
        }
    }
    echo "</tr>";
}
echo "</table>"

?>
</body>
</html>