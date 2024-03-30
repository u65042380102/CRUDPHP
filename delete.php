<?php 
$id = $_GET['id'];
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'kakai_db';
$conn = mysqli_connect($host,$user,$password,$database);
if($conn){
    $sql = "delete from user where id=$id";
    $conn->query($sql);
    header('location:select.php');
}    
?>