<?PHP

require 'connect_data.php';

$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error)
{
	die("connection to server or database failed: " . $connection->connect_error);
}



?>
