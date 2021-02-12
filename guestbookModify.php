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
    <form action="guestbookModify.php" method="POST">
    <label for="message">Enter your message</label><br>
    <textarea name="message" cols="30" rows="10" value=""></textarea><br>
    <input type="submit" value="Post edited message">
    </form>
    
<?php
//code not finished -----

//måste ha en till sida??

    //$dsn = "mysql:host=localhost;dbname=guestbook";
    //$user = "root";
    //$password = "";
    //$pdo = new PDO($dsn, $user, $password);

    //$id = $_GET['id'];  
    //$newMessage = $_POST['message'];

    //$sql = "UPDATE entries SET message = ':newMessage_IN' WHERE entries.Id = $id";
    //$stm = $pdo->prepare($sql);
    //$stm->bindParam(':newMessage_IN', $newMessage);
    //if($stm->execute()) {
        //header("location:guestbook.php");
    //} else {
        //echo "Something went wrong";
//};​​​​
?> 
</body>
</html>