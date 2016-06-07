<?PHP
	//This file runs a database setup and gives further instructions.
	//Include the file that holds the functions we need.
    require 'helpers/setup_functions.php';
    //run the database setup function. It should return 0 on terminating.
    $isSetup = setup_db();
    
    if ($isSetup == 0){
        echo 'database set up. Please check that everything is in order, otherwise make a bug report.';
    } else {
        echo "database couldn't be set up. Please please please make a bug report.";
    }

    //give further instructions.
    echo '<br>';
    echo '<h5>Next step: </h5><p class="instruction">Please go to phpmyadmin and set up access to the symposium database: <br>';
    echo 'set up a user "symposium_server" that has access to the symposium database and give him the password "my_symposium". </br>';
    echo "you can close this window now. <br></p>";
    ?>
