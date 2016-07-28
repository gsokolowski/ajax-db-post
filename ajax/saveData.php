<?php

    require '../db/database.php';

    if ( isset($_POST['name']) === true && isset($_POST['location']) === true) {

        $name = $_POST['name'];
        $location = $_POST['location'];

        // insert data
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO names (name,location) values(?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$location));
            Database::disconnect();

        print_r($_POST);
    }
