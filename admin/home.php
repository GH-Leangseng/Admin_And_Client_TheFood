<?php include("menu_left.php");?>
<div class="box_right">
       <script src="asset/home_banner.js"></script>
      
              <div class="title">
                  <h2>dashboard HOME</h2>
              </div>
              <?php include("function.php");?>
             
              <button class="btn btn-primary mt-3 add-btn" data-toggle="modal" data-target="#myModal"><span><i class="fas fa-plus"></i></span></button>
                <!-- <form action="" class="mt-2" method="post">
                    
                      <input type="text" class="btn btn-outline-danger" placeholder="id"  name = "id">
                      <input type="text" class="btn btn-outline-danger" placeholder="filename" name = "filename" >
                      <input type="text" class="btn btn-outline-danger" placeholder="type" name = "type" >
                      <input type="submit" class="btn btn-outline-success search " name='search' value="Search">

                </form> -->
              <div class="table1">
                  <table class="table text-center table-striped table-bordered">
                      <tr>
                        <th class="id">ID</th>
                        <th>file_image</th>
                        <th>picture</th>
                        <th>Type</th>
                        <th class="status">Status</th>
                      </tr>
                      <!-- collect from database to display  -->
                      <?php
                     
                              $select_banner_home = "SELECT * FROM slide_picture ORDER BY id DESC";
                              $result_banner_home = $connect -> query($select_banner_home);
                              while($row = mysqli_fetch_assoc($result_banner_home)){
                                echo '<tr class="result_auto">
                                          <td>'.$row['id'].'</td>
                                          <td>'.$row['img'].'</td>
                                          <td>
                                          <img src="../image/'.$row['img'].'" style="object-fit: contain;" width="150px" height="50px" alt=""></td>
                                          <td>'.$row['type'].'</td>
                                          <td>
                                            <button class="btn btn-danger m-2 delete">Delete</button>
                                            <button class="btn btn-primary btn-update" data-toggle="modal" data-target="#myModal">Update</button>
                                          </td>
                                        </tr>';
                            }
                      
                      ?>
                      
                      
                  </table>
              </div>
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Banner-image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form  method="post" enctype="multipart/form-data">
                        <img class="click_upload" src="../image/upload.jpg" width="100%"  alt="">
                        <select name="type" id="" class="form-control mb-2 btn btn-outline-dark">
                             <option value="Home">Homepage</option>
                             <option value="Service">Service-page</option>
                             <option value="Contact">Contact-page</option>
                             <option value="Team">Team-page</option>
                        </select>
                        <input type="file" class="form-control file_image" name="file_name" id="fileinput">
                        <input type="hidden" name="file" id="file_name">
                    </div>
                    
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <input type="submit" class="btn btn-success submit" name="submit-home-banner" value="Submit">
                        <input type="submit" class="btn btn-outline-info update" value="Update" name="update">
                        <input type="hidden" class="idForUpdate" name="id" id="id">
                        <input type="hidden" class="imageForUpdate" name="" id="">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>

      </div>
    </div>
  </body>
  <script src="asset/action.js"></script>
  <script src="asset/dashboardAction.js"></script>
</html>