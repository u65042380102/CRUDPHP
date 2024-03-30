<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'kakai_db';
$conn = mysqli_connect($host,$user,$password,$database);
if($conn){
    $sql = "select * from user";
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
    <h1>Customer</h1>
    <table class = 'table'>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
                

            </tr>
        </thead>
        <?php while($row = $result->fetch_assoc()){?>
        <tbody>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['password']?></td>
                <td><a type="button" href="edit.php?id='<?php echo $row['id'];?>'" class="edit">Edit</a>
                <a type="button" href="delete.php?id='<?php echo $row['id'];?>'" class="delete">Delete</a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    <div class="container">
    <a type="button" href="insert.php" class="add">+Add</a>
    </div>
</body>
</html>