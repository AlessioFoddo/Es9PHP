<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        require_once("Automobile.php");

        $a1 = new Automobile("DaL", 2014, "Kurumi");
        $info = $a1->printInfo();
        echo "<h1> $info </h1>";

    ?>
</body>
</html>