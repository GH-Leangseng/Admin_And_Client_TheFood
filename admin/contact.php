<?php include("menu_left.php");?>

<div class="box_right">
              
              <div class="title">
                  <h2>dashboard Contact</h2>
              </div>
              <?php include("function.php");?>
              <button class="btn btn-primary mt-3 add-contract" data-toggle="modal" data-target="#myModal"><span><i class="fas fa-plus"></i></span></button>
              
              <!-- <form method="post">
                  <div class="form-group mt-3">
                      <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="id...">
                    <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="Problem...">
                    <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="username...">
                    <input type="text" class="btn btn-outline-dark" name="" id="" placeholder="email...">
                    <input type="submit" class="btn btn-danger"  value="Search">
                  </div>
              </form> -->

              <div class="table1">
                  <table class="table text-center table-striped table-bordered">
                      <tr>
                        <th class="id">ID</th>
                        <th>Email</th>
                        <th>phone Number</th>
                        <th>URL-Facebook</th>
                        <th>URL-Telegram</th>
                        <th>URL-chat</th>
                        <th class="status">Status</th>
                      </tr>
                    
                      
              
                      <?php select_data_contact();?>
                      
                      
                  </table>
              </div>
             
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Contact to Admin</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form  method="post">
                    <!-- Modal body -->
                    <div class="modal-body">
                        
                                <div class="input-grouo">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control"  name="email" id="Email">
                                </div>
                                <div class="input-grouo">
                                    <label for="number">Phone number</label>
                                    <input type="text" class="form-control"  name="number" id="number" maxlength='9'>
                                </div>
                                <div class="input-grouo">
                                    <label for="Facebook">URL-facebook</label>
                                    <input type="text" class="form-control"  name="facebook" id="Facebook">
                                </div>
                                <div class="input-grouo">
                                    <label for="telegram">URL-telegram</label>
                                    <input type="text" class="form-control"  name="tele" id="telegram">
                                </div>
                                <div class="input-grouo">
                                    <label for="chat">URL-chat</label>
                                    <input type="text" class="form-control"  name="chat" id="chat">
                                </div>
                                <input type="hidden" name="id" id="id" value="123">
                                
                          
                        </div>
                        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <input type="submit" class="btn btn-success submit"  name="contact" value="Submit">
                              <button type="submit" class="btn btn-primary reupdate" name="reupdate">Reupdate</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            
                            </div>
                      </form>
                    
                      
                    
                    
                  </div>
                </div>
              </div>

      </div>
    </div>
  </body>
  
  <script src="asset/contact.js"></script> 
</html>