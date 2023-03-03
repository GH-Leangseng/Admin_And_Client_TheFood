<?php
        include("connect.php");
        $id = $_POST['id_delete'];
        $delete = "DELETE FROM tbl_report WHERE id = $id";
        $result = $connect->query($delete);
        if(!$result){
                echo 'error '. $connect->error;
        }else{
                echo "delete success !! ";
        }

?>