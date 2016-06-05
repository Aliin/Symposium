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
            
            <div class="myForm">
                <form action="run_setup.php" method="post">
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
