<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang Chủ</title>
	<link rel="stylesheet" href="">

<style type="text/css">
	body{

		background-image: url(https://msmobile.com.vn/upload_images/images/tai-hinh-nen-galaxy-cho-may-tinh-1.jpg);
		background-size: 1900px;
	}
	.center1{
		color: red;
		font-size: 20px;
	}

</style>
</head>
<body>
	<div align="center" >
		<form action="home.php" method="get" accept-charset="utf-8">
			
			<button type="submit" name="sb2" class="center1">Tìm Kiếm</button>

			<button type="submit" name="sb3" class="center1">Nhập Thông Tin</button>

		</form>
	</div>
	<?php 
      
 
       if (isset($_REQUEST['sb2'])) {
       	  header("Location:http://localhost/TTPHPs/search.php");
       }

      
      if (isset($_REQUEST['sb3'])) {
      	header("Location:http://localhost/TTPHPs/information.php");
      }

	 ?>

</body>

</html>