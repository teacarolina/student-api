<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <h4>Edit your message 📑🖊️</h4>
    <form action="guestbookModified.php" method="POST">
    <label for="newMessage">Enter your message</label><br>
    <textarea name="newMessage" cols="30" rows="10" value=""></textarea><br>
    <input type="hidden" name="messageId" value="<?=$id?>">
    <input type="submit" value="Post edited message">
    </form>

    <?php
    //not functioning yet, trying to solve
    $id = $_GET['id'];
    ?>
</body>
</html>