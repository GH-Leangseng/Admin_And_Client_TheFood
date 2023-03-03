<?php
        include("connect.php");
        $id = $_POST['id'];
        $delete_cate = "DELETE FROM tbl_view_food WHERE id = $id ";
        $result_delete_cate  = $connect->query($delete_cate);
        if(!$result_delete_cate == True) {
                echo "Fail" .mysqli_error($connect);
        }
?>