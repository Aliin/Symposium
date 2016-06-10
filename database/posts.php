<!--
----------------------------------------------------------------
@project      : Symposium Forum Software
@version      : v0.1.0
@author       : Open-source
@description  : Returns an array that holds an object for each category which stores the mysql data from the categories table.
----------------------------------------------------------------
-->
<?php
function get_categories()
{
	//the objects have to have the "title" property.
	
	require 'helpers/connectDB.php';
	
	$query = 
	
	return $cat_array;
}
