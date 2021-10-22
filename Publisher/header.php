<?php 
session_start();
if(!isset($_SESSION['username'])){
 header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/mystyle.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="css/style.css">
		
</head>
<body>
<div class="col-md-2">
                        <a href="post.php"><img class="logo" src="images/publisher.jpg"></a>
                    </div>
<div class="text-center">
	<h1 class="header">Publisher</h1>
</div>
<!--menu starts-->
<div class="text-center">
	<a href="post.php" class="btn btn-primary">All News</a>
	<a href="all_news.php" class="btn btn-warning">Search News</a>
	<a onclick="return confirm('Are You Sure Delete this account ?')" href='delete-user.php' class="btn btn-info">Delete Account</a>
	<!-- <a href="delete-user.php" class="btn btn-info">Delete Account</a> -->
	<a href="logout.php" class="btn btn-danger"><?php echo $_SESSION['username'] ?> logout</a>		
</div>
<!--menu ends-->
