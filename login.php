<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>
    <h4>Login</h4>
    <form action="login.php" method="POST">
    <label for="name">Username</label><br>
    <input type="text" placeholder="Username" name="username"><br>
    <label for="email">Password</label><br>
    <input type="password" placeholder="Password" name="password"><br>
    <input type="submit" value="Login">
    </form>
    
<?php
 $dsn = "mysql:host=localhost;dbname=guestbook";
 $user = "root";
 $password = "";
 $pdo = new PDO($dsn, $user, $password);

 $stm = $pdo->query("SELECT id, username, password FROM users");
 while($row = $stm->fetch()) {
    if($_POST['username'] == $row['username'] && $_POST['password'] == $row['password']) {
        header("location:guestbook.php");
 } else {
    echo "Something went wrong";
}
 };
?>
</body>
</html>