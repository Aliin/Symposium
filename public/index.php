<!DOCTYPE html>
<html>
<head>
    <title>Symposium Forum Software</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css" />
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ</a></li>
        </ul>
    </nav>
    <div class="sidebar"></div>
    <div class="cat_wrapper">
        <!-- <?php
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
?> -->
    </div>
    <!--<div class="footer">
        Check out this project on <a href=
        "https://github.com/aliin/Symposium">GitHub</a>.
    </div>-->
</body>
</html>
