<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูล</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="sqlinsert.php" method="POST" class="insert-form">
        <h1>Add Customer</h1>
        <p>Username : <input type="text" name="username"></p>
        <p>Email : <input type="email" name="email"></p>
        <p>Password : <input type="password" name="password"></p>
        <button type="submit" class="submit">Submit</button>
    </form>
</body>
</html>