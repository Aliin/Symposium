<?php

require_once '../config.php';
require_once $MUP . $DAT_CONN;
require_once $MUP . $CLS_POST;

function get_posts($catId) {
	$query = "SELECT * FROM posts WHERE category_id=$catId";
	$result = mysqli_query($connection, $query);
	$postsArray = array();
	
	while ($row = mysqli_fetch_assoc($result)) {
		$myPost = new Post($row);
		array_push($myPost);
	}
	
	return $postsArray;
}