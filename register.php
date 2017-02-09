
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng Ký</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/bootstrap-3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../register_login.css">
  <link rel="stylesheet" href="../awesome/css/font-awesome.min.css">
  
  <style type="text/css">
  	@media (max-width: 767px){
  		h3{
  			text-align: center;
  		}

  		.panel-body {
  			height: 735px !important;
  		}
  	}
  	.panel-body {
  		height: 700px;
  		padding: 20px 50px 50px 50px;
  </style>

  <script type="text/javascript">
  	function check(){
		$('#loadreg').html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Đang kiểm tra');
		setTimeout(function(){
			$('#check').load('check-reg.php',$('#form-reg').serializeArray());
			$('#loadreg').html('<i class="fa fa-check-square-o" aria-hidden="true"></i> Đăng kí');
		},2000);
    	
    }
  </script>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-3  col-sm-3"></div>
		<div class="col-md-6  col-sm-12 ">
			<div class="panel panel-success">
				<div class="panel panel-heading">
					
						
					<center>
					<div class="logo"><a href="index.php"><img src="../images/logo2.png" class="img-circle" style="background: #00979C;"></a></div>


					</center>
					

				</div>
				<div class="panel-body">
					<form  id="form-reg" method="post">
						<div class="form-group">
							<label><span class="glyphicon glyphicon-user"></span> Tên Đăng Nhập</label>
							<input type="text" class="form-control" id="user" name="user" placeholder="Nhập tên đăng nhập..">
							
						</div>

						<form>
						<div class="form-group">
							<label><span class="glyphicon glyphicon-envelope"></span> Email</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Nhập Email..">
							
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-lock"></span> Mật khẩu</label>
							<input type="password" class="form-control" name="pass" id="pass" placeholder="Nhập Password..">
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-lock"></span> Nhập lại mật khẩu</label>
							<input type="password" class="form-control" name="re-pass" id="re-pass" placeholder="Nhập lại Password..">
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-education"></span> Tên Trường </label>
							<input type="text" class="form-control" id="email" name="school" placeholder="Nhập Tên Trường..">
							
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-phone"></span> Số Điện Thoại </label>
							<input type="text" class="form-control" id="email" name="phone" placeholder="Nhập SĐT..">
							
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-calendar"></span> Ngày Sinh </label><br>	
							<select name="day">
								<option>Day</option>
									<?php
									for($i=1;$i<=31;$i++)
									{	
									    echo '<option value='.$i.'>'.$i.'</option>';
									}
									?>
							</select>


							<select name="month">
								<option>Month</option>
									<?php
									for($i=1;$i<=12;$i++)
									{	
										
									    echo '<option value='.$i.'>'.$i.'</option>';
									}
									?>
							</select>

							<select name="year">
								<option>Year</option>

								<?php
								for($i=2017;$i>=1900;$i--)
								{	
									
								    echo '<option value='.$i.'>'.$i.'</option>';
								}

								?>
							</select>
							
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-home"></span> Địa Chỉ </label>
							<input type="text" class="form-control" id="email" name="address" placeholder="Địa Chỉ..">
							
						</div>

						
						<center><div id="check" style="padding-top: 7px"></div></center>
						<div class="form-group">
							
						</div>
						


					</form>

					<center>
							<button onclick="check()" class="btn btn-success " name="btn-reg" type="submit" style="width: 150px;" ><div  id="loadreg"><i class="fa fa-check-square-o" aria-hidden="true"></i> Đăng kí</div></button>

					</center>
					<hr>
						<br>
						<center><p>Bạn đã có tài khoản ? <a href="login.php">Đăng Nhập</a> ngay</p></center>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>



</body>
</html>