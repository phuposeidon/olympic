<?php 
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	include "connect.php";
	$conn->query("SET NAMES 'utf8'"); 
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Xóa bài viết</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
	<style type="text/css">

	</style>
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
				
         	
         	
					<!-- Start Info -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Chọn bài viết muốn xóa </h4>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
							    <thead>
							      <tr>
							        <th style="text-align: center;">Tên Bài Viết</th>
							        <th>Chuyên Mục</th>
							        <th>Edit</th>
							        <th>Xóa</th>
							      </tr>
							    </thead>
							    <tbody>    
							<?php if (isset($_SESSION['username']) && $_SESSION['isadmin']==1) {
						         	$result= $conn->query("select * from (baiviet bv inner join chuyenmuc cm on bv.idctg = cm.id) ORDER BY bv.idbv desc");
								while ($row = $result->fetch_array()) {
										echo '
											<tr>
										        <td>'.$row['title'].'</td>
										        <td>'.$row['namectg'].'</td>
										        <td><a href="editpost.php?id='.$row["idbv"].'">Edit</a></td>
										        <td><a href="delpost.php?id='.$row["idbv"].'">Xóa</a></td>
										     </tr> 
										';
									}
						?>
						  
						    </tbody>
						  </table>
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
								<h4>Delete Cpanel - Đề nghị đăng nhập bằng quyền admin</h4>
							</div>

						</div>
					</div>
				<?php } ?>


		</div>
		

	</div>
 
</div>
<!-- ENd Main -->
<?php include "chuong.php";?>
</div> 

<?php
include "footer.php";
?>
<?php
include "backtotop.php";
?>
</body>
</html>
