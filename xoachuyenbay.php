<?php
            require_once("config.php");

            $id = $_POST['txtid'];

            $sql = "DELETE FROM `lichbay` WHERE `id` = $id";
            //kiểm tra
            if (mysqli_query($conn, $sql))
                //Thông báo nếu thành công
                 echo "<a href='trangchu.php'>Về trang chủ</a>";
            else
                //Hiện thông báo khi không thành công
                echo "Vui lòng xem lại bị lỗi. <a href='CapNhatLichBay.php'>Thử lại</a>";
    
    ?>