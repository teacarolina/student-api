<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Gruesa+Libre&family=Cedarville+Cursive&display=swap" rel="stylesheet">
</head>
<body>
<?php
 $dsn = "mysql:host=localhost;dbname=guestbook";
 $user = "root";
 $password = "";
 $pdo = new PDO($dsn, $user, $password);

 $adminUser = $_POST['username'] == "admin" && $_POST['password'] == "password";
 if($adminUser) {
    header("location:guestbook.php");
 } 
 //echo if it doesn't work to login? 
?>
    <div>
    <h4>Login</h4>
    <form action="login.php" method="POST">
    <label for="name">Username</label><br>
    <input type="text" placeholder="Username" name="username"><br>
    <label for="email">Password</label><br>
    <input type="password" placeholder="Password" name="password"><br>
    <input type="submit" value="Login">
    </form>
    </div>
</body>
</html>