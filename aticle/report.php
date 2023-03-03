<?php include("navbar.php"); ?>
<?php include("navbarPhone.php"); ?> 
<?php include("function.php"); ?> 
<div class="container-fluid contact">
<script src="asset/js/report.js"></script>
        <div class="banner">
                <?php Select_contact();?>
                <div class="text">
                               <h1>Let have a Talk with us</h1>
                               
                </div>
        </div>
        
        <div class="container">
        <h2 class="text-center pt-3">Please input your data to me</h2>
                <form  method='post'>
                        <div class="form-group pt-3">
                                <label for="">What can your problem! </label>
                                <input type="text" class="form-control " name="problem" id="problem"  placeholder="">
                        </div>
                        <div class="form-group pt-3">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" id="username"  placeholder="Username...">
                        </div>
                        <div class="form-group pt-3">
                                <label for="">Email: </label>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="input email...">
                        </div>
                        <div class="form-group pt-3">
                                <label for="">Password: </label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="input password...">
                        </div>
                        <div class="form-group pt-3">
                                <label for="">Comment: </label>
                               <textarea name="comment" id="comment" class="form-control" cols="30" rows="10"  placeholder="............"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success mt-3 mb-3" name='submit' id="sumbit_report"  value="Submit">
                </form>
        </div>

</div>
<?php include("footer.php"); ?>