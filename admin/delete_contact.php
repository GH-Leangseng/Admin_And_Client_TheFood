<?php
         include("connect.php");
        $id = $_POST['id'];
        $delete_contact = "DELETE FROM tbl_contact WHERE id = $id";
        $result_delete_contact = $connect->query($delete_contact);
        if($result_delete_contact == TRUE) {
                echo "Ok ";
        }

?>