<?php

    $server = "localhost";
    $host = "root";
    $password = "";
    $dbname = "reseausocialesgi";

    try {
        $db = new PDO ("mysql:host=$server;dbname=$dbname", $host , $password);
        //echo "ok!";
    } catch (PDOException $message) {
        echo "errorrr" . $message->getMessage();
        
    }

        /*$con = mysqli_connect("localhost","root", "", "reseausocialesgi");
        if($con == false) {
            die("con error" . mysqli_connect_error());
        } //else { echo "ok";}*/

?>