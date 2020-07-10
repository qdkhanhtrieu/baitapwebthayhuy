<?php
        require_once("config.php");
        if (isset($_POST['txtstk'])) {
            //lấy thông tin từ các form bằng phương thức POST
            $SoTaiKhoan = $_POST['txtstk'];
            $NgayHetHan  = $_POST['txtngayhethan'];
            $CVV   = $_POST['txtcvv'];
            $HoTen   = $_POST['txthoten'];
            $DiaChi   = $_POST['txtDiaChi'];
            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
              if (!$SoTaiKhoan || !$NgayHetHan || !$CVV || !$HoTen || !$DiaChi)
                {
                    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit; 
                }
            else{
                    // Kiểm tra tài khoản đã tồn tại chưa

                        //thực hiện việc lưu trữ dữ liệu vào db
                        $sql = "INSERT INTO `thanhtoan` (
                            SoTaiKhoan,
                            NgayHetHan,
                            CVV,
                            HoTen,
                            DiaChi
                        )
                        VALUE (
                            '{$SoTaiKhoan}',
                            '{$NgayHetHan}',
                            '{$CVV}',
                            '{$HoTen}',
                            '{$DiaChi}'
    
                            )";
                        // thực thi câu $sql với biến conn lấy từ file connection.php
                        mysqli_query($conn,$sql);
                        echo "chúc mừng bạn đã đăng ký thành công";
              }

               if ($sql)
                    header("location: ThanhToan.php");
                else
                    echo "Vui lòng đăng ký lại. <a href='Chon.php'>Thử lại</a>";
    }
    ?>