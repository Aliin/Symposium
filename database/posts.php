<?PHP

require '../../includes/classes/category.php';

function get_categories()
{
	//FUNCTION CODE
	//Function should return an array that holds an object for each category which stores the mysql data from the categories table.
	//the objects have to have the "title" property.
	
	require 'helpers/connectDB.php';
	
	
	
	return $cat_array;
}

?>
