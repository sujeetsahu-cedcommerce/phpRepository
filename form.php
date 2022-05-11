<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity-Bill</title>
</head>
<body>
    <form action="form.php" method="post">
        units :<input type="text" name="units"><br>
        <input type="submit">
    </form>
    <?php
    
    $units = $_POST['units'];
    // echo $units;
   
    Bill($units);
    function Bill($units){
        $rs = 0;
        if($units >=50){
            $rs = 50*3.50;
            $units = $units -50;
            //  echo $rs .",".$units."<br>"; 
            if($units >= 100){
                $rs = $rs+(100*4.0);
                $units = $units -100;
                //  echo $rs .",".$units."<br>";
                if($units >=100){
                    $rs = $rs+($units*5.20);
                    $units = $units -100;
                    // echo $rs .",".$units."<br>";
                    if($units >250){
                        $rs =$rs+($units*6.50);
                        $units =0;
                    }
                }
                else{
                    $rs=$rs + $units*5.20;
                    $units = 0;
                    // echo $rs .",".$units."<br>";
                }
            }
            else{
                $rs=$rs + $units*4.0;
                $units = 0;
                // echo $rs .",".$units."<br>";
            }
        }
        else
        {
            $rs= $rs+$units*3.50;
            // echo $rs .",".$units."<br>";
        }
        echo "bill =".$rs;
    }
    ?>
</body>
</html>