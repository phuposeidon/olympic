<?php 
error_reporting(0);
	
	include ("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm bài viết</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
</head>
<body>
<?php include "header.php" ?>
	
	<!-- Main -->
	<div max-width="900px">
	<div class="container-fluid">
		<div class="row">
			<!-- Col Left -->
			
			<!-- Start right-->
			<div class="col-md-9">
					<!-- Start slide-->
						
					<!--End slide-->
					<br>
         
					<!-- Start Info -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Tạo Chuyên Mục</h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="formadd" method="POST">
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="email">Tên Chuyên Mục:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name ="tenctg" placeholder="Enter name">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="pwd">Mô tả chuyên mục:</label>
								    <div class="col-sm-10"> 
								      <textarea type="text" class="form-control" name="motacm" placeholder="Nhập mô tả"></textarea>
								    </div>
								  </div>
								  
								  <div class="form-group"> 
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" name="addctg" class="btn btn-success">Thêm</button>
								    </div>
								  </div>
								  
							</form>
							<?php

							 if(isset($_POST['addctg'])) {
							 	require_once("connect.php");
							 	$namecm= $_POST['tenctg'];
								$motacm=$_POST['motacm'];
								$sql = "select * from chuyenmuc where namectg = '$namecm'";
								$query = $conn->query($sql);
								$num_rows = $query->num_rows;
								if ($num_rows>0) {
										echo "<p style='color:red'>Tên chuyên mục đã tồn tại !</p>";
									}
								else 
									if ($namecm == '' or $motacm=='')
										echo'Không được bỏ trống giá trị';
									else 
									{
							$conn->query("INSERT INTO `chuyenmuc`(`namectg`, `mota`) VALUES ('".$namecm."','".$motacm."')");
										echo'Đã thêm';
									}
								
							 }
								

							?>
						</div>
					</div> 
         
				</div>
			</div>


			<div class="col-md-3">
				<?php 
					include "infoleft.php";
				?>
			</div> <!-- End col left -->
						
		</div> <!-- End right-->
		</div>
		

	</div>
 
</div>
<!-- ENd Main -->
</div> 
<?php include "chuong.php";?>

<?php
include "footer.php";
?>
<?php
include "backtotop.php";
?>

</body>
</html>