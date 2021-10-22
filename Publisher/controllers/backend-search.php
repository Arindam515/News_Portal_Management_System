<!-- 
	// include 'model/db.php';
	// //validations variables
	// $err_db="";

	// function searchNews($key){
	// 	$query = "SELECT post.post_id, post.title, post.description,post.post_img,
	// 	 post.post_date,post.category, category.category_name,user.username FROM post
	// 	 LEFT JOIN category ON post.category = category.category_id LEFT JOIN user ON post.author = user.user_id
	// 	  where post.title like '%$key%' or post.description like '%$key%' or category.category_name like '%$key%'";
	// 	// $rs = get($query);
	// 	return $query;
	// }
 -->

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "news_portal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_REQUEST["term"])){
    // Prepare a select statement
#"SELECT * FROM countries WHERE name LIKE ?";
    $sql = "SELECT post.post_id, post.title, post.description,post.post_img,
	post.post_date,post.category, category.category_name,user.username FROM post
	LEFT JOIN category ON post.category = category.category_id LEFT JOIN user ON post.author = user.user_id
	 where post.title like '%$term%' or post.description like '%$term%' or category.category_name like '%$term%'";
    // $sql = "SELECT * FROM post WHERE title LIKE ? ";
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["title"] . "</p>";
                    //echo "<a href='update-post.php?id=".$n["post_id"]."'>".$n["title"]."</a><br>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>