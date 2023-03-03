
      <!-- footer -->
       <div class=" footer">
                       <div class="container">
                                <div class="row">
                                        <div class="col-sm-4">
                                        <h4>Food Cambodia</h4>
                                                <div class="box_image">
                                                        <img src="../dist/icon/cambodia.jpg" width="200px" height="100px" alt="">
                                                </div>
                                        </div>
                                        <div class="col-sm-4">
                                                <h4>Menu</h4>
                                                <ul>
                                                        <li><a href="home.php"><span><i class="fas fa-arrow-right"></i></span> Home</a></li>
                                                        <li><a href="service.php"><span><i class="fas fa-arrow-right"></i></span>service</a></li>
                                                        <li><a href="report.php"><span><i class="fas fa-arrow-right"></i></span>Report</a></li>
                                                        <li><a href="team.php"><span><i class="fas fa-arrow-right"></i></span>Team</a></li>
                                                        
                                                </ul>
                                        </div>
                                        <div class="col-sm-4">
                                                <h4>Contact</h4>

                                                <?php
                                                        include("connect.php");  
                                                        global $connect;
                                                        $select_contact = "SELECT * FROM tbl_contact ORDER BY id DESC LIMIT 1";
                                                        $result_get_data_contact = $connect->query($select_contact);
                                                        $row= mysqli_fetch_assoc($result_get_data_contact);
                                                        echo '
                                                                <ul>
                                                                        <li><a href=""><span><i class="fas fa-arrow-right"></i></span>Phone :'.$row['number'].' </a></li>
                                                                        <li><a href=""><span><i class="fas fa-arrow-right"></i></span>'.$row['email'].'</a></li>
                                                                        <li><a href=""><span><i class="fas fa-arrow-right"></i></span>Social Media Only</a></li>
                                                                        <a href="'.$row['facebook'].'"><span><i class="fab fa-facebook"></i></span></a>
                                                                        <a href="'.$row['tele'].'"><i class="fab fa-telegram"></i></span></a>
                                                                        <a href="'.$row['chat'].'"><i class="fab fa-facebook-messenger"></i></span></a>
                                                                </ul>';
                

                                                ?>
                                        </div>
                                </div>
                       </div>
                </div>

        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 100,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</html>