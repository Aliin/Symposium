<?PHP

require '../../includes/classes/category.php';

function get_categories()
{
	//FUNCTION CODE
	//Function should return an array that holds an object for each category which stores the mysql data from the categories table.
	//the objects have to have the "name" property.
	
	//connect to the database
	require 'helpers/connectDB.php';
	$catArray = array();
	
	//constructs for each row in the categories table a category object which holds name and id right now.
	$query = "SELECT name FROM categories";
	$result = $connection->mysqli_query($query);
	while ($row = mysqli_fetch_assoc($result)) {
		$thisCatName = $row[0];
		$fetchCategory = new category($thisCatName);
		array_push($catArray, $fetchCategory);
	}
	
	//Debug method
	for ($i = 0; $catArray[$i] != 0; $i++) {
		echo $catArray[$i]->name;
	}
	return $catArray;
}

?>
