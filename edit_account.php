<!DOCTYPE html>
<html>
<head>
	<title>Chỉnh Sửa Thông Tin</title>
	<meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon.ico">
  <link rel="stylesheet" type="text/css" href="profile_style.css">

</head>


<body>

<?php include 'header.php' ?>
<?php
    $address = trim($_POST['address']);
    $username = trim($_POST['user']);
    $school = trim($_POST['school']);
    $phone = trim($_POST['phone']);
    $warning = '';


      define ("MAX_SIZE","100");
 
function getExtension($str) {
$i = strrpos($str,".");
if (!$i) 
  { 
    return ""; 
  }

$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}

$errors=0;
if(isset($_POST['submit']))
{
$image=$_FILES['image']['name'];
if ($image)
{
$filename = stripslashes($_FILES['image']['name']);
$extension = getExtension($filename);
$extension = strtolower($extension);
if (($extension != "jpg") && ($extension != "jpeg") && ($extension !=
"png") && ($extension != "gif"))
{
echo '<h1>Đây không phải là file hình!</h1>';
$errors=1;
}
else
{
$size=filesize($_FILES['image']['tmp_name']);
if ($size > MAX_SIZE*2048)
{
echo '<h1>Vượt quá dung lượng cho phép!</h1>';
$errors=1;
}

}}}
$sql2 = 'SELECT * FROM account WHERE id="'.$_SESSION['id_user'].'"';
    $query = $conn->query($sql2);
    $row = $query->fetch_assoc();
if ($image=='') {
  $image=$row['images'];
}

 $url='images_profile/'.$image;
 $copied = move_uploaded_file($_FILES['image']['tmp_name'], $url);

 
if( !$errors)
{

    if (empty($username) && empty($school) && empty($phone) && empty($address)) {   
            $warning = 'Tất cả các trường đều trống ';
    }else{
      $sql = 'UPDATE account SET username = "'.$username.'",school="'.$school.'",phone="'.$phone.'",address="'.$address.'",images="'.$image.'" WHERE id="'.$_SESSION['id_user'].'"';
      $kq = $conn->query($sql);
      if ($kq) {
        header('Location:accout_profile.php');
      }

    }
}

    



?>

<div class="container-fluid" >
      <div class="row">
      <!-- <div class="col-md-6  toppad  pull-right col-md-offset-3 ">
       <br>
      </div> -->
        <div class="col-md-9" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h2 class="panel-title">Chỉnh Sửa Thông Tin Thành Viên</h2>
            </div>
            <div class="panel-body" style="font-size: 16px;">
              <div class="row">
                <div class="col-md-3 col-lg-3  col-sm-2" align="center"> <img alt="User Pic" src="images_profile/<?php if (!$row['images']=='') {
                    echo $row['images'];
                }else{
                    echo 'default.jpg';
                  } ?> " class="img-circle img-responsive" > </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Tên Thành Viên</td>
                        <td><input type="text" class="form-control" id="user" name="user" value="<?php echo $row['username']; ?>"></td>
                      </tr>
                      
                      
                   
                         <tr>
                             <tr>
                        <td> Giới Tính</td>
                        <td>Female</td>
                      </tr>
                        <tr>
                        <td>Địa Chỉ</td>
                        <td><input type="text" class="form-control"  name="address" value="<?php echo $row['address'];?>"></td>
                      </tr>

                      <tr>
                        <td>Trường </td>
                        <td><input type="text" class="form-control"  name="school" value="<?php echo $row['school']; ?>"></td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com"><?php echo $row['email']; ?></a></td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td><input type="text" class="form-control"  name="phone" value="<?php echo $row['phone'];?>"><br>
                        </td>
                           
                      </tr>

                      <tr>
                        <td>Ảnh đại diện</td>
                        <td>
                          <input type="file" name="image" value="<?php echo $row['images']; ?>">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                      <button class="btn btn-primary" name="submit" type="submit">Lưu Thông Tin</button>
                  </form>
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