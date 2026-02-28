<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional statments</title>
</head>
<body>
    <?php

    echo "<h1>Conditional Statments</h1>";

    $age = 16;

    if ($age >= 18) {
        echo "You are an adult.";
    } else {
        echo "You are not an adult.";
    }
    echo '<br>';
    $day = "Monday";

    switch ($day) {
    case "Monday":
        echo "Start of the week";
        break;
    case "Friday":
        echo "Weekend is near";
        break;
    default:
        echo "Normal day";
    }
echo '<br>';
    $username = "admin";
    $password = "1234";

    if ($username == "admin" && $password == "1234") {
        echo "Login Successful";
    } else {
        echo "Invalid Credentials";
    }
echo '<br>';

    ?>

    <?php
$age = 20; 

switch (true) {
    case ($age < 16):
        echo "You are too young to drive.";
        break;

    case ($age >= 16 && $age < 18):
        echo "You can drive with a learner's permit.";
        break;

    case ($age >= 18 && $age < 70):
        echo "You are eligible for a full driving license.";
        break;

    case ($age >= 70):
        echo "You may need to renew your driving license and take medical tests.";
        break;

    default:
        echo "Invalid age.";
}
?>
</body>
</html>