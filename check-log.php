<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../awesome/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>


<?php
    error_reporting(0);
    session_start();
    include "connect.php";
     $check = $conn->query("SET NAMES 'utf8'"); 
    $email = trim($_POST['email']);
    $password = trim($_POST['pass']);
   
    
    
    if (!empty($email) && !empty($password))
    {
           
        $query = $conn->query("select * from account where email = '".$email."' and password = '".$password."'");
        $num_rows = $query->num_rows;
        if ($num_rows==0)
            echo "<font color='red'>Email hoặc mật khẩu không đúng !</font>";
        else {
            $query = $conn->query("select * from account where email = '".$email."' and password = '".$password."'");
            $_SESSION["username"] = $email;
            $row = $query->fetch_array();
            $_SESSION['user'] = $row['username'];
            $_SESSION["isadmin"] = $row['isadmin'];
            $_SESSION['id_user'] = $row['id'];        
            echo'<font color="red">Đăng nhập thành công. <a href="/">Đến Trang chủ</a></font>';
        }

    }
    else
        echo'<font color="red">Vui lòng nhập đầy đủ thông tin</font>';

    

?>
