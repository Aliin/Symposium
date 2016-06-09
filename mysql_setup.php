<!--
----------------------------------------------------------------
@project      : Symposium Forum Software
@version      : v.0.1.0
@author       : Open-source
@description  : Setup/Update a database and tables to develop server side.
----------------------------------------------------------------
-->
<!DOCTYPE html>
<html>
    <head>
        <title>
            Setup Database
        </title>
    </head>
    
    <body>    
        <h1 class="">
            Setup Database (or update).
        </h1>
        <!-- This form takes the phpmyadmin user data. When the submit button is pressed, 
        the data is posted to the file "run_setup.php". -->
        <div class="myForm">
            <form action="database/run_setup.php" method="post">
                Please give the server name, usually "localhost." <br>
                <input type="text" name="servername"><br>
                Please give your username on phpmyadmin. If you haven't changed it, it's "root".<br>
                <input type="text" name="username"><br>
                Please give your password on phpmyadmin. If you haven't changed it, put in nothing.<br>
                <input type="text" name="password"><br>
                <button type="submit">submit</button>
            </form>
        </div>
    </body>
</html>