<!DOCTYPE html>
<!-- This is a program for the developers. Anyone who wants to develop can run this file 
through their browser to setup their database correctly or update it to the latest version. But later, anyone who wants to run
a server with the forum software has to set up with this file also. -->
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
                    Please give your password on phpmyadmin. If you haven't changed it, put in "0".<br>
                    <input type="text" name="password"><br>
                    <button type="submit"></button>
                </form>
            </div>
        </body>
    </html>
