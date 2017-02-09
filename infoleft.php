


<div class="panel-group shadowpanel-2 wow slideInRight" data-wow-offset="150">
				  <div class="panel panel-default">
					<div class="panel-heading">
						<h4><i class="fa fa-bookmark" aria-hidden="true"></i> Bài viết mới nhất</h4>
					</div>
					<div class="panel-body">
					<?php 
function convertstr($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
     $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
     $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
     $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
     $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
     $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str); 
     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
     $str = preg_replace("/(Đ)/", 'd', $str);
     $str = preg_replace("/( )/", '-', $str);
      $str = preg_replace("/(#)/", '', $str);
  //$str = str_replace(” “, “-”, str_replace(“&*#39;”,”",$str));
  return $str;
  }
						
					  	$str="select * from baiviet order by idbv desc limit 5";
					  	$kq= $conn->query($str);
						if($kq->num_rows == 0)
					  		echo 'Chưa bài viết nào';
					  	else 
					  		while($row=$kq->fetch_array())
					  			{ 
									$url= convertstr($row['title']);
					  				echo'<div class="newpost">
											<img src="images/rss.png" width="25px" > <a href="baiviet.php?'.$url.'&id='.$row['idbv'].'.html">'.$row['title'].'</a>
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
					<div class="panel-body" style="font-size: 17px;">
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
<div class="panel-group shadowpanel">
	<div class="panel panel-default">
		<div class="panel-heading">
		 	Quảng Cáo
		</div>
		<div class="panel-body">
			<a href="#"><img class="img-responsive" src="https://lh4.googleusercontent.com/-np4UDMd9B3I/V-qHWTtl7NI/AAAAAAAAMPg/pMP_a1DYG_MaO9vo4SCQHuU_U0_FlP3OACL0B/s300-no/kiem-tien-voi-ung-dung-thanh-toan-viviet.gif"></a>


		</div>
	</div>
</div>
