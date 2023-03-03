<?php include("menu_left.php"); ?>

<script src="asset/category_food.js"></script>
<div class="box_right">
  <div class="title">
    <h2>dashboard Food</h2>
  </div>
  <button class="btn btn-primary mt-3 add_food" data-toggle="modal" data-target="#myModal"><span><i class="fas fa-plus"></i></span></button>
  <!-- <form action="" method="get">
    <div class="form-group mt-3">
      <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="id...">
      <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="name...">
      <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="title...">
      <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="type...">
      <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="view...">
      <input type="submit" class="btn btn-danger" value="Search">
    </div>
  </form> -->
  <?php include("function.php"); ?>
  <div class="table1">
    <table class="table text-center table-striped table-bordered">
      <tr>
        <th class="id">ID</th>
        <th style="width: 100px;" >Title</th>
        <th style="width: 100px;">category</th>
        
        <th>Url_youtube</th>
        <th>Views</th>
        <th>type</th>
        <th>file_image</th>
        <th>image</th>
        <th class="status">Status</th>
      </tr>

      
    <?php select_food();?>

      

    </table>
  </div>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Food</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title-name</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="ឧទា ពងទាចៀន">
                </div>
                
                <div class="form-group">
                    <label for="category">Category</label>
                    <textarea name="category" id="category" cols="30" rows="3" class="form-control" placeholder="ឧទា ពងទា ស្គ"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="url_youtube">Url_youtube</label> <br>
                    <input type="text" class="form-control" name="urlyoutube" id="urlyoutube" placeholder="Ex https://www.youtube...">
                </div>
                <div class="form-group">
                      <select name="type_food" class="form-control btn btn-primary" id="type_food">
                            <option value="ម្ហូបចៀន">ម្ហូបចៀន</option>
                            <option value="ម្ហូបឆា">ម្ហូបឆា</option>
                            <option value="ម្ហូបស្លរ">ម្ហូបស្លរ</option>
                            <option value="ម្ហូបពិសេស">ម្ហូបពិសេស</option>
                      </select>
                      <img class="img_upload" src="../image/upload.png" width="200px" alt="">
                      <input type="file" class="form-control" name="file_food" id="open_file">
                      
                      <input type="hidden" name="image"  class="form-control mt-2"  id="file_name">
                      <input type="hidden" name="get_id" id="get_id">
                      <input type="hidden" name="get_title" id="get_title">
                      <input type="hidden" name="get_category" id="get_category">
                      <input type="hidden" name="get_urlyoutube" id="get_urlyoutube">
                      <input type="hidden" name="get_type_food" id="get_type_food">
                      
                </div>
               

          
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <input type="submit" class="view_food btn btn-outline-success" name="submit-food" value="Submit">
            <input type="submit" class=" update_food btn btn-outline-primary" name="submit-udpate" value="update">
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

</html>