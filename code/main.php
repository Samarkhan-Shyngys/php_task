<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: /');
}
include_once('vender/connect.php');
$contacts = mysqli_query($connect, "SELECT * FROM `contacts` ");


?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <div class="Mycard">
      <table style="width:95%">
        <thead>
          <h4 class="h4Label">Мои данные</h4>
          <tr>
            <th>Почта</th>
            <th>Телефон</th>
            
            
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><?= $_SESSION['user']['email'] ?></td>
            <td><?= $_SESSION['user']['phone'] ?></td>
            
          </tr>
        </tbody>
      </table>
    </div>
    <?php
        if (mysqli_num_rows($contacts) > 0) {
    ?>
    <table style="width:95%">
      <thead>
        <h4 class="h4Label">Контакты</h4>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
        <tr>
       
        
          <th>Имя</th>
          <th>Фамилия</th>
          <th>Телефон</th>
          <th></th>
          
        </tr>
        
      </thead>
      <tbody>
      <?php
        $i=0;
        while($row = mysqli_fetch_array($contacts)) {
            
      ?>  
        <tr>
          <p type=hidden>  
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["lastname"]; ?></td>
          <td><?php echo $row["phone"]; ?></td>
          
          <form class="form" action="vender/add.php" method="post">

          <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
          <td><input class="button1" type="submit" name="select" size="30" value="Добавить"></td>
          </form>
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
        echo "No result found"; 
    }
    ?>
    
    
  </body>
</html>