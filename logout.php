<?php
//khai bao session
session_start();
if(!isset($_SESSION['ten']))
{
    header("location:login.php");
}
//xoa session
session_destroy();//xoa het session
unset($_SESSION['ten']);//xoa 1 session
//chuyen ve trang login.php
header("location:login.php");