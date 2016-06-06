# Introduction
Together in this repository we will develop a forum software in PHP and MySQL. This project is for beginners to PHP and mySQL. Experience on actual projects is so important and this project will give you just that. If this project goes far and people actually begin to use this software it will be a wonderful addition to your portfolio.

We will use the [Discourse](http://discourse.org) forum software as our model. You can see examples of this software in use at [Discourse's own forum](http://meta.discourse.org) or [Free Code Camp's forum](http://forum.freecodecamp.com). Although we are using this as our model, we do not want to directly copy it and we strongly encourage you to come up with something new and exciting. This forum software will be centered around design and development so we hope to add features that will specifically help people interested in that; when you are adding features make sure that you think about it from your perspective as well as other designers and developers. The software will not be advanced at first (you might call this pre-alpha, essentially still an idea at this point) but we hope to add lots of options on laying out the forum, advanced editing options like editing the code of the forum directly, add categories, forum staff and moderation structures.

If you want to work on this you'll need to set up WAMP, LAMP, or XAMPP on your computer. Excellent guides are available with a simple Google or Duck Duck Go search so be sure to check that out.

# Getting Started and Setup

If you'd like to contribute to this project or test it you must set up XAMPP or something similar. You will also need Git or GitHub's Desktop software [here](http://desktop.github.com).

Start your server (XAMPP or whatever). Open the server's directory and inside, the 'www' directory. Create another 'www' directory in the first one, if you don't have one already. Put the project folder inside. Then open this link with your browser: http://localhost/www/forum/database/mysql_setup.php. It should open a page that allows you to put your phpmyadmin login data into a form. Do it. Put "localhost" in the "server" field, except if you set up a different servername. If you haven't set up any login data for phpmyadmin, then type for username "root" and for a password "0". Once you press the submit button, it will ask you to confirm and then open a page that says that your tables have been set up. What happens is that the program checks if there is already a database "symposium", if not it creates one, and then it overwrites all the relevant tables. Follow the instructions: You should set up a user in phpmyadmin afterwards that has access to the symposium database and whose username is "symposium_server" and password "my_symposium".

##Update

If there are any changes in the database structure, it will noted in the readme. You will have to make sure that the tables are up to date. To do that, after you download the new version of the symposium, you need to run the mysql_setup again. Just repeat the steps above. All the tables in your database will be updated. However, any extra data you put in the tables for testing purposes may be lost.

## Structure

I'll set up a four-folder structure for the start. We'll probably change that and work that over - I don't really know about MVC, which is "Model View Controller" and a way of setting up your files and functions. This is just for a start.

Main Folder -> subdirectories "public", "includes", "database" and "resources".

### Folder Contents

In the "public" folder, I will put the file "index.php". This is traditionally the starting page. It will hold the html of the starting / main page and some php code that displays the html we need to display. This is the only folder the website visitor should have access to. At the beginning, "index.php" will be the page where the categories for the threads are displayed. If you click on a category, a new page will open that shows the threads belonging to the category.

The php code in index.php should do nothing but call functions that display in html what the user should see. The functions themselves should be in files contained in the "includes" folder. Pictures and other resources used should be in the "resources" folder. In the "database" folder, there will be a "mysql_setup.php" file that sets up the database and mysql tables for you. It will be changed everytime we add something new to the database. So first it will delete the old tables and then create the updated tables.


# Get Crackin'
I put up some files and code to get started, just to outline a basic structure to get us going. Feel free to change anything you like and please check my code for errors before you get going and comment on them, I just quickly set up some code and didn't test or debug it. The code doesn't work yet and I didn't set up any MySQL yet.

To develop and test the forum software, follow the instructions on setting up the database above and make sure there is a user in phpmyadmin that has access to the symposium database and whose username is "symposium_server" and password "my_symposium".

Great you are participating! :)

You can join our [Gitter chatroom](https://gitter.im/Aliin/forum) or our [Discord server](https://discord.gg/013EGhm7P3o6apo6S) to discuss this in an instant messaging format.
