<?php

    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto|Roboto Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleTransport.css"/>
  </head>
  <body>
    <table>
      <tr>
        <h1 id="logo">Контакты</h1>
      </tr>
      <tr>
        <form class="form" action="vender/signin.php" method="post">
          <label for="phone"><b>Номер телефона:</b></label><br>
          <input type="text" name="phone" size="40" placeholder="">
          <br><br>
          <label for="password"><b>Пароль:</b></label><br>
          <input type="password" name="pass" size="40" placeholder="">
          <br> <br>
          <input class="button1" type="submit" name="login" size="30" value="Войти">
        </form>
        <br><br>
          <a id="registerLabel" href="/register.php"> У вас нет аккаунта?</a>
          <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
      </tr>
    </table>
  </body>
</html>