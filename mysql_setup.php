<?PHP

require 'db_connect.php';

$sql = "CREATE TABLE posts(
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 author_id INT UNSIGNED,
 title VARCHAR(255),
 body TEXT,
 category_id INT,
 reg_date TIMESTAMP
 )"


?>
