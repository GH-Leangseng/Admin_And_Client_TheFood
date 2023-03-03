<?php include("function.php");?>
<?php include("navbarPhone.php"); ?> 
<?php include("navbar.php");?>
<?php 
        $id = $_GET['id'];
        // echo '<script>alert('.$id.')</script>';
       
        function view_food_read() { 
                global $connect;
                global $id;
                $view_read = "SELECT * FROM tbl_view_food WHERE id = $id ";
                $result_view_read = $connect->query($view_read);
                $row = mysqli_fetch_assoc($result_view_read);
                echo ' <h3 class="text-center">របៀបធ្វើម្ហូប - '.$row['title'].'</h3>
                        <img class="image_view" src="../image/'.$row['img'].'"  alt="">
                        <h5 class="read">គ្រឿងផ្សំុ</h5>
                        <ul type="">
                            <li class="read">'.$row['category'].'</li>
                        </ul>
                        <h5  class="read" >របៀបធ្វើ </h5>
                        
                        <a href="'.$row['urlyoutube'].'">
                                <div class="box_video">
                                        <img src="../image/'.$row['img'].'"  alt="">
                                        <span><i class="far fa-play-circle"></i></span>
                                        <div class="background"></div>
                                </div>
                        </a>
                        ';
        }
        // submit cmm
        function insert_commnet (){
                global $connect,$id;
                if(isset($_POST['submit_cmm'])){
                        $cmm = $_POST['input_cmm'];
                        if($cmm == ""){
                                echo '<script>
                                                alert("please input comment");
                                        </script>';
                        }else{
                                $insert_cmm = "INSERT INTO tbl_comment VALUES (null,'".$cmm."','".$id."')";
                                $result_cmm  = $connect->query($insert_cmm);
                                if(!$result_cmm == TRUE) {
                                        echo "Fail ";
                                }
                        }
                       
                }
        }
        insert_commnet ();

         // SELECT comment
         function get_cmm () {
                global $connect,$id;
                $int = (int)$id;
                $get_cmm = "SELECT * FROM tbl_comment WHERE comment_id = $int ORDER BY id DESC ";
                $result_get_cmm = $connect -> query($get_cmm);
                while($row = mysqli_fetch_assoc($result_get_cmm)){
                        echo '<div class="box_cmm"> '.$row['comment'].'</div>';
                }
                
         }
?>
        <script src="action.js"></script>
        <div class="container-fluid slide">
            <div class="swiper1 mySwiper1 slide_picture">
                <div class="swiper-wrapper">
                <!-- slide when view in phone -->
                
                     
                <?php
                   slide_picture();
                ?>

                </div>
                <div class="swiper-pagination"></div>
                </div>
             </div>
        <div class="container-fluid view">
                <div class="side_left">
                        <div class="ads">
                                <img src="../image/smart.gif" alt="">
                        </div>
                        <?php #display_look("ម្ហូបស្លរ",5);?>   
                </div>
                
                
                
                <div class="midlle">
                        <?php view_food_read();?>

                       <hr>
                        
                        <form method="post">
                                <div class="comment">
                                        <span><?php  echo get_row();?></span>
                                        <span><i class="fas fa-sort-amount-up"></i>comment  for support us</span>
                                        <form  class="space-comment" method="post">
                                                <input type="text" name="input_cmm" class="form-control" id="demo" class="text1" placeholder="add comment...">
                                                <div class="submit">
                                                        <input type="submit" class="cancel"  value="Cancel">
                                                        <input type="submit" name="submit_cmm" class="click mb-3" value="comment">
                                                </div>
                                                
                                        </form>
                                        
                                        <?php get_cmm();?>

                                </div>
                        </form>
                
                </div>
                <div class="side_left">
                        <div class="ads">
                                <img src="../image/ads.png" alt="">
                        </div>
                        <?php  #display_look("ម្ហូបពិសេស",5);?> 
                        
                </div>

        </div>
<?php include("footer.php")?>

<script>
      var swiper = new Swiper(".mySwiper1", {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>