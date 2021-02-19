<?php
//code to insert the input from the form to the DB 
$dsn = "mysql:host=localhost;dbname=guestbook";
$user = "root";
$password = "";
$pdo = new PDO($dsn, $user, $password);

//use $_POST for name if you want to use the inputfield name
//$name = $_POST['name'];
//here using username from session
session_start();
$name = $_SESSION['username'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO entries (name, email, message) VALUES(:name_IN, :email_IN, :message_IN)";
$stm = $pdo->prepare($sql);
$stm->bindParam(':name_IN', $name);
$stm->bindParam(':email_IN', $email);
$stm->bindParam(':message_IN', $message);
if($stm->execute()) {
    header("location:guestbook.php");
} else {
    echo "Something went wrong";
};​​​​
?>