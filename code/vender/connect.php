<?php

    $connect = mysqli_connect('localhost:3307', 'root', 'root', 'test');

    if (!$connect) {
        die('Error connect to DataBase');
    }