<!DOCTYPE html>
<html>
<head>Our Forum!</head>
<body>

<div class="header">
<h1>Our New Forum!</h1>
</div>
<div class="sidebar">Left Sidebar</div>

<!-- This will be the div that holds all the categories. -->
<div class="cat_wrapper">

<?PHP
	//This php code should do nothing but display the data that is given by functions in another, not user-accessible file.
	
	//get the file that holds functions to display the posts.
	require '../includes/posts.php';
	
	//a function to be written in posts.php that returns an array of objects. Each object will be created from the mysql table for a category.
	$categories = get_categories();
	
	//loop through the category objects in the array successively and print their title property.
	foreach ($categories as $cat) {
		echo $cat->title;
		//function is to be extended.
	}
	
?>

</div>

<div class="footer"></div>
</body>
</html>
