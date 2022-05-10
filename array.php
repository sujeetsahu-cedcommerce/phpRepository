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
//    Write a PHP script that inserts a new item in an array in any position
    $item =array(1,2,3,4,5);
    $insert =array("$");
    $item_length =count($item);
    echo "original array :";
    foreach($item as $x){
       echo $x." ";
    }
    echo "<br> After inserting '$' the array is:<br>";
    array_splice($item,3,0,$insert);
    foreach($item as $y){
        echo $y." ";
    }

    // Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
    echo "<br>";
    $temp = array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
    $sum=array_sum($temp);
    echo "<br>Average Temperature is : ".number_format($sum/count($temp),1);
    $unique =array_unique($temp);
    sort($unique);
    echo "<br> List of five lowest temperatures :";
    for($i=0; $i<5; $i++){
        echo $unique[$i]." ";
    }
    echo "<br> List of five highest temperatures :";
    $u = array_slice($unique,-5,5);
    for($i=0; $i<5; $i++){
        echo $u[$i]." ";
    }
    
    // Write a PHP program to filter out some elements with certain key-names.
     
    $array1 =array("c1"=>"Red","c2"=>"Green","c3"=>"White","c4"=>"Black");
    $array2 =array("c2","c4");

    $result = array_diff_key($array1,array_flip($array2));
    print_r($result);

    ?>
</body>
</html>