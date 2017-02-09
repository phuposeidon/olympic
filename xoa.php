<?php
if (!session_id()||$_SESSION=='') {
  session_start();
}
include "connect.php";
$conn->query("SET NAMES 'utf8'"); 


			// $row = $result->fetch_array(); 
			
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script src="jquery/jquery.min.js"></script>
	<link rel="stylesheet" href="awesome/css/font-awesome.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <style type="text/css">
  	th{
  		text-align: center;
  	}
  </style>
</head>
<body>
<div class="container" style="margin-top: 20px;">
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Tên Bài Viết</th>
        <th>Chuyên Mục</th>
        <th>Edit</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>    
  <?php
  		$result= $conn->query("select * from (baiviet bv inner join chuyenmuc cm on bv.idctg = cm.id) ORDER BY bv.idbv desc");
  		while ($row = $result->fetch_array()) {
				echo '
					<tr>
				        <td>'.$row['title'].'</td>
				        <td>'.$row['namectg'].'</td>
				        <td><a href="xoapost.php?id='.$row["idbv"].'">Edit</a></td>
				        <td><a href="">Xóa</a></td>
				     </tr> 
				';
			}
  ?>      
  
    </tbody>
  </table>
</div>

</body>
</html>