<?php include "header.php"; 
include ('Controller/add_user_val.php');

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->


                  <form  action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>First Name</label>
                          <!-- <input type="text" name="fname" class="form-control" placeholder="First Name" required> -->
                          <input id="fname" type="text" name="fname" class="form-control" value="<?php echo $fname;?>" ><br>
                <span id="err_fname" style="color:red;"><?php echo $err_fname;?></span></td>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <!-- <input type="text" name="lname" class="form-control" placeholder="Last Name" required> -->
                          <input type="text" id="lname" name="lname" class="form-control" value="<?php echo $lname;?>" ><br>
                        <span id="err_lname" style="color:red;"><?php echo $err_lname;?></span>
                        </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <!-- <input type="text" name="user" class="form-control" placeholder="Username" required> -->
                          <!-- <input type="text" name="user" class="form-control" placeholder="Username" required> -->
                          <input type="text" id="uname" name="username" class="form-control" onfocusout="checkUsername(this) " value="<?php echo $uname;?>"><br>
                <span id="err_uname" style="color:red;"><?php echo $err_uname;?></span>
                      </div>

                      <div class="form-group">
                          <label>Password</label>
                          <!-- <input type="password" name="password" class="form-control" placeholder="Password" required> -->
                          <input id="pass" name="password" class="form-control" value="<?php echo $pass;?>" type="password"><br>
                        <span id="err_pass" style="color:red;"><?php echo $err_pass;?></span>
                        </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                            <option selected disabled>Choose</option>
                              <option value="0">Admin</option>
                              <option value="1">Publisher</option>
                              <option value="2">Journalist</option>
                              <option value="3">User</option>
                          </select><br>
                          <span id="err_role" style="color:red;"><?php echo $err_role;?></span>
                      </div>
                      <input type="submit"  name="submit" class="btn btn-primary" value="Add" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>
