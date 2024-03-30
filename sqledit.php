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
    $sql = "UPDATE user SET username='$name',email='$email',password='$pass' WHERE id=$id";
    $conn->query($sql);
    header('location:select.php');
}    
?>