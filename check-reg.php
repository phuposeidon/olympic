<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../awesome/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>


<?php
error_reporting(0);
    include "connect.php";
    $conn->query("SET NAMES 'utf8'"); 
    $day = trim($_POST['day']);
    $month = trim($_POST['month']);
    $year = trim($_POST['year']);
    $address = trim($_POST['address']);
    $birthday = $day.'-'.$month.'-'.$year;
    $username = trim($_POST['user']);
    $school = trim($_POST['school']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $password = trim($_POST['pass']);
    $repassword = trim($_POST['re-pass']);
    $kq_user= $conn->query("select * from account where username='".$username."' ");
    $kq_mail= $conn->query("select * from account where email='".$email."' ");
    // $partten = "/^[A-Za-z0-9_\.]{2,32}$/";
    $parttenmail = "/^[A-Za-z0-9_.]{2,32}@([a-zA-Z0-9].{2,12})(.[a-zA-Z]{2,12})+$/";



    if (!empty($username) && !empty($email) && !empty($password) && !empty($repassword) && !empty($school) && !empty($phone) && !empty($birthday) && !empty($address))
    {
		if(!preg_match($parttenmail ,$email, $matchs))
                echo  "<font color='red'>Mail bạn vừa nhập không đúng định dạng </font> ";
		else
            if ($kq_mail->num_rows > 0)
                echo'<font color="red">Email đã tồn tại trong hệ thống</font> ';
            else
                if ($password != $repassword)
                    echo'<font color="red">Mật khẩu không khớp</font> ';
                else 
                {
                    $sql = 'INSERT INTO account(username, password, email,school,phone,birthday,address,isadmin) 
                        VALUES ("'.$username.'","'.$password.'","'.$email.'","'.$school.'","'.$phone.'","'.$birthday.'","'.$address.'",0)';
                    $kq2=$conn->query($sql);
                    if ($kq2) {
                        echo'<font color="red">Đăng kí Thành công! <a href="login.php">Đăng nhập</a> ngay</font> ';
                    }else{
                        echo'<font color="red">Đăng kí Thất Bại!Vui lòng kiểm tra và nhập lại </font> ';
                    }
                }
        $a=0;        
    }
    else{
        //neu dang nhap sai
        echo '<font color="red">Vui lòng nhập đầy đủ thông tin</font> ';
    }

?>
