<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        require("Studente.php");

        $s1 = new Studente("Kurumi", "Tokisaki", "1234tk");
        $info = $s1->presentati();
        echo "<h1> $info </h1>";

    ?>
</body>
</html>