<?php
//khai bao session
session_start();
//xu ly dang nhap

if(isset($_POST['btnLogin']))
{
    $name = $_POST["uname"];
    $pass = $_POST["psw"];
    //luu session
    // $_SESSION["ten"] = $name;
    $_SESSION['ten'] = array(
        'name' => $name,
        'pass' =>$pass
        
    );
    //chuyen ve trang home.php
    header("location:home.php");
}

