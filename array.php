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
    ?>
</body>
</html>