
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng Nhập</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Latest compiled and minified CSS & JS -->
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/bootstrap-3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../register_login.css">
  <link rel="stylesheet" href="wow/animate.css">
  <link rel="stylesheet" href="awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css3/register_login.css">

</head>
<body>
<script type="text/javascript">
function check(){
		$('#loadlog').html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Đang kiểm tra');
		setTimeout(function(){
			$('#check').load('check-log.php',$('#form-log').serializeArray());
			$('#loadlog').html('<i class="fa fa-check-square-o" aria-hidden="true"></i> Đăng nhập');
		},2000);
    	
    }
</script>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-3  col-sm-3"></div>
		<div class="col-md-6  col-sm-12">
			<div class="panel panel-success">
				<div class="panel panel-heading">
					
						
					<center>
					<div class="logo"><a href="index.php"><img src="../images/logo2.png" class="img-circle" style="background: #00979C;"></a></div>


					</center>
					

				</div>
				<div class="panel-body">
					<form id="form-log" method="post">
						<div class="form-group">
							<label><span class="glyphicon glyphicon-user"></span> Email</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Email..">
							
						</div>

						<form>
						

						<div class="form-group">
							<label><span class="glyphicon glyphicon-lock"></span> Mật khẩu</label>
							<input type="password" class="form-control" name="pass" id="password" placeholder="Mật Khẩu..">
						</div>
						<center><div id="check" style="padding-top: 7px"></div></center>

					</form>
					<center>
							<button onclick="check()" class="btn btn-success " name="btn-reg" type="submit" style="width: 150px;" ><div  id="loadlog"><i class="fa fa-check-square-o" aria-hidden="true"></i> Đăng Nhập</div></button>

					</center>
					<hr>
						<br>
						<center><p>Bạn chưa có tài khoản ? <a href="register.php">Đăng Ký</a> ngay</p></center>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

</body>
</html>