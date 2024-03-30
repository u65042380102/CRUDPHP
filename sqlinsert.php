<?php
$id = $_POST['id'];
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'kakai_db';
$conn = mysqli_connect($host,$user,$password,$database);
if($conn){
    $sql = "INSERT INTO user (username, email, password) VALUES ('$name', '$email', '$pass')";
    $conn->query($sql);
    header('location:select.php');
}    
?>