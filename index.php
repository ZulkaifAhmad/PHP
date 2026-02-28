<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <?php
        echo "<h1>Welcom to PHP</h1>";
        echo "<br>";
        $firstVariable = "myFirstVariable";
        echo "<h1>" . $firstVariable . "</h1>";

        // operations with variables
        
        $num = 2 ;
        $num2 = 3;

        $storeResults = $num + $num2 ;
        echo $storeResults;

        // increment
        echo "<br>";
        echo $num++ ;
        echo "<br>";
        echo $num;
        echo "<br>";
        
        // check type of variables 
        
        $num = 23 ;
        $string = "This is string";
        $bool = true;
        $array = ["hello" , "how " ,23];

        echo gettype($num);
        echo "<br>";
        echo gettype($string);
        echo "<br>";
        echo gettype($bool);
        echo "<br>";
        echo print_r($array);
        echo "<br>";

        // logical operations

        echo (true and true);
        echo "<br>";
        $newVar =  (true and false);
        echo var_dump($newVar);

        echo "<br>";

        echo (true xor true) // false
        echo (false xor false) // false and the rest is true

        echo "<br>";

        


    ?>
    
</body>
</html>