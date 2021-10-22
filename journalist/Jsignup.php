<?php 
include 'Controller/Signup_val.php';
?>

<html>

    <head>
	     <title >Journalist Sign up Form</title>
         <link rel="stylesheet" href="css/style2.css">
	</head>
	
	<body>
    <div  class="text-center center">    
	<form  action=" " onsubmit="return validate()"  method="post" enctype="multipart/form-data">

        <h5><?php echo $err_db; ?></h5>

	<p align="right"><a href="../Homepage.php">Home Page</a></p>
		<table  align="center" >
            <tr>
                <caption><h2>Journalist | Signup </h2></caption>
            </tr>

             <tr>
                <td>First name</td>
                <td>: <input id="fname" type="text" name="fname" value="<?php echo $fname;?>" ><br>
                <span id="err_fname" style="color:red;"><?php echo $err_fname;?></span></td>
            </tr>

            <tr>
                <td>Last name</td>
                <td>: <input type="text" id="lname" name="lname" value="<?php echo $lname;?>" ><br>
                <span id="err_lname" style="color:red;"><?php echo $err_lname;?></span></td>
            </tr>
        
             <tr>
                <td>Username</td>
                <td>: <input type="text" id="uname" name="username"  value="<?php echo $uname;?>"><br>
                <span id="err_uname" style="color:red;"><?php echo $err_uname;?></span></td>
            </tr>

            <tr>
                <td>Password</td>
                <td>:  <input id="pass" name="password" value="<?php echo $pass;?>" type="password"><br>
                <span id="err_pass" style="color:red;"><?php echo $err_pass;?></span></td>
            </tr>
            
            <tr>
            <td>Role</td>
                <td>:
                  <select id="role" name="role">
                    <option selected disabled>Choose</option>
                    <option value="0">Admin</option>
                    <option value="1">Publisher</option>
                    <option value="2">Journalist</option>
                    <option value="3">User</option>                 
                 </select><br>
                  <span id="err_role" style="color:red;"><?php echo $err_role;?></span>
                </td>
            </tr>

        
            
            <tr>
                <td></td>
                 <td align="center"><input type="submit" name="Signup" value="Sign Up" ></td>
            </tr>

            <tr>
                <td  colspan="2" align="center">
                <p>You have an account please <a href="index.php">Login</a></p>
                </td>
            </tr>

        </table>	
	</form>
</div>	
<!-- <script src="js/signup.js"></script>-->
<script src="js/Jsignup_jsval.js"></script>
</body>
</html>