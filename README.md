# Introduction
Together in this repository we will develop a forum software in PHP and MySQL. This project is for beginners to PHP and mySQL. Experience on actual projects is so important and this project will give you just that. If this project goes far and people actually begin to use this software it will be a wonderful addition to your portfolio.

We will use the [Discourse](http://discourse.org) forum software as our model. You can see examples of this software in use at [Discourse's own forum](http://meta.discourse.org) or [Free Code Camp's forum](http://forum.freecodecamp.com). Although we are using this as our model, we do not want to directly copy it and we strongly encourage you to come up with something new and exciting. This forum software will be centered around design and development so we hope to add features that will specifically help people interested in that; when you are adding features make sure that you think about it from your perspective as well as other designers and developers. The software will not be advanced at first (you might call this pre-alpha, essentially still an idea at this point) but we hope to add lots of options on laying out the forum, advanced editing options like editing the code of the forum directly, add categories, forum staff and moderation structures.

If you want to work on this you'll need to set up WAMP, LAMP, or XAMPP on your computer. Excellent guides are available with a simple Google or Duck Duck Go search so be sure to check that out.

# Getting Started and Setup

If you'd like to contribute to this project or test it you must set up XAMPP or something similar. You will also need Git or GitHub's Desktop software [here](http://desktop.github.com).

You will have to create a new Database - lets call it "OurGitHubForum" - in MySQL (e.g. via browser -> http://localhost/phpmyadmin). If you don't know how to do that, contact me or research it on the internet. Second, after you downloaded the code from GitHub, open the folder "database" and make a new file called "connect_data.php". Put the following code in it:

```
<?PHP
$servername = "[put in your servername, usually: localhost]";
$username = "[put in your username for phpmyadmin]";
$password = "[put in your password for phpmyadmin]";
$database = "[put in the database name, e.g.: OurGitHubForum]";
?>
```

Now just call the database/mysql_setup.php file using your browser - just once - and check in phpmyadmin to make sure that the tables were created correctly. If not, make sure that you put in the correct data in the file you created and otherwise comment the bug here in GitHub. Every time you download a new version of the code that changes the tables, run the file mysql_setup.php again. It will delete the old tables and create the updated tables.

## Structure

I'll set up a four-folder structure for the start. We'll probably change that and work that over - I don't really know about MVC, which is "Model View Controller" and a way of setting up your files and functions. This is just for a start.

Main Folder -> subdirectories "displayed", "includes", "database" and "resources".

### Folder Contents

In the "displayed" folder, I will put the file "index.php". This is traditionally the starting page. It will hold the html of the starting / main page and some php code that displays the html we need to display. This is the only folder the website visitor should have access to. At the beginning, "index.php" will be the page where the categories for the threads are displayed. If you click on a category, a new page will open that shows the threads belonging to the category.

The php code in index.php should do nothing but call functions that display in html what the user should see. The functions themselves should be in files contained in the "includes" folder. Pictures and other resources used should be in the "resources" folder. In the "database" folder, there will be a "mysql_setup.php" file that sets up the mysql tables for you. It will be changed everytime we add something new to the database. So first it will delete the old tables and then create the updated tables. It will connect to the database using the login data from the user-dependent "connect_data" file as described in "GETTING STARTED" above.

## Database
maybe not quite right, feel free to make better suggestions:
-set up one table for category with id (primary key) and name
-another table for posts that holds as a foreign key the category id.

# Get Crackin'
I put up some files and code to get started, just to outline a basic structure to get us going. Feel free to change anything you like and please check my code for errors before you get going and comment on them, I just quickly set up some code and didn't test or debug it. The code doesn't work yet and I didn't set up any MySQL yet.

Great you are participating! :)

You can join our [Gitter chatroom](https://gitter.im/Aliin/forum) or our [Discord server](https://discord.gg/rubick-nissa-argy) to discuss this in an instant messaging format.
