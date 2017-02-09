<?php 
error_reporting(0);
	require_once("connect.php");
	$conn->query("SET NAMES 'utf8'"); 
	$id = intval($_GET['id']);
	$title = $conn->query("select * from baiviet where idbv=".$id."");
	$row= $title->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $row['title']; ?></title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script src="jquery/jquery.min.js"></script>
	<link rel="stylesheet" href="awesome/css/font-awesome.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
<!-- analystic -->

 

</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1104249069624594";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<body>

		<?php include "header.php" ?>;
		<?php 
			$result= $conn->query("select * from (baiviet bv inner join chuyenmuc cm on bv.idctg = cm.id) where idbv=".$id."");
			$row = $result->fetch_array();
			function islogin()
			{
				if (isset($_SESSION['username']))
					return 1;
				else return 0;
			}
		?>
			<script>
			$(document).ready(function(){
				var bool = <?php echo islogin(); ?>;
			    $("#loadnd").click(function(){
			    	if (bool==0)
			    		$("#notlog").removeClass("ancontent");
			    	else 

			        	$("#islog").removeClass("ancontent");
			        
			    });
			});
			</script>
		<!-- Main -->
		<div max-width="900px">
		<div class="container-fluid">
			<div class="row">
				<!-- Col Left -->
				
				<div class="col-md-9">
						<!-- Start slide-->
						<!--End slide-->
				
						<!-- Start Info -->
						<div class="panel-group shadowpanel">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Chuyên Mục > <?php echo $row['namectg']; ?> > <?php echo $row['title']; ?></h4>
							</div>
							<div class="panel-body">
								<div id="titlect">
								<h3><?php echo $row['title']; ?></h3>
								<div class="tag"><i class="fa fa-tags" aria-hidden="true"></i>   Chuyên mục: <?php echo $row['namectg']; ?></div>
								<div class="tag"><i class="fa fa-user" aria-hidden="true"></i><a href="http://fb.com/tnit97"> Author : Gym Olympus</a></div>
								<div class="tag"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $row['date'];?></div>
								<br>
								<?php echo $row['content']; ?><br>
								<?php
										if (isset($_SESSION['username'])&&$_SESSION['isadmin']==1) {

								?>	
										<div><i class="fa fa-times" aria-hidden="true"></i><a href="delpost.php?id=<?php echo $row['idbv'];?>"> Xóa bài viết</a></div>
								<?php

										}
								 ?>
							</div>
								<br>
								
														
							</div>
			
						</div> 

	          
					</div>
<div class="panel-group shadowpanel">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Bình Luận</h4>
		</div>
	<div class="panel-body">
		<div class="fb-comments" xid="<?php echo $row['idbv'] ?>" data-numposts="20" data-colorscheme="light" width="100%" data-version="v2.3"></div>
	</div>
</div>
</div>


				</div><!-- End left-->
				<!-- Col right-->
				<div class="col-md-3">
					<?php 
						include "infoleft.php";
					?>
				</div> <!-- End col right -->
							
			</div> 
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

