<?php include("function.php");?>
<?php include("navbar.php");?>
                <!-- banner image -->
                <div class="banner_image">
                        <!-- <img src="../image/background_slide.jpg" alt=""> -->
                        <!-- Swiper -->
                                <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                                <?php 
                                                include("connect.php");
                                                     $select_bn_home = "SELECT * FROM slide_picture  WHERE type = 'Contact' ORDER BY id DESC LIMIT 6";
                                                     $result_bn_home = $connect->query($select_bn_home);
                                                     while($row = mysqli_fetch_assoc($result_bn_home)){
                                                             echo '<div class="swiper-slide">
                                                                             <img class="image_banner"  src="../image/'.$row["img"].'" alt="">
                                                                   </div>';
                                                     }
                                                ?>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                </div>
                </div>
                