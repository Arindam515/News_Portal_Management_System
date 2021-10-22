<?php
	include 'controllers/NewsController.php';
	$key = $_GET["key"];
	$news = searchNews($key);
	if(count($news) > 0){
		foreach($news as $n){
			
            echo "<a href='update-post.php?id=".$n["post_id"]."'>".$n["title"]."</a><br>";
		}
 	}
 ?>