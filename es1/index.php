<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        require_once("Alunno.php");

        $p1 = new Alunno("Kurumi", "Tokisaki", 18);
        $p2 = new Alunno("Ensohima", "Junko", 17);
        $p3 = new Alunno("Celena", "Yoru", 17);
        $p4 = new Alunno("Sayu", "Ogiwara", 16);
        $classe = array($p1, $p2, $p3, $p4);
        foreach ($classe as $alunno) {
            $info = $alunno->printInfo();
            echo "<h1> $info </h1>";
        }

    ?>
</body>
</html>