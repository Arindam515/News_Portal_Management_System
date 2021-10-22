<?php 
include 'Controller/Signup_val.php';
?>

<html>

<head>
    <title >Publisher Sign up Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/mystyle.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
	
<body>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h1 class="admin-heading">Publisher Signup</h1>
                  <h3 align="right" ><a href="../Homepage.php">Home Page</a></h3>
                </div>
              <div class="col-md-offset-3 col-md-6">   
        
              <!-- Form Start  -->

	<form  action=" " onsubmit="return validate()"  method="post" enctype="multipart/form-data">

        <h5><?php echo $err_db; ?></h5>

        <div class="form-group">
            <label>First Name</label>   
            <input id="fname" type="text" name="fname" class="form-control" value="<?php echo $fname;?>" ><br>
            <span id="err_fname" style="color:red;"><?php echo $err_fname;?></span>
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" id="lname" name="lname" class="form-control" value="<?php echo $lname;?>" ><br>
            <span id="err_lname" style="color:red;"><?php echo $err_lname;?></span>
        </div>
        <div class="form-group">
            <label>User Name</label>
            <input type="text" id="uname" name="username" class="form-control" onfocusout="checkUsername(this) " value="<?php echo $uname;?>"><br>
            <span id="err_uname" style="color:red;"><?php echo $err_uname;?></span>
        </div>
        <div class="form-group">
            <label>Password</label>
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
        <label>
        <input type="submit" name="Signup" class="btn btn-primary" value="Sign Up" required><br>
        </label>
        <label>
        You have an account please <a href="index.php">Login</a>
        </label>
	</form> 
           <!-- Form End  -->
</div>
</div>
</div>
</div>	
<!-- <script src="js/signup.js"></script>-->
<script src="js/Psignup_jsval.js"></script>
</body>
</html>
<?php include "footer.php"; ?>