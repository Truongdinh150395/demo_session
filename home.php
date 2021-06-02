<?php session_start();
    if(!isset($_SESSION['ten']))
    {
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>XIn chao <?php echo $_SESSION['ten']['name'];?> va mat khau la <?php echo $_SESSION['ten']['pass'];?> <a href="logout.php">Thoat dang nhap</a></h1>
</body>
</html>