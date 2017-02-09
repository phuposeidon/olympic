<?php 
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
</head>
<body>
<?php include "header.php"; ?>
	
	<!-- Main -->
	<div max-width="900px">
	<div class="container-fluid">
		<div class="row">
			<!-- Col Left -->
			<div class="col-md-3">
				<?php 
					include "infoleft.php";
				?>
			</div> <!-- End col left -->
			<!-- Start right-->
			<div class="col-md-9">
					<!-- Start slide-->
				
					<!--End slide-->
				
         	<?php
         	
         	if (isset($_SESSION['username']) && $_SESSION['isadmin']==1) { ?>
					<!-- Start Info -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Viết Bài</h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="formadd" method="POST" action="write.php">
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="email">Tên Bài Viết</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name ="tenbv" placeholder="Enter name">
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="pwd">Nhập nội dung:</label>
								    <div class="col-sm-10"> 
								      <textarea name="nd" id="editor1" rows="10" cols="80"></textarea>
								    </div>
								  </div>
								  
								  <script>    CKEDITOR.replace( 'editor1' );</script>
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="email">Url Img</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name ="urlimg" placeholder="Đường dẫn img">
								    </div>
								  </div>
								  
									
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="email">Ngày đăng bài</label>
								    <div class="col-sm-10">
								      <input type="datetime-local" class="form-control" name="date" placeholder="Đường dẫn img">
								    </div>
								  </div>
								  <div class="form-group">
								  <label class="control-label col-sm-2" for="pwd">Chọn chuyên mục:</label>
								  <div class="col-sm-10"> 
								  <input type="radio" name="chuyenmuc" hidden>
								  <?php
								  	$str="select * from chuyenmuc";
				  					$kq= $conn->query($str);
								  	while($row=$kq->fetch_array())
							  			{ 
							  			echo'<label class="radio-inline"><input type="radio" name="chuyenmuc" value="'.$row['id'].'">'.$row['namectg'].'</label>'; 
							  			}
								  ?>
								  
								  </div>
								  </div>
								  <div class="form-group"> 
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" name="addbaiviet" class="btn btn-success">Thêm</button>
								    </div>
								  </div>
								  
							</form>
							<?php

							 if(isset($_POST['addbaiviet'])) {
							 	require_once("connect.php");
							 	$tenbv= $_POST['tenbv'];
								$nd=$_POST['nd'];
								$urlimg=$_POST['urlimg'];
								$date=$_POST['date'];
								$chuyenmuc=$_POST['chuyenmuc'];
							if ($tenbv=='' || $nd==''  || $urlimg=='' || $date=='' || $chuyenmuc=='' )
							{
								echo'Không được bỏ trống các trường giá trị';
							}
							else {
								$conn->query("INSERT INTO `baiviet`(`idctg`, `title`,`content`,`urlimg`,`date`) 
							VALUES (".$chuyenmuc.",'".$tenbv."','".$nd."','".$urlimg."','".$date."')");
								echo'Đã thêm bài';
							}
							
								
							
							
							 }
								

							?>
						</div>
					</div> 
         
				</div>
			</div>
						
		</div> <!-- End right-->
		 <?php } else { ?>
		 	<!-- Start chưa đăng nhập -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Quản Lí bài viết - Vui lòng Đăng nhập bằng quyền admin</h4>
							</div>

						</div>
					</div>
				<?php } ?>


		</div>
		

	</div>
 
</div>
<!-- ENd Main -->
</div> 
<?php include "chuong.php";?>
<?php
include "footer.php";
?>

</body>
</html>