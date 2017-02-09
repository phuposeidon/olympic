<?php
error_reporting(0);
if (!session_id()||$_SESSION=='') {
  session_start();
}
include "connect.php";
$conn->query("SET NAMES 'utf8'"); 
?>

<!DOCTYPE >
<html>
<head>
	<title></title>
  <!-- Latest compiled and minified CSS & JS -->
  	<link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script src="jquery/jquery.min.js"></script>
	<link rel="stylesheet" href="awesome/css/font-awesome.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="../holiday_bells/js/swfobject.min.js"></script>
	<script src="../holiday_bells/js/holiday_bells.js"></script>
	<script src="../holiday_bells/js/xenforo.js"></script>
	<script src="../holiday_bells/js/jquery.snowstorm.js"></script>
	<link rel="stylesheet" type="text/css" href="nhac.css">
	<link rel="stylesheet" href="../css/animate.css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script src="js/wow.min.js"></script>
	<!-- <script src="js/phao.js"></script> -->
	<script>
	 new WOW().init();
	</script>
</head>
<body>


	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid" style="padding-top: 78px;padding-bottom: 20px;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand wow swing" data-wow-iteration="5"  href="index.php"><img src="../images/logo3.png"></a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Trang Chủ</a></li>
					<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Chuyên Mục <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <?php 

                  $str="select * from chuyenmuc";
                  $kq= $conn->query($str);
                if($kq->num_rows == 0)
                    echo '<li><a href="#">Chưa có chuyên mục</a></li>';
                  else 
                    while($row=$kq->fetch_array())
                      { 
                        echo'<li><a href="chuyenmuc.php?id='.$row['id'].'">'.$row['namectg'].'</a></li>'; 
                      }
                ?>
              </ul>
      </li>
					<li><a href="#">Tập Theo Nhóm Cơ</a></li>
					<li><a href="#">Dinh Dưỡng</a></li>
					<li><a href="#">Video</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<?php

						if (session_id()!=''&&$_SESSION['username']!='') {
							
							?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Xin Chào <?php echo $_SESSION['user']; ?></a></li>
									<li class="divider"></li>


					<?php
							if ($_SESSION['isadmin']==1) {
								
								echo '<li><a href="addchuyenmuc.php">Thêm chuyên mục</a></li>';
								echo '<li><a href="write.php">Thêm bài viết</a></li>';
								echo '<li><a href="xoapost.php">Quản Lý Bài Viết</a></li>';
								echo '<li class="divider"></li>';
								echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Thoát</a></li>';
							}else{
								echo '<li><a href="accout_profile.php">Thông tin thành viên</a></li>';
								echo '<li><a href="#">Lịch tập luyện</a></li>';
								echo '<li class="divider"></li>';
								echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Thoát</a></li>';

							}

						}else{
							echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>';
							echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>';
						}
					?>
					
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav> <!-- End nav menu -->




</body>
</html>