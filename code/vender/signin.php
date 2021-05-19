<?php

    session_start();
    require_once 'connect.php';

    $phone = $_POST['phone'];
    $pass = $_POST['pass'];

    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `phone` = '$phone' AND `pass` = '$pass'");
    
    if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "email" => $user['email'],
        "phone" => $user['phone']
    ];

    header('Location: ../main.php');

    } else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../index.php');
    }
?>

<pre>
<?php
print_r($check_user);
print_r($user);
?>
</pre>
