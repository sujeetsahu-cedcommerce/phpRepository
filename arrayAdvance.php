<?php
$products = array(
    "Electronics" => array(
      "Television" => array(
        array(
        "id" => "PR001",
        "name" => "MAX-001",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR002",
        "name" => "BIG-301",
        "brand" => "Bravia"
        ),
        array(
        "id" => "PR003",
        "name" => "APL-02",
        "brand" => "Apple"
        )
      ),
        "Mobile" => array(
        array(
        "id" => "PR004",
        "name" => "GT-1980",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR005",
        "name" => "IG-5467",
        "brand" => "Motorola"
        ),
        array(
        "id" => "PR006",
        "name" => "IP-8930",
        "brand" => "Apple"
        )
      )
    ),
    "Jewelry" => array(
      "Earrings" => array(
        array(
        "id" => "PR007",
        "name" => "ER-001",
        "brand" => "Chopard"
        ),
        array(
        "id" => "PR008",
        "name" => "ER-002",
        "brand" => "Mikimoto"
        ),
        array(
        "id" => "PR009",
        "name" => "ER-003",
        "brand" => "Bvlgari"
        )
      ),
      "Necklaces" => array(
        array(
        "id" => "PR010",
        "name" => "NK-001",
        "brand" => "Piaget"
        ),
        array(
        "id" => "PR011",
        "name" => "NK-002",
        "brand" => "Graff"
        ),
        array(
        "id" => "PR012",
        "name" => "NK-003",
        "brand" => "Tiffany"
        )
      )
    )
   );


echo "<table border='5px' width='1px'><tr><th>category</th><th>subcategory</th><th>id</th><th>name</th><th>brand</th></tr>";
foreach($products as $k1 => $v1)
{
    foreach($v1 as $k2 => $v2)
    {
        foreach($v2 as $k3 => $v3)
        {
            echo "<tr><td>".$k1."</td><td>".$k2."</td>";
            foreach($v3 as  $v4)
            {
                echo "<td>".$v4."</td>";
            }
            echo "</tr>";
        }
    }
}
echo "</table>";
echo "<br>";

echo "<table border='5px' width='1px'><tr><th>category</th><th>subcategory</th><th>id</th><th>name</th><th>brand</th></tr>";
foreach($products as $k1 => $v1)
{
    foreach($v1 as $k2 => $v2)
    {
        if($k2== "Mobile"){
            foreach($v2 as $k3 => $v3)
            {
                echo "<tr><td>".$k1."</td><td>".$k2."</td>";
                foreach($v3 as $k4 => $v4)
                {
                    echo "<td>".$v4."</td>";
                }
                echo "</tr>";
            }
        }
    }
}
echo "</table>";
echo "<br>";

// echo "<table border='5px' width='1px'><tr><th>category</th><th>subcategory</th><th>id</th><th>name</th><th>brand</th></tr>";
foreach($products as $k1 => $v1)
{
    foreach($v1 as $k2 => $v2)
    {
        // if($k2== "Mobile"){
            foreach($v2 as $k3 => $v3)
            {
                $count=0;
                // echo "<tr><td>".$k1."</td><td>".$k2."</td>";
                foreach($v3 as $k4 => $v4)
                {
                    if($count==0){
                        $a1=$v4;
                        $count++;
                    }
                    elseif($count==1){
                        $a2=$v4;
                        $count++;
                    }
                    else{
                        echo"brand :".$v4."<br>"."product id :".$a1."<br>"."product name :".$a2."<br>";}
                    // echo "<td>".$v4."</td>";
                }
                "</tr>";
                echo "sub-category :".$k2."<br>category :".$k1."<br><br>";;
            }
           
        // }
      
    }
    // echo "category :".$k1."<br>";
}
// echo "</table>";


echo "<table border='5px' width='1px'><tr><th>category</th><th>subcategory</th><th>id</th><th>name</th><th>brand</th></tr>";
foreach($products as $k1 => $v1)
{
    foreach($v1 as $k2 => $v2)
    {
        foreach($v2 as $k3 => $v3)
        {
            echo "<tr><td>".$k1."</td><td>".$k2."</td>";
            foreach($v3 as $k4 => $v4)
            {
                // if()
                echo "<td>".$v4."</td>";
            }
            echo "</tr>";
        }
    }
}
echo "</table>";
echo "<br>";
echo "<table border='5px' width='1px'><tr><th>category</th><th>subcategory</th><th>id</th><th>name</th><th>brand</th></tr>";

$index=0;
foreach($products as $k1 => $v1)
{
    foreach($v1 as $k2 => $v2)
    {
        foreach($v2 as $k3 => $v3){
          if($v3["id"]=="PR003"){
            unset($products[$k1][$k2][$k3]);
          }

        }
    }
}
echo "</table>";
echo "<br>";

echo "<table border='5px' width='1px'><tr><th>category</th><th>subcategory</th><th>id</th><th>name</th><th>brand</th></tr>";
foreach($products as $k1 => $v1)
{
    foreach($v1 as $k2 => $v2)
    {
        foreach($v2 as $k3 => $v3)
        {
            echo "<tr><td>".$k1."</td><td>".$k2."</td>";
            foreach($v3 as  $v4)
            {
                echo "<td>".$v4."</td>";
            }
            echo "</tr>";
        }
    }
}
echo "</table>";
echo "<br>";


echo "<table border='5px' width='1px'><tr><th>category</th><th>subcategory</th><th>id</th><th>name</th><th>brand</th></tr>";
foreach($products as $k1 => $v1)
{
    foreach($v1 as $k2 => $v2)
    {
        foreach($v2 as $k3 => $v3)
        {
            echo "<tr><td>".$k1."</td><td>".$k2."</td>";
            if($v3['id'] == 'PR002'){
                $v3['name'] ='BIG-500';
                foreach($v3 as  $v4)
            {
                echo "<td>".$v4."</td>";
            }
            echo "</tr>";
            }
            else{
                foreach($v3 as  $v4)
            {
                echo "<td>".$v4."</td>";
            }
            echo "</tr>";
            }
        }
    }
}
echo "</table>";

?>