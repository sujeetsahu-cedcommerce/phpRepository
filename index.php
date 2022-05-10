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

for($i=5 ;$i<=15; $i++)
{
    echo $i."<br>";
}

// Write a program to perform sum or addition of two numbers in PHP programming.

$num1=10;
$num2=20;
echo $sum= $num1+$num2."<br>";

// Write a program to print “Welcome to the PHP World” using some part of the text in variable & some part directly in echo.

$x="to the PHP";
echo "Welcome". $x ." "."World"."<br>";

// Write a program to print 2 php variables using single echo statement.

$first ="hello";
$second ="sujeet";
echo $first." ".$second."<br>";

// Write a program to check student grade based on the marks using if-else statement.

$marks =rand(1,100);
if($marks >=60){
    echo "first Division"."<br>";
}
elseif($marks>=45 && $marks<=59){
    echo "second division"."<br>";
}
elseif($marks>=33 && $marks<=44){
    echo "third division"."<br>";
}
else{
    echo "fail"."<br>";
}

?>
</body>
</html>
