<!--
----------------------------------------------------------------
@project      : Symposium Forum Software
@version      : v.0.1.0
@author       : Open-source
@description  : Runs a database setup.
----------------------------------------------------------------
-->
<?php
    require 'helpers/setup_functions.php';

    $isSetup = setup_db();
    
    if ($isSetup){
        echo 'database set up. Please check that everything is in order, otherwise make a bug report.';
    } else {
        echo "database couldn't be set up. Please please please make a bug report.";
    }

    echo '<br>';
    echo '<h5>Next step: </h5><p class="instruction">Please go to phpmyadmin and set up access to the symposium database: <br>';
    echo 'set up a user "symposium_server" that has access to the symposium database and give him the password "my_symposium". </br>';
    echo "you can close this window now. <br></p>";
?>