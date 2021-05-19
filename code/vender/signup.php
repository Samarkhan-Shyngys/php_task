<?php

    session_start();
    require_once 'connect.php';

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    

    if ($pass === $pass2) {


        mysqli_query($connect, "INSERT INTO `user` (`email`, `phone`, `pass`) VALUES ('$email', '$phone', '$pass')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>