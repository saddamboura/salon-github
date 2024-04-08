<?php
session_start();
if(!$_SESSION){
    // header('Location:./login.php');
}
include "cnx.php";
?>
<!DOCTYPE html>.
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Liste des utilisateurs</title>

    <style>
        body{
            width: 65%;
            margin: auto;
        }
        table{
            border-collapse : collapse;
            margin: 25px 0;
            padding: 5px;
            font-size : 0.9em;
            font-family : sans-serif;
            box-shadow : 0 0 20px rgba(0,0,0,0.15);
        }

        td, th{
            padding: 10px;
            text-align: center;
        }

        thead{
            padding: 30px;
        }

        tbody tr {
            border-bottom : 1px solid #ddd ;
        }
        thead tr, tfoot tr {
            background-color: #009879;
            color : #fff;
            text-align: center;
        }
        tbody tr .active-row {
            font-weight: bold;
            color: #009879;
        }
        tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        input[type="submit"] {
            width: 8em;
            background-color: #4caf50;
            border : none;
            border-radius : 5px;
            color : white;
            padding: 6px;
            text-align: center;
            font-weight: bold;
            margin: 5px;
        }

    </style>
</head>
<body>
    <div class="mt-1">
    <a href="./deconnection.php" class="btn m-1 ">Déconnection</a>
    </div>
    <h1 class="mt-1">Liste des utilisateurs</h1>
    <table>
        <thead>
        <tr>
            <th>Identifiant</th>
            <th>Nom et Prénom</th>
            <th>Mail</th>
            <th>Téléphone</th>
            <th>Catégorie</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        </thead>

        <?php

        $req= mysqli_query($link, " SELECT * FROM user ");

        while($res=mysqli_fetch_array($req))
        {

        ?>

       <tbody>
       <tr>
            <td> <?php echo $res["id"] ; ?> </td>
            <td> <?php echo $res["nom"] ; ?> </td>
            <td> <?php echo $res["mail"] ; ?> </td>
            <td> <?php echo $res["tel"] ; ?> </td>
            <td> <?php echo $res["cat"] ; ?> </td>
            <td> <?php echo $res["date"] ; ?> </td>
            <td> <?php echo $res["time"] ; ?> </td>
            <td> <?php echo $res["message"] ; ?> </td>

            <td>
                <form action="detail.php" method="POST">
                    <input type="hidden" name="id" value='<?php echo $res["id"] ; ?>' />
                    <input type="submit" value="Détail" />
                </form>

                <form action="delete.php" method="POST">
                    <input type="hidden" name="id" value='<?php echo $res["id"] ; ?>' />
                    <input type="submit" value="Supprimer" />
                </form>
            </td>

        </tr>
       </tbody>

        <?php
        }
        ?>


        <tfoot>
            <tr>
                <td colspan='9'>
                    Listes des utilisateurs inscrits.  
                </td>
            </tr>
        </tfoot>
    </table>
    
</body>
</html>