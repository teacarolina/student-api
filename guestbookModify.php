<?php
    $dsn = "mysql:host=localhost;dbname=guestbook";
    $user = "root";
    $password = "";
    $pdo = new PDO($dsn, $user, $password);

    $action = $_GET['action'];

    if($action == "update") {
    $sql = "UPDATE entries SET message = :message_IN WHERE entries.Id = :id_IN";
    $stm = $pdo->prepare($sql);
    $stm->bindParam(":message_IN", $_POST['message']);
    $stm->bindParam(":id_IN", $_POST['id']);
    
    if($stm->execute()) {
        header("location:guestbook.php");
    } else {
        echo "Something went wrong";
        die();
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <?php
    $dsn = "mysql:host=localhost;dbname=guestbook";
    $user = "root";
    $password = "";
    $pdo = new PDO($dsn, $user, $password);

    //collect data from db
    $stm = $pdo->prepare("SELECT name, email, message, id FROM entries WHERE id=:id_IN");
    $stm->bindParam(":id_IN", $_GET['id']);

    $sucess = $stm->execute();
    if(!$sucess) {
        echo "<h3> Something went wrong </h3>";
        die();
    }

    $userData = $stm->fetch();
    
    ?>
    <h4>Edit your message 📑🖊️</h4>
    <form action="guestbookModify.php?action=update" method="POST">
    <label for="message">Enter your message</label><br>
    <textarea name="message" cols="30" rows="10"><?=$userData['message']?></textarea><br>
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <input type="submit" name="submit" value="Post edited message">
    </form>
</body>
</html>