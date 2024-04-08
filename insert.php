<?php
include "cnx.php";
$mssg = "";

if(isset($_POST["nom"]) && isset($_POST["mail"]) && isset($_POST["phone"]) && isset($_POST["categorie"]) && isset($_POST["date"]) && isset($_POST["time"]) && isset($_POST["message"]))
{
    $nom= $_POST["nom"];
    $mail= $_POST["mail"];
    $phone= $_POST["phone"];
    $categorie= $_POST["categorie"];
    $date= $_POST["date"];
    $time= $_POST["time"];
    $message= $_POST["message"];


    $req= mysqli_query($link, " insert into user(nom,mail,tel,cat,date,time,message) values ('$nom', ' $mail', '$phone', '$categorie', '$date', '$time', ' $message') ");

    if($req)
    {
        $mssg= " Insertion effectuée";
    }
    else
    {
        $mssg= "erreur d'insertion";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <title>Insertion</title>
    <style>
        .flex{
            display:flex;
            align-items: center;
            justify-content: center;
            flex-direction : column;
        }
        .alert{
            border-radius:20px;
            padding : 20px;
            background: #006000;
            color : white
        }
        .btn{
            text-align:center;
            background: #000050;
            color:white;
            padding: 10px;
            text-decoration:none;
            border-radius : 20px;
        }
    </style>
</head>
<body>
    <div class="flex">
        <p class="alert">
            <i class="fa fa-check"></i>
            <?=$mssg ?>
        </p>
        <a href="./RDV.php" class="btn">Revenir en arrière</a>
    </div>
</body>
</html>