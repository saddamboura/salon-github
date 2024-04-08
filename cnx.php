<?php
/* Création d'une var $user ds la on a mis une chaine de caractere root qui représente le nom de l'utilisateur par défaut ds la base de donnée  msql */
$user="root"; 
$mdp="";
$db="salon";
$server="localhost";

 /*pour pouvoir assurer la connexion avec la base*/

$link=mysqli_connect($server,$user,$mdp,$db);

if($link)
{
    //echo "connexion établie";
}
else{
    die(mysqli_connect_error());
}
 













?>