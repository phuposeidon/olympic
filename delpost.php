<?php 
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	include "connect.php";
	$id = intval($_GET['id']);
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Xóa bài viết</title>
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
				
         	<?php if (isset($_SESSION['username']) && $_SESSION['isadmin']==1) {
         	$result= $conn->query("select * from (baiviet bv inner join chuyenmuc cm on bv.idctg = cm.id) where idbv=".$id."");
			$row = $result->fetch_array(); 
			?>
         	
					<!-- Start Info -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Bạn có muốn xóa bài viết <?php echo $row['title']; ?></h4>
						</div>
						<div class="panel-body">
						<?php 
						  if(isset($_POST['xoa'])) {
						  	$conn->query("DELETE FROM baiviet where idbv=".$id." ");
						  	echo'<div class="alert alert-success">
							    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							    <strong>Success!</strong> Đã xóa bài viết
							</div>';

							exit;
						  }
						  

						  	?>
						  <form method="POST"> 
						  <input type="submit" name="xoa" class="btn btn-success" value="Xác nhận">
						  </form>
						

							
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
