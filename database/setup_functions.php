<?PHP
function setup_db() {

	$connection = new mysqli($_POST['servername'], $_POST['username'], $_POST['password'], $_POST['database']);
	
	if ($connection->connect_error)
	{
		die("connection to server or database failed: " . $connection->connect_error);
	}

	$clearTables = "IF OBJECT_ID('posts', 'U') IS NOT NULL 
	  DROP TABLE posts; IF OBJECT_ID('people', 'U') IS NOT NULL 
	  DROP TABLE people; IF OBJECT_ID('categories', 'U') IS NOT NULL 
	  DROP TABLE categories";
  
  	mysqli_query($connection, $clearTables);
	
	$sql = "CREATE TABLE posts(
	 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	 author_id INT UNSIGNED NOT NULL,
	 title VARCHAR(255) NOT NULL,
	 body TEXT NOT NULL,
	 category_id INT NOT NULL,
	 reg_date TIMESTAMP
	 )";
	 
	mysqli_query($connection, $sql);
	 
	$sql = "CREATE TABLE people (
	 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	 username VARCHAR(15) NOT NULL,
	 first_name VARCHAR(15) NOT NULL,
	 last_name VARCHAR(15) NOT NULL,
	 email VARCHAR(50) NOT NULL,
	 url VARCHAR(155)
	 )";
	 
	mysqli_query($connection, $sql);
	
	$sql = "CREATE TABLE categories (
	  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	  name VARCHAR(20) NOT NULL
	  )";
	  
    	mysqli_query($connection, $sql);
    
    	mysqli_close($connection);

}

?>
