<!-- How to make up this file:
include the html tags and text that will be displayed as a category box. Basically just add stuff between the div tags.
The category will display php variables from the database, like the title of the category, maybe some other data.
to display the variables, just open and close php tags like this: <?php ___ ?>. Instead of the underscore, add the following:
For category title:
"echo $cat->name;" without the quotation marks. I already put it in once as an example.

If you want any other data then just write what you want inside the html code, I can substitute it by php code later.

Leave the <a> tag as it is, it's important.
-->
<div class="category">

    <a href="?php echo $MUP . $MUP . $DIS_POST . '?catId=' . $cat->id; ?>">
        <?php echo $cat->name; ?>
    </a>

</div>