<?php include("menu_left.php");?>
<div class="box_right">
      <?php include("function.php");?>
      
              <div class="title">
                  <h2>dashboard Report</h2>
              </div>
              <button class="btn btn-primary mt-3 add_btn" data-toggle="modal" data-target="#myModal"><span><i class="fas fa-plus"></i></span></button>
              <div class="table1">
                  <table class="table text-center table-striped table-bordered">
                      <tr>
                        <th class="id">ID</th>
                        <th>Problem</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th class="status">Status</th>
                      </tr>
      
                      <?php select_report();?>
                      
                      
                  </table>
              </div>
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">report to Admin</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form method="post">
                            <div class="input-grouo">
                                <label for="username">Username</label>
                                <input type="text" class="form-control"  name="username" id="username">
                            </div>
                            <div class="input-grouo">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control"  name="password" id="Password">
                            </div>
                            <div class="input-grouo">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control"  name="email" id="Email">
                            </div>
                            <div class="input-grouo">
                                <label for="problem">what is your problem ?</label>
                                <input type="text" class="form-control"  name="problem" id="problem">
                            </div>
                            <div class="input-grouo">
                                <textarea name="comment" id="comment" class="form-control mt-2" cols="30" rows="10"  placeholder="Comment..."></textarea>
                            </div>
                      
                    </div>
                    
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <input type="submit" class="btn btn-success submit" name="submit" value="Submit">
                        <button type="button" class="btn btn-primary btn_reupdate" data-dismiss="modal">Reupdate</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>

      </div>
    </div>
  </body>
  
</html>