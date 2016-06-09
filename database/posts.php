<!--
----------------------------------------------------------------
@project      : Symposium Forum Software
@version      : v.0.1.0
@author       : Open-source
@description  : Returns an array that holds an object for each category which stores the mysql data from the categories table.
----------------------------------------------------------------
-->
<?php

//File needs to be renamed into categories.php.
require '../includes/classes/category.php';
require 'helpers/connectDB.php';


function get_categories()
{
	//the objects have to have the "title" property.
	
	//connect to the database
	
	$catArray = array();
	global $connection;
	//constructs for each row in the categories table a category object which holds name and id right now.
	$query = "SELECT name FROM categories";
	$result = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		$thisCatName = $row['name'];
		$fetchCategory = new category($thisCatName);
		array_push($catArray, $fetchCategory);
	}
	
	//Debug method
	//for ($i = 0; $catArray[$i] != 0; $i++) {
	//	echo $catArray[$i]->name;
	//}
	return $catArray;
}
