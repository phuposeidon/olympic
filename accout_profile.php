<!DOCTYPE html>
<html>
<head>
	<title>Thông Tin Thành Viên</title>
	<meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
  <link rel="stylesheet" type="text/css" href="profile_style.css">

</head>


<body>

<?php include 'header.php' ?>
<?php
$sql = 'SELECT * FROM account WHERE id ="'.$_SESSION['id_user'].'"';
$kq = $conn->query($sql);
$row = $kq->fetch_assoc();
?>

<div class="container-fluid" >
      <div class="row">
      <!-- <div class="col-md-6  toppad  pull-right col-md-offset-3 ">
       <br>
      </div> -->
        <div class="col-md-9" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h2 class="panel-title">Thành Viên</h2>
            </div>
            <div class="panel-body" style="font-size: 16px;">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images_profile/<?php if (!$row['images']=='') {
                    echo $row['images'];
                }else{
                    echo 'default.jpg';
                  } ?> " class="img-circle img-responsive"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Tên Thành Viên</td>
                        <td><?php echo $row['username']; ?></td>
                      </tr>
                      <tr>
                        <td>Ngày Sinh</td>
                        <td><?php echo $row['birthday']; ?></td>
                      </tr>
                      
                   
                         <tr>
                             <tr>
                        <td> Giới Tính</td>
                        <td>Female</td>
                      </tr>
                        <tr>
                        <td>Địa Chỉ</td>
                        <td><?php echo $row['address']; ?></td>
                      </tr>

                      <tr>
                        <td>Trường </td>
                        <td><?php echo $row['school'];?></td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com"><?php echo $row['email']; ?></a></td>
                      </tr>

                      <tr>
                        <td>Phone Number</td>
                        <td>0<?php echo $row['phone']; ?><br>
                        </td>
                      </tr>
                      


                     
                    </tbody>
                  </table>
                  <a href="edit_account.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Chỉnh Sửa</button></a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <br>
                        

                    </div>
            
          </div>
        </div>
        <!-- End left -->
        <div class="col-md-3">
        	<?php include "infoleft.php"; ?>
        </div>

      </div>
    </div>

<?php include "chuong.php";?>
<?php include "footer.php"; ?>
</body>
</html>