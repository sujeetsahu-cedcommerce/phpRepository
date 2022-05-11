<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity-Bill</title>
    <style>
        .adjust
        {
           margin:10px; 
        }
    </style>
</head>
<body>
    <!-- <form action="form.php" method="post">
        units :<input type="text" name="units"><br>
        <input type="submit">
    </form> -->
   <?php
    $units = $_POST['units'];
    Bill($units);
    function Bill($units){
        $rs = 0;
        if($units >=50){
            $rs = 50*3.50;
            $units = $units -50;
            if($units >= 100){
                $rs = $rs+(100*4.0);
                $units = $units -100;
                if($units >=100){
                    $rs = $rs+($units*5.20);
                    $units = $units -100;
                  
                    if($units >250){
                        $rs =$rs+($units*6.50);
                        $units =0;
                    }
                }
                else{
                    $rs=$rs + $units*5.20;
                    $units = 0;   
                }
            }
            else{
                $rs=$rs + $units*4.0;
                $units = 0;  
            }
        }
        else
        {
            $rs= $rs+$units*3.50;  
        }
        
    } 
    ?> 
    
    <?php
    $button=$_POST['button'];
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
    switch ($button){
        case'+':
            $result=$num1 + $num2;
            break;
        case'-':
            $result=$num1 - $num2;
            break;
        case'*':
            $result=$num1 * $num2;
            break;
        case'/':
            $result=$numb1 / $num2;
            break;
    }
   
    ?>  
    <form action="form.php" method="post">
        number1:<input type="text" name="number1" class="adjust" ><br>
        number2:<input type="text" name="number2" class="adjust" ><br>
        result :<input type="text" name="result"  class="adjust" value="<?php echo $result;?>"><br>
        <input type="submit" value="+" name="button" class="operator">
        <input type="submit" value="-" name="button" class="operator">
        <input type="submit" value="*" name="button" class="operator">
        <input type="submit" value="/" name="button" class="operator">
    </form>
</body>
</html>