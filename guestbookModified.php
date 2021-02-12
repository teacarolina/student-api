<?php
    //not functioning yet, trying to solve
    $dsn = "mysql:host=localhost;dbname=guestbook";
    $user = "root";
    $password = "";
    $pdo = new PDO($dsn, $user, $password);
    
    $id = $_POST['messageId'];  
    $newMessage = $_POST['newMessage'];

    $sql = "UPDATE entries SET message = ':newMessage_IN' WHERE entries.Id = $id";
    $stm = $pdo->prepare($sql);
    $stm->bindParam(':newMessage_IN', $newMessage);
    if($stm->execute()) {
        header("location:guestbook.php");
    } else {
        echo "Something went wrong";
};​​​​
?> 