<!--
----------------------------------------------------------------
@project      : Symposium Forum Software
@version      : v.0.1.0
@author       : Open-source
@description  : Category class
----------------------------------------------------------------
-->
<?php
class Category
{    
    public $name;
    public $id;
    public $posts = array();
	
    function __construct($name) {
		global $connection;
        $this->name = $name;
        $query = "SELECT id FROM categories WHERE name = '$name'";
        $result = mysqli_query($connection, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            $this->id = $row['id'];
        } else {
            echo 'error: no such category';
        }
    }
}
