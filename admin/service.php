<?php include("menu_left.php");?>
<div class="box_right">
              <div class="title">
                  <h2>dashboard SERVICE</h2>
              </div>
              <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#myModal"><span><i class="fas fa-plus"></i></span></button>
              <form action="" method="get">
                  <div class="form-group mt-3">
                      <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="search id...">
                    <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="search file_image...">
                    <input type="submit" class="btn btn-danger" value="Search">
                  </div>
              </form>
              <div class="table1">
                  <table class="table text-center table-striped table-bordered">
                      <tr>
                        <th class="id">ID</th>
                        <th>file_image</th>
                        <th>picture</th>
                        <th class="status">Status</th>
                      </tr>
                    
                      <tr>
                        <td>1</td>
                        <td>phone.jpg</td>
                        <td><img src="../image/background_slide.jpg"  style="object-fit: cover;" width="150px" height="50px" alt=""></td>
        
                        <td>
                          <button class="btn btn-danger m-2">Delete</button>
                          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update</button>
                        </td>
                      </tr>
                      
                      
                      
                      
                      
                  </table>
              </div>
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Modal Heading</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      Modal body..
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>

      </div>
    </div>
  </body>
  <script src="asset/action.js"></script>
</html>