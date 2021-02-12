<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
<!--
    Guestbook! Create a guestbook with the following features;
    -DB "entries" (name, email, message)
    -create a page with a form that has the following input name, email, message
    -use POST to post the message on the page and save it in the DB
    -list all messages on the page 
-->
    <h4>Leave a message 📑🖊️</h4>
    <form action="guestbookPost.php" method="POST">
    <label for="name">Enter name</label><br>
    <input type="text" placeholder="Name" name="name"><br>
    <label for="email">Enter emailadress</label><br>
    <input type="text" placeholder="Emailadress" name="email"><br>
    <label for="message">Enter your message</label><br>
    <textarea name="message" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Post message">
    </form>

    <h4>Posted messages</h4> 
<?php
    //code to post the message from the DB to the page 
    $dsn = "mysql:host=localhost;dbname=guestbook";
    $user = "root";
    $password = "";
    $pdo = new PDO($dsn, $user, $password);

    $stm = $pdo->query("SELECT name, email, message, id FROM entries");
    while($row = $stm->fetch()){
    echo $row['id'] . " " . $row['name'] . " " . $row['email'] . " " . $row['message'] . " " .
    "<a href='guestbookDelete.php?id=".$row['id']."'>DELETE</a>" . " " . 
    "<a href='guestbookModify.php?id=".$row['id']."?message=".$row['message']."'>MODIFY</a>" . " " . "<br>";
    };
?>

</body>
</html>