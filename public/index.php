<!--
----------------------------------------------------------------
@project       : Symposium Forum Software
@version       : v0.1.0
@author        : Open-source
@description   : The page that will be displayed to the user. 
					It displays the categories and links to a display of the posts connected to a category.
----------------------------------------------------------------
-->
<?PHP 

include('../views/page/standard_header.php'); ?>

    <div class="cat_wrapper">
	
    <?php
    //This php code should do nothing but display the data that is given by functions in another, not user-accessible file.

    //get the file that holds functions to display the posts.
    require '../database/categories.php';

    //a function to be written in posts.php that returns an array of objects. Each object will be created from the mysql table for a category.
    $categories = get_categories();

    //loop through the category objects in the array successively and print their title property.
    foreach ($categories as $cat) {
		
		//how to display category data: in php tags put "echo $cat->name;"
		include('../views/categories/category.php');
        
        //function will be extended.
		
    }
	?>
	
	</div>
	<?php
	include('../views/page/standard_footer.php'); ?>