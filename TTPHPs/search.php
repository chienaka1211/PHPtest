<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Tìm Kiếm </title>
	<link rel="stylesheet" href="">
	
</head>
<body >
        <div align="center">
            <form action="search.php" method="post">
                <input type="text" name="search">
                <button  type="submit" name="sb">Tìm Kiếm</button>
            </form>
        </div><br>
        <div align="center">

        	<form action="search.php" method="get" accept-charset="utf-8">
        		<button type="submit" name="sb2" > Quay về trang chủ </button>
        		
        	</form>
        </div>
<?php 

        	 	
        if (isset($_REQUEST['sb'])) {
        	
        	$search = addslashes($_POST['search']);

        	if (empty($search)) {
        	 	echo "Yêu cầu nhập dữ liệu";
        	 } else{

        	 	$query =   " SELECT * FROM  members  WHERE(id LIKE '%$search%') OR (first_name LIKE '%$search%') OR (surname LIKE '%$search%') OR (email LIKE '%$search%')  ";
//$query_2 = "SELECT * FROM members";
                 include 'connection.php';


                  $sql = mysqli_query($conn,$query);

        	 	$num = mysqli_num_rows($sql);
// echo $num;

        	 	if ($num>0 && $search != null) {
        	 		echo "$num kết quả trả về với từ khóa <b>$search</b>";
        	 		echo '<table align="center" border="1" cellspacing ="0" cellpadding="10" class="table">';
                    while ($row = mysqli_fetch_assoc($sql)) {
                        echo '<tr>';
                            echo "<td>{$row['id']}</td>";
                            echo "<td>{$row['first_name']}</td>";
                            echo "<td>{$row['surname']}</td>";
                            echo "<td>{$row['email']}</td>";
                           
                        echo '</tr>';
                    }
                    echo '</table>';
        	 	}
        	 	else{ echo "Không Tìm Thấy Kết Quả";


        	 	}



        	 }
        }

        if (isset($_REQUEST['sb2'])) {
        	header("Location:http://localhost/TTPHPs/home.php");
        }



 ?>
<style type="text/css">
    body
    {

background-image: url(https://mtrend.vn/wp-content/uploads/2019/05/hinh-nen-galaxy-may-tinh-3.jpg);
background-size: 1900px;

    }
    .table{ 
        text-align: center;

        color: orange;
        size: 50px;
        border: solid;
    }
</style>
</body>
</html>