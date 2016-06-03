# forum

--INTRO--
Here, let's develop a forum/forum-building kit - to learn how to do it in php and mysql and help each other. It's a project to learn how to code. For beginners who know basic php and mysql syntax.

We will use http://www.discourse.org/ as our model for the design, you can see an example at http://community.gemsofwar.com/. However, be encouraged to be creative and do something exciting, new. The idea is that the topic of the forums that can be created can be oriented at design & development. So we can think of that as orientation when adding functionality. We won't add any very advanced functions, at least until we have the basic forum-kit working. However, it should be not only a forum with comments and so on but feature different options of how to lay out the forum, build categories, make mod/admin structures and so on. So there should be a lot of flexibility. It should allow people to create their own forums. We take it step by step.

To work with this, if you haven't yet, set up a WAMP or LAMP or XAMPP on your computer. If you don't know what that is or need help just write a comment or contact me, I'll help you. As another first option if you don't know something I suggest you visit w3schools.com, which is easy to understand and excellent.

So how do we start?

--GETTING STARTED--

To work with everything on your own computer and be able to test it, as mentioned, you need to set up XAMPP or equivalents - and also get Git for your computer. Otherwise, you can just write code online. I'm just learning GitHub, but I suspect you won't be able to run the code if you do that.
You will have to create a new Database - lets call it "OurGitHubForum" - in mysql (e.g. via browser -> http://localhost/phpmyadmin). If you don't know how to do that, contact me or research it on the internet. Second, after you downloaded the code from GitHub, open the folder "database" and make a new file called "connect_data.php". Put the following code in it:

```
<?PHP
$servername = "[put in your servername, usually: localhost]";
$username = "[put in your username for phpmyadmin]";
$password = "[put in your password for phpmyadmin]";
$database = "[put in the database name, e.g.: OurGitHubForum]";
?>
```

Now just call the database/mysql_setup.php file using your browser - just once - and check in phpmyadmin to make sure that the tables were created correctly. If not, make sure that you put in the correct data in the file you created and otherwise comment the bug here in GitHub. Every time you download a new version of the code that changes the tables, run the file mysql_setup.php again. It will delete the old tables and create the updated tables.

--STRUCTURE--

I'll set up a four-folder structure for the start. (We'll probably change that and work that over - I don't really know about MVC, which is "Model View Controller" and a way of setting up your files and functions. This is just for a start.)

Main Folder ->subdirectories "displayed", "includes", "database" and "resources".

--FOLDER CONTENTS--

In the "displayed" folder, I will put the file "index.php". This is traditionally the starting page. It will hold the html of the starting / main page and some php code that displays the html we need to display. This is the only folder the website visitor should have access to. At the beginning, "index.php" will be the page where the categories for the threads are displayed. If you click on a category, a new page will open that shows the threads belonging to the category. 

The php code in index.php should do nothing but call functions that display in html what the user should see. The functions themselves should be in files contained in the "includes" folder. Pictures and other resources used should be in the "resources" folder. In the "database" folder, there will be a "mysql_setup.php" file that sets up the mysql tables for you. It will be changed everytime we add something new to the database. So first it will delete the old tables and then create the updated tables. It will connect to the database using the login data from the user-dependent "connect_data" file as described in "GETTING STARTED" above.

--DATABASE--
maybe not quite right, feel free to make better suggestions:
-set up one table for category with id (primary key) and name
-another table for posts that holds as a foreign key the category id.

--SO LETS GO!--
I put up some files and code to get started, just to outline a basic structure to get us going. Feel free to change anything you like and please check my code for errors before you get going and comment on them, I just quickly set up some code and didn't test or debug it. The code doesn't work yet and I didn't set up any mysql yet.

Great you are participating! :)
