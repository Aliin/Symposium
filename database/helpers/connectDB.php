<?PHP

$servername = "localhost";
$username = "symposium_server";
$password = "my_symposium";
$database = "symposium";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die('Connect error' . $connection->connect_error);
}
