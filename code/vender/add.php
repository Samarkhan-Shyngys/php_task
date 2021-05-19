<?php

    session_start();
    require_once 'connect.php';

    

    $id = $_POST['id'];
    $check_contact = mysqli_query($connect, "SELECT * FROM `contacts` WHERE `id` = '$id'");
    
    

    $contact = mysqli_fetch_assoc($check_contact);
    $myPhone = $_SESSION['user']['phone'];
    $name = $contact['name'];
    $lastname = $contact['lastname'];
    $phone = $contact['phone'];
    $check_mycontact = mysqli_query($connect, "SELECT * FROM `mycontacts` WHERE `phone` = '$phone'");
    if(mysqli_num_rows($check_mycontact) ==0){
        
        mysqli_query($connect, "INSERT INTO `mycontacts` (`myPhone`, `name`, `lastname`,`phone`) VALUES ('$myPhone', '$name', '$lastname', '$phone')");
        header('Location: ../myContacts.php');
    
    }else{
        $_SESSION['message'] = 'Номер уже добавлен';
        header('Location: ../main.php');
    }

    

?>