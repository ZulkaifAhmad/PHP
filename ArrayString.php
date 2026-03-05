<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array and String</title>
</head>
<body>
    <?php
        echo " <h1> Array And Strings </h1> ";

        $firstArray = array("PHP", "JavaScript", "Python");
        // var_dump($firstArray);
        // echo "<br>";
        // print_r($firstArray);
        foreach($firstArray as $arr){
            echo "<ul>
            <li> $arr </li>
            </ul>";
        }

        // associative array
        $associative = array(
            "name" => "ali",
            "age" => 24
        );
        echo $associative["name"] . "<br>";
        echo $associative["age"] . "<br><br>";

        // multidimational array 

        $data = [
            ["ali" , 22 , "computer"],
            ["mohsin" , 32 , "pk"],
            ["raza" , 21 , "islmyat"],
        ];

        print_r($data);

    ?>
</body>
</html>