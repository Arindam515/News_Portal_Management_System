<?php 
session_start();

$uname="";
$err_uname="";

$pass="";
$err_pass="";

$err_db="";
$hasError=false;
// Signin Validation Start .......................................................................................................

if(isset($_POST["btn_login"]))
{
	
    if(empty($_POST["username"])){
      $hasError=true;
      $err_uname= "&nbsp;&nbsp;*Username Required";
    }
    elseif (strlen($_POST["username"]) < 3){
      $hasError = true;
      $err_uname = "&nbsp;&nbsp;*Username must be greater than 4 characters";
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
	
        
    if(is_numeric($_POST["password"])){
    $hasError = true;
    $err_pass = "&nbsp;&nbsp;*Password should have uppercase and lowercase alphabate ";
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

// Sign in Validation Complete ... 

	if(!$hasError){
        include "model/db.php";

        $username = mysqli_real_escape_string($connection,$_POST['username']);
        $password = $_POST['password'];

        $query = "SELECT user_id,username,role FROM user WHERE username='{$username}' AND password='{$password}'";
        $result = mysqli_query($connection,$query) or die("Query Failed.");

        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){

              session_start();
              $_SESSION["loggeduser"]=$uname;
		      setcookie ("loggeduser",$uname,time()+1200000);
              $_SESSION['username'] = $row['username'];
              $_SESSION['user_id'] = $row['user_id'];
              $_SESSION['user_role'] = $row['role'];

              header("location:UserHome.php");
            }

        }else{
            echo "Username and Password are not matched.";
        }

		// if(authenticateUser($uname,$pass)){
		// 	$_SESSION["loggeduser"]=$uname;
		// 	setcookie ("loggeduser",$uname,time()+1200000);
		// header("Location:UserHome.php");
		
		// }
		$err_db="Username and password invalid";
	}
	
}

?>