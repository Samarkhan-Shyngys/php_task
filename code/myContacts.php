<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: /');
}
include_once('vender/connect.php');
$myPhone = $_SESSION['user']['phone'];
$mycontacts = mysqli_query($connect, "SELECT * FROM `mycontacts` WHERE `myPhone` = '$myPhone'");


?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>contact</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto|Roboto Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styleTransport.css"/>
    </head>
    <body>
        
        <section id="navbar">
          <nav class="navbar navbar-expand-lg navbar-light">
              <a id="logo" class="navbar-brand" href="/main.php">Главная страница</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item"><a class="nav-link" href="/myContacts.php">Избранное</a></li>
                      
                      <li class="nav-item"><a class="nav-link" href="vender/logout.php">Выйти</a></li>
                  </ul>
              </div>
          </nav>
        </section>
        
        <div class="two">
            <?php
            if (mysqli_num_rows($mycontacts) > 0) {
            ?>
            <table style="width:95%">
                <thead>
                    <h4 class="h4Label">Мои избранное контакты</h4>
      
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Телефон</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($mycontacts)) {
                ?>  
                <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    
                </tr>
            <?php
                $i++;
            }
            ?>              
                </tbody>
            </table>
            <?php
                }
                else{
                echo "у вас нету избранное контакты"; 
                }
            ?>
    
            
            
        </div>

  </body>
</html>