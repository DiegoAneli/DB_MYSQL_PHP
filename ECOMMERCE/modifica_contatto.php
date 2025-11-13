<?php

    require 'db.php';


    $id = $_GET['id']; // recupero l id dell a risorsa da modificare





    //DATI DAL FORM

    if ($_SERVER["REQUEST_METHOD"] == "POST"){


        //RECUPERO DEGLI INPUT DEL FORM DI MODIFICA
        $nome = $POST['nome'];
        $telefono = $POST['telefono'];
        $email = $POST['email'];

        //query
        mysqli_query($conn, "")



    }




?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica contatto</title>
    <link rel="stylesheet" href="style.css?v<?= time() ?>">
</head>
<body>
    
    <div class="container">

            <h1>Modifica Contatto</h1>

            <form action="" method="POST">

                Nome : <input name="nome" type="text" required>

                Telefono : <input name="telefono" type="text" required>

                Email : <input name="email" type="text" required>


                <button type="submit">Aggiorna</button>



            </form>

            <a href="index.php" class="button">Torna alla lista</a>

    </div>




</body>
</html>