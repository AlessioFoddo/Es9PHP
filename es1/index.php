
    <?php
        header("Content-Type: application/json");
        
        require_once("Alunno.php");

        $p1 = new Alunno("Kurumi", "Tokisaki", 18);
        $p2 = new Alunno("Ensohima", "Junko", 17);
        $p3 = new Alunno("Celena", "Yoru", 17);
        $p4 = new Alunno("Sayu", "Ogiwara", 16);
        $classe = array($p1, $p2, $p3, $p4);

        echo json_encode($classe);

    ?>