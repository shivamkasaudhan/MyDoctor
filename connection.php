<?php

    $database= new mysqli("localhost","root","bittu7755","easymed");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>