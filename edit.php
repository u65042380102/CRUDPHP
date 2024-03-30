<?php
$id = $_GET['id'];
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'kakai_db';
$conn = mysqli_connect($host,$user,$password,$database);
if($conn){
    $sql = "select * from user where id=$id";
    $result = $conn->query($sql);
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูล</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="sqledit.php" method="POST" class="edit-form">
        <h1>Update Data</h1>
        <?php while($row = $result->fetch_assoc()){?>
        <p>ID : <input type="text" name="id" value="<?php echo $row['id'];?>"></p>
        <p>Username : <input type="text" name="username" value="<?php echo $row['username'];?>"></p>
        <p>Email : <input type="email" name="email" value="<?php echo $row['email'];?>"></p>
        <p>Password : <input type="password" name="password" value="<?php echo $row['password']?>"></p>
        <button type="submit" class="submit">Submit</button>
        <?php }?>
    </form>
</body>
</html>