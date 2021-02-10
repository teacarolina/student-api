<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <h4>Leave a message 📑🖊️</h4>
    <form action="guestbookPageTwo.php" method="POST">
    <label for="name">Enter name</label><br>
    <input type="text" placeholder="Name" name="name"><br>
    <label for="email">Enter emailadress</label><br>
    <input type="text" placeholder="Emailadress" name="email"><br>
    <label for="message">Enter your message</label><br>
    <textarea name="message" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Post message">
    </form>

    <h4>Posted messages</h4> <?php
    $dsn = "mysql:host=localhost;dbname=guestbook";
    $user = "root";
    $password = "";
    $pdo = new PDO($dsn, $user, $password);

    $stm = $pdo->query("SELECT name, email, message FROM entries");
    while($row = $stm->fetch()){
        echo $row['name'] . " " . $row['email'] . " " . $row['message'] . "<br>";
    }
?>
</body>
</html>