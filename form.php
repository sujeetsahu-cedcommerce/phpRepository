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
       #btn
        {
            margin-top:2%;
            margin-left:7%;
        }
        #res{
            margin-left:2.7%;
        }
        #LEN{
            margin-left:2%;
        }
        #WID{
            margin-left:2.3%;
        }
        #cal{
            margin-top:2%;
            margin-left:14.2%;
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
    <!-- <form action="form.php" method="post">
        number1:<input type="text" name="number1" class="adjust" ><br>
        number2:<input type="text" name="number2" class="adjust" ><br>
        result :<input type="text" name="result"  id="res" value="<?php echo $result;?>"><br>
        <div id="btn"><input type="submit" value="+" name="button" class="operator">
        <input type="submit" value="-" name="button" class="operator">
        <input type="submit" value="*" name="button" class="operator">
        <input type="submit" value="/" name="button" class="operator"></div>
    </form>
     -->
     <?php
     
     $l = $_POST['length'];
     $w = $_POST['width'];
     $area = $l*$w;
     $perimeter = 2*($l+$w);
     
     ?>

     
     <!-- <form action="form.php" method="post">
         length of rectangle <input type="text" name="length" id="LEN">mtr<br>
         width of rectangle  <input type="text" name="width"  id="WID">mtr<br>
         <input type="submit" value="Calculate Area & Perimeter" id="cal"><br>
         Area of rectangle  <input type="text" name="area" value="<?php echo $area?>">mtr<br>
         
         perimeter of rectangle  <input type="text" name="area" value="<?php echo $perimeter?>">mtr<br>
         <div><p></p>
             <p></p>
        </div>
     </form> -->


      

     <?php
     $hr=$_POST['hour'];
     $button=$_POST['btn'];
     $convert;
     switch($button){
         case'minute':
            $convert = 60*$hr;
         
            break;
         case'second':
            $convert =60*60*$hr;
          
            break;
        default:
            echo "";

     }
     ?>
<div style="padding-left:30%;padding-top:15%">
     <form action="form.php" method="post">
         <div ><input type="text" name="hour" style=" margin-left:20%;height:10%"></div><br><br><br>
         <input type="radio" value="minute" name='btn' style=" margin-left:20%">hours to mins <br>
         <input type="radio" value="second" name='btn' style=" margin-left:20%">hours to sec  <br><br><br><br>
         <div style=" margin-left:20%;" ><?php echo $convert;?></div>
         <input type="submit" value="convert" style=" margin-left:20%;margin-top:6%">
    </form>
    </div>
    

     <?php
     
     ?>
    
    


</body>
</html>

