<?php include("header.php");  ?> 
<?php include("navbarPhone.php"); ?> 

                <!-- menu_food -->
             
                <div class="container">
                        <div class="menu_food">
                                <h3 class="title_food">ម្ហូបចៀន</h3>
                                <div class="row">
                                          <?php display_view("ម្ហូបចៀន",8);?>   
                                         
                                        
                                </div>  
                                
                                <h3 class="title_food">ម្ហូបឆា</h3>
                                <div class="row">
                                     <?php display_view("ម្ហូបឆា",8);?>
                                     
                                       
                                </div>       
                                
                                <h3 class="title_food">ម្ហូបស្លរ</h3>
                                <div class="row">
                                        <?php display_view("ម្ហូបស្លរ",4);?>   
                                </div> 
                                
                                <h3 class="title_food">ម្ហូបពិសេស</h3>
                                <div class="row">
                                        <?php display_view("ម្ហូបពិសេស",4);?>
                                       
                               
                                       
                                </div>

                                <!-- pagination -->
                                <div class="pagination">
                                        <a href="">Preceding</a>
                                        <a href="">1</a>
                                        <a href="">2</a>
                                        <a href="">3</a>
                                        <a href="">4</a>
                                        <a href="">5</a>
                                        <a href="">6</a>
                                        <a href="">End</a>
                                </div>
                        </div>
                </div>
<?php  include("footer.php"); ?>
           
         