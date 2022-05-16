<?php
session_start();
//include "phpg.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="phpgallery.php" method="post" enctype="multipart/form-data">
  <h1>Image Gallery</h1>
  <p>this page displays the list of uploaded images</p>
  <input type="submit" value="Upload More">

  <p>
      <a href="destroySession.php">Delete files</a>
  </p>

</form>
</body>
</html>

<div id='divImages'> 
    <?php
    foreach($_SESSION['images'] as $k)
    {
       echo '<span style="margin:10px"><img src="'.$k.'" style="width:100px; height:100px"></span>';
    } 
   
    ?>
  
    </div>
   
