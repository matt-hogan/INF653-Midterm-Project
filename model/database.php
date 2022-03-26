<?php
    $dsn = "mysql:host=acw2033ndw0at1t7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; dbname=i80o0p3vudg01ue9";
    $username = "sv2j447g56es8odf";
    $password = "td5fr9r22cehoad2";

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include("view/error.php");
        exit();
    }