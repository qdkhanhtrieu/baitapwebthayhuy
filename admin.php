    <?php
include('config.php');

if (isset($_POST['txtUsername']))
{
//Kết nối tới database
   
//Lấy dữ liệu nhập vào
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
   
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
        if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
        } 
        else {
            $sql="SELECT * FROM `taikhoannhanvien` WHERE username='$username' AND password ='$password'";
            $kt=mysqli_query($conn, $sql);
            if(mysqli_num_rows($kt) == 0){
                echo "Tên Đăng Nhập Hoặc Mật Khẩu Bị Sai, Vui Lòng Đăng Nhập Lại";
            }
            else {
                session_start();
                $_SESSION["AdminName"] = $username;
                header("location: TrangChu.php");
                }
        }
}
?>