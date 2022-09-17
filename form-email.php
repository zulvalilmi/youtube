<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftarkan Email Anda</title>
</head>
<body>
 
    <?php
 
        $emailErr = "";
        $email = "";
   
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['email'])){
                $emailErr = "Masukkan email anda !";
            }else{
                $email = $_POST['email'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Email tidak valid";
                }
            }
        }
 
    ?>
 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label>Enter Email</label> <br>
        <input type="text" name="email">
        <br>
        <span style="color: red;"><?php echo $emailErr; ?></span>
        <br>
        <input type="submit" value="Save">
    </form>
 
    <p>Email terdaftarkan :</p>
    <?php echo $email; ?>
   
</body>
</html>
 
