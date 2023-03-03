<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <!-- start 10-04-2022 at 5:20AM  end time 6:13AM-->
        <!-- start 10-05-2022 at 5:06AM  end time 6:06AM-->
        <!-- start 10-06-2022 at 5:06AM  end time 6:06AM-->
        <!-- start 10-07-2022 at 5:15AM  end time 6:06AM-->
        <!-- start 10-08-2022 at 8:40AM  end time 11:00AM-->
        <!-- start 10-08-2022 at 12:30AM  end time 2:10PM-->
        <!-- start 10-09-2022 at 8:00AM  end time 9:00PM-->
        <!-- <link rel="stylesheet" href="../plugin/css/bootstrap.min.css">   connect with css bootstrap -->
        <!-- <link rel="stylesheet" href="../aticle/asset/css/home.css">  connect with css style -->
        <!-- //link with icon from bootstrap -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">  -->
         <!-- Link Swiper's CSS -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="asset/css/view_food.css">
        <link rel="stylesheet" href="asset/css/service.css">
        <link rel="stylesheet" href="asset/css/contact.css">
        <link rel="stylesheet" href="asset/css/team.css">
        <link rel="stylesheet" href="asset/css/navbarPhone.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
        
</head>
<body>
<div class="container-fluid respon">
        <div class="phone">
                <a href="home.php">
                        <div class="logor_text">
                                <h5>Food-Cambodia</h5>
                        </div>
                </a>
                <span class="menu_btn"><i class="fas fa-bars"></i></span>
        </div>
        <div class="menu_slide">
                <div class="to_right">
                        <span><i class="fas fa-times"></i></span>
                </div>
                <div class="list_menu_ofslide">
                        <ul>
                                <a href="home.php">
                                        <li><span><i class="fas fa-arrow-right"></i>Home</span></li>
                                </a>
                                <a href="service.php">
                                        <li><span><i class="fas fa-arrow-right"></i>Service</span></li>
                                </a>
                                <a href="report.php">
                                        <li><span><i class="fas fa-arrow-right"></i>Contact</span></li>
                                </a>
                                <a href="team.php">
                                        <li><span><i class="fas fa-arrow-right"></i>Team</span></li>
                                </a>
                               
                        </ul>
                </div>
        </div>
        
</div>
<script>
        $(document).ready(function(){
                var slide_menu = 0;
                // action slide menu to right
                $(".menu_btn").click(function(){
                        if(slide_menu == 0) {
                               $(".menu_slide").css({ "left" : "0" });
                                slide_menu = 1;
                        } else {
                                $(".menu_slide").css({ "left" : "-60%" });
                                slide_menu = 0;
                        }
                        $(".to_right span").click(function(){
                                $(".menu_slide").css({ "left" : "-60%" });
                                slide_menu = 0;
                        });
                })
               
        })
</script>