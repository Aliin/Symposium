<?php

//------------------PATHS TO FILES-----------------


//______MOVE BETWEEN FOLDERS_______

//move one folder up:
$MUP = "../";

//_____MAIN FILES__________

//Display Categories:
$MAIN_DISP = "public/index.php";

//______HTML MODULES_______

//Standard header
$HMOD_HEAD = "views/page/standard_header.php";
//Standard Footer
$HMOD_FOOT = "views/page/standard_footer.php";
//module that displays a category
$HMOD_CAT = "views/categories/category.php";
//module that displays a post
$HMOD_POST = "views/posts/display_single_post.php";

//_______SETUP FILES_______

//HTML form for Setup
$DAT_SET = "mysql_setup.php";
//php page for setup
$DAT_PSET = "database/run_setup.php";
//Functions that actually create the database and tables
$DAT_CREATE = "database/helpers/setup_functions.php";

//______CONNECTION FILES______
$DAT_CONN = "database/helpers/connectDB.php";

//_______CLASSES_______
$CLS_CAT = "includes/classes/category.php";
$CLS_PERS = "includes/classes/person.php";
$CLS_POST = "includes/classes/post.php";

//________DISPLAY PAGES_______

//display post
$DIS_POST = "public/display.php";

//_______PHP FUNCTIONS_________

//_______DATABASE HANDLERS
$HAND_POST = "database/displayed_posts.php";
