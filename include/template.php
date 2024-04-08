<?php

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$title?></title>

    <link href="./assets/boxicons/css/boxicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="./CSS/<?=$css?>" />
    <link rel="stylesheet" href="./CSS/navbar.css" />
  </head>
  <body>
    <!-- ===================Header Design================= -->
    <header class="header">
      <a href="#"><img src="./logo.svg" class="logo" alt="logo" /></a>

      <i class="bx bx-menu" id="menu-icon"></i>
      <nav class="navbar">
        <a href="./index.php" id="home" class="nav <?php if($_SERVER['SCRIPT_NAME']=='/projetSalon/index.php'):?>active<?php endif;?>">Menu</a>
        <a href="./about.php" id="about" class="nav <?php if($_SERVER['SCRIPT_NAME']=='/projetSalon/about.php'):?>active<?php endif;?>">A propos</a>
        <a href="./service.php" id="services" class="nav <?php if($_SERVER['SCRIPT_NAME']=='/projetSalon/service.php'):?>active<?php endif;?>">Services</a>
        <a href="./RDV.php" id="reserve" class="nav <?php if($_SERVER['SCRIPT_NAME']=='/projetSalon/RDV.php'):?>active<?php endif;?>">Prends un RDV</a>
        <a href="./contact.php" id="contact" class="nav <?php if($_SERVER['SCRIPT_NAME']=='/projetSalon/contact.php'):?>active<?php endif;?>">Contact</a>
      </nav>
    </header>
    
    <?=$content?>
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2024 by codehal | All Rights Reserved</p>
      </div>
      <div class="footer-iconTop">
        <a href="./index.php"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>

    <!-- ================fin_Footer Design================================= -->

    <!-- =========================scroll reveal=================================== -->

    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ==========================typed JS========================================= -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <!-- ============================section JS================================= -->
    <script src="./JS/script.js"></script>
  </body>
</html>