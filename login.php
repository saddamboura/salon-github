<?php
include "cnx.php";
session_start();
if ($_SESSION) {
    header('Location:./list.php');
}
$erreur = null;
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $mdp = $_POST['mdp'];
    

    $req= mysqli_query($link, "SELECT * FROM utilisateur where identifiant='$id' and mot_de_passe='$mdp'");
    if($req->num_rows>0){
        $_SESSION['id'] = $id;
        $_SESSION['mdp'] = $mdp;
        header('Location:./list.php');
    }else{
        $erreur = "Identifiant non éxistant";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body class="flex items-center justify-center h-screen bg-primary">
    <form action="" method="post">
    <div class="flex flex-col bg-white rounded-md p-2 w-perso items-center">
        <h1 class="mb-2">Se connecter</h1>
        <div class="mb-1">
            <p class="mb-1">Identifiant</p>
            <input type="text" class="rounded-md p-1" name="id">
        </div>
        <div class="mb-1">
            <p class="mb-1">Mot de passe</p>
            <input type="password" class="rounded-md p-1" name="mdp">
        </div>
        <?php if($erreur): ?>
            <span class="red"><?=$erreur?></span>
        <?php endif; ?>
        <div class="text-center">
            <input class="p-1 mt-1 bg-blue text-white cursor-pointer rounded-sm border-none" type="submit" value='Connection'>
        </div>
    </div>
    </form>
</body>
</html>