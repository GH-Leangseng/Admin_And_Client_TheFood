<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php
        $local = "localhost";
        $root = "root";
        $pw = "";
        $db = "base_news";
        $connect = mysqli_connect($local,$root,$pw,$db);
        if (!$connect) {
          echo("Connection failed: " . mysqli_connect_error());
        }
        mysqli_set_charset($connect,'utf8');

       function select_report() {
                global $connect;
                $select_report = "SELECT * FROM tbl_report ORDER BY id DESC ";
                $reult_report = $connect->query($select_report);
                while($row = mysqli_fetch_assoc($reult_report)){
                      echo '<tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['problem'].'</td>
                                <td>'.$row['username'].'</td>
                                <td>'.$row['password'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['comment'].'</td>
                                <td>
                                        <button class="btn btn-danger m-2 delete_report">Delete</button>
                                      
                                </td>
                                </tr>' ; 
                }
       }
      

        // home_banner 
        function addbannerhome(){
                if(isset($_POST['submit-home-banner'])){
                       
                        global $connect;

                        $file_name = rand(1,19999).'-'.$_FILES['file_name']['name']; //generfile filename
                                $part_file = "../image/".$file_name; //part to folder 
                                move_uploaded_file($_FILES['file_name']['tmp_name'],$part_file); // throw picture to folder
                        $type = $_POST['type'];

                        $insert_banner_home = "INSERT INTO slide_picture VALUES (null,'$file_name','$type')"; //insert data
                        $result_insert_banner_home = $connect->query($insert_banner_home); ///query from data
                        if(!$result_insert_banner_home){ //check data have or not 
                                echo "fail";
                        } 
                        
                        
                }
        }
        addbannerhome();

        // function file1($name_file){
        //         $file_name = rand(1,19999).'-'.$_FILES['name_file']['name'];
        //         $part_file = "../image/".$file_name;
        //         move_uploaded_file($_FILES['name_file']['tmp_name'],$part_file);
        //         return $file_name;
        // }
        

        // view food
        function insert_view_food() {
                global $connect;
                if(isset($_POST['submit-food'])){
                       
                        $title_name = $_POST['title'];
                        $category = $_POST['category'];
                      
                        $urlyoutube = $_POST['urlyoutube'];
                        $type_food = $_POST['type_food'];

                        $file_food = rand(1,19999).'-'.$_FILES['file_food']['name'];
                        $part_file = "../image/".$file_food;
                        move_uploaded_file($_FILES['file_food']['tmp_name'],$part_file);
                        
                        $view = 0;
                        $insert_food  = "INSERT INTO tbl_view_food VALUES (null,'".$title_name."','".$category."','".$urlyoutube."','".$view."','".$type_food."','".$file_food."')";
                        $result_insert_food = $connect->query($insert_food);
                        if(!$result_insert_food == TRUE){
                                echo "Fail ".mysqli_error($connect);
                        }


                }
        }
        insert_view_food();

        function select_food() {
                global $connect;
                $select_view_food = "SELECT * FROM tbl_view_food ORDER BY id DESC";
                $result_view = $connect->query($select_view_food);
                while($row = mysqli_fetch_assoc($result_view)){
                        echo '<tr>
                                <td>'.$row['id'].'</td>
                                <td style="width: 300px">'.$row['title'].'</td>
                                <td>
                                        <div class="hide">
                                        '.$row['category'].'
                                        </div>
                                </td>
                               
                        
                                <td>
                                        <div class="hide">
                                        '.$row['urlyoutube'].'
                                        </div>
                                </td>
                                <td>'.$row['view'].'</td> 
                                <td>'.$row['type_food'].'</td>
                                <td>'.$row['img'].'</td>
                                
                                <td><img src="../image/'.$row['img'].'" style="object-fit: contain;" width="150px" height="50px" alt="'.$row['img'].'"></td>
                        
                                <td>
                                        <button class="btn btn-danger m-2 delete_category">Delete</button>
                                        <button class="btn btn-primary click_update" data-toggle="modal" data-target="#myModal">Update</button>
                                </td>
                        </tr>';
                }
        }
        function upload($file){
                $file_food1 = rand(1,19999).'-'.$_FILES[$file]['name'];
                $part_file = "../image/".$file_food1;
                move_uploaded_file($_FILES[$file]['tmp_name'],$part_file); 
                return $file_food1;
        }


        // update_banner_update
         function update_banner(){
                global $connect;
                if(isset($_POST['update'])){
                      $check_file = $_FILES['file_name']['name'];
                      $old_file_picture = $_POST['file'];
                      $id = $_POST['id'];
                      $type = $_POST['type'];
                      if( $check_file == "" ) {
                        $check_file = $old_file_picture; 
                      } else {
                       $check_file = upload('file_name');
                     }
                     $Update_picture = "UPDATE slide_picture SET img = '".$check_file."', type = '".$type."' WHERE id = $id ";
                     $result_update = $connect->query($Update_picture);
                     if(!$result_update == TRUE){
                        echo "Fail ".mysqli_error($connect);
                     }


                      
                }
         }
        update_banner();

        
        // update view
        function update_view_food(){
                global $connect;
                $id1 = $_POST['id'];
                $title1  = $_POST['title'];
                $category1 = $_POST['category'];
               
                $urlyoutube1 = $_POST['urlyoutube'];
                $type_food1 = $_POST['type_food'];
                
                $file_food1 = $_FILES['file_food1']['name'];
                // check picture if not click get old pic
                if($file_food1 == ""){
                        $file_food1 = $_POST['image'];
                }else{
                        $file_food1 = rand(1,19999).'-'.$_FILES['file_food']['name'];
                        $part_file = "../image/".$file_food1;
                        move_uploaded_file($_FILES['file_food']['tmp_name'],$part_file); 
                }

                $update_view_food = " UPDATE tbl_view_food SET title = '".$title1."' , url_youtube = '".$urlyoutube1."' , category =  '".$category1."', type = '".$type_food1."' , image_food = '".$file_food1."' WHERE id_view = '".$id1."' ";
                $reult_update_view_food = $connect->query($update_view_food);
                if(!$reult_update_view_food == TRUE){
                        echo "Fail ".mysqli_error($connect);
                }
                
                
                
        }
        // update_view_food();
        
        
        function insert_contact(){
                global $connect;
                if(isset($_POST['contact'])){
                       $email  = $_POST['email'];
                       $phone = $_POST['number'];
                       $facebook = $_POST['facebook'];
                       $tele = $_POST['tele'];
                       $chat = $_POST['chat'];
                       $insert_contact = "INSERT INTO tbl_contact VALUES (null,'".$email."','".$phone."','".$facebook."','".$tele."','".$chat."')";
                        $result_insert_contact = $connect->query($insert_contact);
                        if(!$result_insert_contact == TRUE){
                                echo "Fail to insert data";
                        }
                       
                       
                }
        }
         insert_contact();

        function select_data_contact(){
                global $connect;
                        $select_contact = "SELECT * FROM tbl_contact ORDER BY id DESC LIMIT 5";
                        $result_get_data_contact = $connect->query($select_contact);
                        while($row= mysqli_fetch_assoc($result_get_data_contact)){
                                echo '<tr>
                                                <td>'.$row['id'].'</td>
                                                <td>'.$row['email'].'</td>
                                                <td>'.$row['number'].'</td>
                                                <td>'.$row['facebook'].'</td>
                                                <td>'.$row['tele'].'</td>
                                                <td>'.$row['chat'].'</td>
                                                <td>
                                                        <button class="btn btn-danger m-2 delete_contact" id="delete">Delete</button>
                                                        <button class="btn btn-primary update_contact" data-toggle="modal" data-target="#myModal">Update</button>
                                                </td>
                                </tr>';
                        }             
        } 

        function update_contact(){
                global $connect;
                if(isset($_POST['reupdate'])){
                       $id = $_POST['id'];
                       $email  = $_POST['email'];
                       $phone = $_POST['number'];
                       $facebook = $_POST['facebook'];
                       $tele = $_POST['tele'];
                       $chat = $_POST['chat'];
                
                        $update_contact = "UPDATE tbl_contact SET email = '".$email."' , number = '".$phone."' , facebook = '".$facebook."' , tele = '".$tele."' , chat = '".$chat."' WHERE id = $id ";

                         $result_update_contact = $connect->query($update_contact);
                         if(!$result_update_contact == TRUE){
                                 echo "Fail to update data" . mysqli_error($connect);
                         }
                       
                       
                }
        }
         update_contact();

        function upload_img($name_file){
                $isNull = $_FILES[$name_file]['name']."Not";
                if($isNull =="Not"){
                        return $isNull;
                }else{
                        $file_name = rand(1,19999).'-'.$_FILES[$name_file]['name']; //generfile filename
                        $part_file = "../image/".$file_name; //part to folder 
                        move_uploaded_file($_FILES[$name_file]['tmp_name'],$part_file);
                        return $file_name;
                }
                
       }
        function update_food(){
                global $connect;
                if(isset($_POST['submit-udpate'])){
                        $title = $_POST['title'];
                        $category = $_POST['category'];
                        $urlyoutube = $_POST['urlyoutube'];
                        $type_food = $_POST['type_food'];
                        $img = upload_img('file_food'); 
                        $id = $_POST['get_id'];
                        if($title == ""){
                                $title = $_POST['get_title'];
                        }
                        if($category == ""){
                                $category = $_POST['get_category'];
                        }
                        if($urlyoutube == ""){
                                $urlyoutube = $_POST['get_urlyoutube'];
                        }
                        if($type_food == ""){
                                $type_food = $_POST['get_type_food'];
                        }
                        if($img == "Not"){
                                $img = $_POST['image'];
                        }

                        $update_food = "UPDATE tbl_view_food SET title = '".$title."',category = '".$category."',urlyoutube = '".$urlyoutube."',type_food = '".$type_food."',img = '".$img."' WHERE id = $id";
                        $result = $connect->query($update_food); 
                        if(!$result){
                                echo 'Error '.$connect->error;
                        }
                                                                   
                        
                }
        }
        update_food();



        
       

        


?>