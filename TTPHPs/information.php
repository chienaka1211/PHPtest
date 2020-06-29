<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lưu Thông Tin </title>
    <link rel="stylesheet" href="">
    <form action="information.php" method="post" accept-charset="utf-8">
        
        <table align="center" >
            <tr>
                <td colspan="2" class="color">Mời Bạn Nhập Thông  Tin</td>
            </tr>   
            <tr>
                <td class="color2" >first_name :</td>
                <td><input type="text" id="first_name" name="first_name"></td>
            </tr>
            <tr>
                <td class="color2">surname :</td>
                <td><input type="text" id="surname" name="surname"></td>
            </tr>
            <tr>
                <td class="color2">email :</td>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="sb" value="Lưu thông tin"></td>
                <td colspan="2" align="center"><input type="submit" name="sb5" value="Quay về Trang Chủ"></td>
            </tr>

        </table>
    </form>
</head>
<body>
    <?php 
     include'connection.php';

     if (isset($_POST['sb'])) {
        
        $first_name = $_POST['first_name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];

        if ($first_name ==''||$surname == ''||$email =='') {
            echo '<h1 align="center" class="color2">Bạn Cần Nhập Thông Tin</h1>';
        }else{

            $sql = "INSERT INTO members (first_name , surname, email) VALUES ('$first_name','$surname','$email')";
            //Đưa thông tin vào trong cơ sở dữ liệu
            $result = mysqli_query($conn,$sql);
            if ($result) {
                # code...
            echo '<h1 align="center" class="color2">Lưu Thành Công</h1>';
            }


        }

     }
     if (isset($_POST['sb5'])) {
        header("Location:http://localhost/TTPHPs/home.php");
        
     }

     ?>
     <style type="text/css">
         
         body
         {

            background-image: url(https://msmobile.com.vn/upload_images/images/tai-hinh-nen-galaxy-cho-may-tinh-14.jpg);
            background-size: 1900px;
         }
         .color{
            color: red;
            font-size: 50px;

         }
         .color2{
            color: red;
         }


           
     </style>
    
</body>
</html>