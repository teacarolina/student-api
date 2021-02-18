<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>
    <!--Sign up form for new users at the guestbook-->
    <h4>Sign up</h4>
    <form action="newUser.php" method="POST">
    <label for="name">Enter username</label><br>
    <input type="text" placeholder="Username" name="username"><br>
    <label for="email">Enter password</label><br>
    <input type="password" placeholder="Password" name="password"><br>
    <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>