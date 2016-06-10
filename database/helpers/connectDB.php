<!--
----------------------------------------------------------------
@project      : Symposium Forum Software
@version      : v.0.1.0
@author       : Open-source
@description  : Connects to the database to extract real data.
----------------------------------------------------------------
-->
<?php
$servername = "localhost";
$username = "symposium_server";
$password = "my_symposium";
$database = "symposium";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die('Connect error' . $connection->connect_error);
}