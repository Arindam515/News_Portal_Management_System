<?php 
     session_start();
    // if(!isset($_SESSION['username'])){
    //     header("location: index.php");
    // }


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>JOURNALIST PANEL</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="post.php"><img class="logo" src="images/journalist-logo.jpg"></a>
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                    <div class="col-md-offset-9  col-md-3">
  <a href="logout.php" class="admin-logout" ><?php echo $_SESSION['username'] ?>, logout</a>
                    </div>
                    <!-- /LOGO-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <center>
						   <ul class="admin-menu">

                                <!-- For Admin  -->
                                <?php if($_SESSION['user_role'] == '0'){ ?>

								<li>
									<a href="category.php">Category</a>
								</li>

								<li>
									<a href="users.php">Users</a>
								</li>
                                <?php } ?>


                                <!-- For Publisher  -->
                                <?php if($_SESSION['user_role'] == '1'){ ?>

								<li>
                                <a href="post.php">News</a>
								</li>
                                <li>
									<a href="">Comment</a>
								</li>

                                <?php } ?>


                                <!-- For Journalist -->
                                <?php if($_SESSION['user_role'] == '2'){ ?>

                                <li>
									<a href="post.php">News</a>
								</li>
                                <li> 
                                    <a href = ""> Comment </a>
                                </li>

                                <?php } ?>
                               

                                

							</ul>
						<center>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
