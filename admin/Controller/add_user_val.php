<?php 


    $fname="";
	$err_fname="";

    $lname="";
	$err_lname="";

	$uname="";
	$err_uname="";
	
	$pass="";
	$err_pass="";

	$role = "";
	$err_role="";

	$err_db="";

	$hasError=false;
	// $roles = array("Admin","Publisher","Journalist","User");
	

if(isset($_POST['submit']))
{
    include 'model/db.php';
	// Firstname Validation .................

	if(empty($_POST["fname"]))
	{
		$hasError=true;
		$err_fname="&nbsp;&nbsp;*First name required";
	}
	elseif (strlen($_POST["fname"]) <3)
	{
		$hasError = true;
		$err_fname = "&nbsp;&nbsp;*First name must be greater than 2 characters";
	}
    elseif (is_numeric($_POST["fname"]))
    {
      $hasError = true;
      $err_fname = "&nbsp;&nbsp;*First name must be characters";
    }
	else
	{
		$fname = htmlspecialchars($_POST["fname"]);
	}

	// Last name validation .........................

	if(empty($_POST["lname"]))
	{
		$hasError=true;
		$err_lname="&nbsp;&nbsp;*Last name required";
	}
	elseif (strlen($_POST["fname"]) <3)
	{
		$hasError = true;
		$err_lname = "&nbsp;&nbsp;*Last  name must be greater than 2 characters";
	}
    elseif (is_numeric($_POST["lname"]))
    {
      $hasError = true;
      $err_lname = "&nbsp;&nbsp;*Last  name must be characters";
    }
	else
	{
		$lname = htmlspecialchars($_POST["lname"]);
	}

	// Username Validation .........................

	if(empty($_POST["username"]))
	{
      $hasError=true;
      $err_uname= "&nbsp;&nbsp;*Username Required";
    }
    elseif (strlen($_POST["username"]) < 3)
    {
      $hasError = true;
      $err_uname = "&nbsp;&nbsp;*Username must be greater than 3 characters";
    }
  	elseif(strpos($_POST["username"]," "))
     {
        $hasError = true;
        $err_uname = "&nbsp;&nbsp;*Space is not allowed.";
     }
  	else
    {
      $uname = htmlspecialchars($_POST["username"]);
    }
	

    // Password Validation .................

	if(empty($_POST["password"]))
    {
		$hasError=true;
		$err_pass="&nbsp;&nbsp;*Password Required";
	}
    elseif (strlen($_POST["password"]) < 5){
        $hasError = true;
        $err_pass = "&nbsp;&nbsp;*Password must be greater than 4 characters";
    }
    else if(ctype_upper($_POST["password"]) || ctype_lower($_POST["password"]) )
    {
      $hasError = true;
      $err_pass="&nbsp;&nbsp;*Password should combination of uppercase and lowercase alphabet";
    }
    elseif (!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?") ){
        $hasError = true;
        $err_pass = "&nbsp;&nbsp;*Password should have atleast 1 special character ";
    }


    elseif (is_numeric($_POST["password"]))
    {
    $hasError = true;
    $err_pass = "&nbsp;&nbsp;*Password should have uppercase and lowercase alphabe ";
    }

    else
    {
        $l=0;
            $arr_1=str_split($_POST["password"]);

        for ($i=0; $i < count($arr_1) ; $i++)
        {
            if (is_numeric($arr_1[$i]))
            {
                $l++;
                break;
            }
        }
            if ($l==0) {
                $hasError = true;
                $err_pass = "&nbsp;&nbsp;*Password should have atleast 1 number ";
            }
            else
            {
                $pass = htmlspecialchars($_POST["password"]);
            }
        }

        // role validation 

        if(!isset($_POST["role"]))
        {
            $hasError = true;
            $err_role= "&nbsp;&nbsp;*Role Required";
        }
        else{
            $role = $_POST["role"];
        }

    if(!$hasError)
    {
        $fname = mysqli_real_escape_string($connection,$_POST['fname']);
        $lname = mysqli_real_escape_string($connection,$_POST['lname']);
        $user = mysqli_real_escape_string($connection,$_POST['username']);
        $password = mysqli_real_escape_string($connection,($_POST['password']));
        $role = mysqli_real_escape_string($connection,$_POST['role']);
    
    $query = "SELECT username FROM user WHERE username='$user'";
    $result = mysqli_query($connection,$query) or die("Query faild.");

    $count = mysqli_num_rows($result);
    if($count > 0){
    echo "UserName Already Exists.";
    }{
    $query1 = "INSERT INTO user (first_name,last_name,username,password,role) 
    VALUE ('$fname','$lname','$user','$password','$role')";
    $result = mysqli_query($connection,$query1) or die("Query Failed.");

    if($result === true){
        echo "Insert Successfully ! ";
        header("location: user.php");
    }
    //   $rs=insertUsers($fname,$lname,$uname,$pass,$role);
    //   if ($rs === true) {
    //     header("Location:#");
    //   }
    }
    $err_db = $result;
    }
}

// Signup Validation End .......................................................................................................
?> 