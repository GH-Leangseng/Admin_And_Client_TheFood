<?php
        include("connect.php");
        mysqli_set_charset($connect,'utf8');
        $count_view = $_POST['count1'];
        $id = $_POST['id1'];
        // echo $id;
        $upate_view = "UPDATE tbl_view_food SET view = $count_view WHERE id = $id";
        $result_update_view = $connect->query($upate_view);
        if(!$result_update_view){
                echo "Fail" . $connect->error;
        }else{
                echo 'x';
        }
        
?>