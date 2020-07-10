<?php
        require_once("config.php");
        if (isset($_POST['txtid'])) {
            //lấy thông tin từ các form bằng phương thức POST
            $SoGhe = $_POST['txtid']
            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
              
                    $sql="UPDATE `lichbay` SET `SoGhe`= `SoGhe`-1 WHERE `SoGhe`";
                    
                    
               if ($sql)
                    header("location: ThanhToan.php");
                else
                    echo "Vui lòng đăng ký lại. <a href='Chon.php'>Thử lại</a>";
    }
    ?>