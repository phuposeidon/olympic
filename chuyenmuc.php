<?php 
	
	require_once("connect.php");
	$conn->query("SET NAMES 'utf8'"); 
	$idcm=intval($_GET['id']);
	$seo = $conn->query("select * from chuyenmuc where id=".$idcm."");
	$row = $seo->fetch_array();
function convertstr($strurl) {
    $strurl = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $strurl);
     $strurl= preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $strurl);
     $strurl = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $strurl);
     $strurl = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $strurl);
     $strurl = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $strurl);
     $strurl = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $strurl);
     $strurl = preg_replace("/(đ)/", 'd', $strurl); 
     $strurl = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $strurl);
     $strurl = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $strurl);
     $strurl = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $strurl);
     $strurl = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $strurl);
     $strurl= preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $strurl);
     $strurl= preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $strurl);
     $strurl = preg_replace("/(Đ)/", 'd', $strurl);
     $strurl = preg_replace("/( )/", '-', $strurl);
     $strurl = preg_replace("/(#)/", '', $strurl);
 
  return $strurl;
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chuyên mục <?php echo $row['namectg']; ?></title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
 
<!-- analystic -->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84646361-1', 'auto');
  ga('send', 'pageview');

</script>
  <script>
    new WOW().init();
  </script>
  <script type="text/javascript">
    $(function() {
     $(window).scroll(function() {
     if ($(this).scrollTop() != 0) {
     $("#bttop").fadeIn();
     } else {
     $("#bttop").fadeOut();
     }
     });
     $("#bttop").click(function() {
     $("body,html").animate({
     scrollTop: 0
     }, 800);
     });
    });
    </script>
</head>
<body>

	<?php include "header.php" ?>

	<!-- Main -->
	<div max-width="900px">
	<div class="container-fluid">
		<div class="row">
			
			<!-- Start left-->
			<div class="col-md-9">
					<!-- Start slide-->
					<!--End slide-->
			
					<!-- Start Info -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Chuyên Mục > 
								<?php 
								$str="select * from chuyenmuc  where id=".$idcm."";
				  				$kq= $conn->query($str);
								while($row=$kq->fetch_array()) {echo $row['namectg']; } ?></h4>
						</div>
						<div class="panel-body">
						<!-- Hiển thị bv -->
							<?php 

								$result= $conn->query("select * from (baiviet bv inner join chuyenmuc cm on bv.idctg = cm.id) where idctg=".$idcm." ORDER BY bv.idbv desc");
								if($result->num_rows == 0)
									echo'Chưa có bài viết nào.';
								else
								while($row = $result->fetch_array()){

										$url= convertstr($row['title']);
								
									?>
									<?php 
									echo'<div class="post">
										<div class="row">
											<div class="col-sm-3">
												<center><img id="imgthumb" width="200px" height="150px" src="'.$row['urlimg'].'"></center>
											</div>
											<div class="col-sm-9">
												<h3><a href="baiviet.php?'.$url.'&id='.$row['idbv'].'.html">'.$row['title'].'</h3>
												<div class="tag"><i class="fa fa-tags" aria-hidden="true"></i> Chuyên mục: '.$row['namectg'].'</div>
												<div class="tag"><i class="fa fa-user" aria-hidden="true"></i> Author : Gym Olympus</div>
												<div class="tag"><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['date'].'</div>

												
												<div class="tag"><a href="baiviet.php?'.$url.'&id='.$row['idbv'].'.html">Xem thêm</a></div>
											</div>
										</div>
									</div>';
								}
		
							?>
							
							<!-- end bv-->
						</div>
					</div> 
          
				</div>
			</div><!-- End left-->
			<!-- Col right-->
			<div class="col-md-3">
				
	<div class="panel-group shadowpanel">
					  <div class="panel panel-default">
						<div class="panel-heading">
							<h4><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Bài viết mới nhất</h4>
						</div>
						<div class="panel-body">
						<?php 

							
						  	$str="select * from baiviet order by idbv desc limit 5";
						  	$kq= $conn->query($str);
							if($kq->num_rows == 0)
						  		echo 'Chưa bài viết nào';
						  	else 
						  		while($row=$kq->fetch_array())
						  			{ 
										$url= convertstr($row['title']);
						  				echo'<div class="newpost">
												<img src="images/rss.png" width="25px"> <a href="'.$url.'-'.$row['idbv'].'.html">'.$row['title'].'</a>
												<hr>
											</div>'; 
						  			}
					  	?>
						</div>
						<div class="panel-heading">
						<center>
						  <img id="avatar" class="img-circle" width="150px" height="150px" src="images/profile2.jpg">
						  <p class="p_info"><b>GYM OLYMPUS</b></p>
						  <p class="p_info" style="font-size:15px;">GYM -&&- FITNESS</p>
						  <i class="fa fa-angellist fa-3x" aria-hidden="true" style="color:#FFFFFF; margin-bottom:3px;"></i>
						</center>
						
					</div>
					<div class="panel-body">
						<!-- <div id="contact">
						  <span class="glyphicon glyphicon-calendar" aria-hidden="true" ></span><span class="spanitem">30/07/1997</span>
						</div> -->
						<div id="contact">
						  <i class="fa fa-envelope" aria-hidden="true"></i><span class="spanitem"> Mail : Olympusgym.info@gmail.com
						</span>
						</div>
						<div id="contact">
						  <i class="fa fa-phone-square" aria-hidden="true"></i><span class="spanitem">  Phone  : 0122 658 3219</span>
						</div>
						<div id="contact">
						  <i class="fa fa-map-marker" aria-hidden="true"></i><span class="spanitem"> Đc : Lầu 1, Nhà B3, KTX khu B, ĐHQG.</span>
						</div>
						<div id="contact">
						  <i class="fa fa-facebook-square" aria-hidden="true"></i><span class="spanitem"><a target="_black" id="link" href="http://fb.com/tnit97"> http://facebook.olympusgym.vn/
							</a></span>
						</div>
					</div>
						
						
					  </div>
					</div>


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

