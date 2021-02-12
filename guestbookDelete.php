<?php
//delete message from DB 
$dsn = "mysql:host=localhost;dbname=guestbook";
$user = "root";
$password = "";
$pdo = new PDO($dsn, $user, $password);

$id = $_GET['id'];

$sql = "DELETE FROM entries WHERE entries.Id = $id";

$stm = $pdo->prepare($sql);
if($stm->execute()) {
    header("location:guestbook.php");
} else {
    echo "Something went wrong";
};​​​​
?>