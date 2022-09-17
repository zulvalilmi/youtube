<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>form PHP</title>
        </head>
    <style>

        .eror{
            color: red;
        }
        </style>
        <body>
            <?php
            $namaErr ="";

            if ($_SERVER['REQUEST_METHOD']=="POST"){
                if(empty($_POST["nama"])){
                    $namaErr ="nama tidak boleh kosong!";
                }
            }

            ?>
        </body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label>Nama Lengkap</label> <br>
    <input type="text" name="nama">
    <span class="eror">* <?php echo $namaErr; ?> </span><br>
    <button type="submit">input</button>
</html>