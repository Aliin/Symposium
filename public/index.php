<?PHP include('../views/page/standard_header.php'); ?>
    <div class="cat_wrapper">
         <?php
    //This php code should do nothing but display the data that is given by functions in another, not user-accessible file.

    //get the file that holds functions to display the posts.
    require '../database/posts.php';

    //a function to be written in posts.php that returns an array of objects. Each object will be created from the mysql table for a category.
    $categories = get_categories();

    //loop through the category objects in the array successively and print their title property.
    foreach ($categories as $cat) {
		
		?>
		<?PHP include('../views/categories/header.php'); ?>
		<?PHP
        echo $cat->name;
        //function is to be extended.#
		?>
		<?PHP include('../views/categories/footer.php'); ?>
		<?PHP
    }
?>
<?PHP include('../views/page/standard_footer.php'); ?>
