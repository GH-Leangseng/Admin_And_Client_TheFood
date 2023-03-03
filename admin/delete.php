<?php
        $id = $_POST['id_picture'];     
        include("connect.php");
        $delete = "DELETE  FROM slide_picture WHERE id = ".$id;
        $result = $connect->query($delete);
        if(!$result){
                echo "error query  OR  " . $connect->error; 
        }else{
                echo "Delete picture success ";
        }


?>