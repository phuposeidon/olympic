<?php
// $conn = new mysqli('mysql.hostinger.vn','u978140351_admin','Average1','u978140351_olym');
$conn=new mysqli('localhost','root','','olympus');
if (!$conn) {
	die("Kết nối thất bại".$conn->error_connect);
	# code...
};


?>