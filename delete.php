<?php
include "cnx.php";

if(isset($_POST["id"] )){

    $id=$_POST["id"];

    $req=mysqli_query($link, "DELETE FROM user WHERE id='$id'");

    if($req){
        header("location:list.php");
    }
    else{
        echo "Erreur de suppréssion";
    }

}
else {
    echo "Champ manquant";

}





?>