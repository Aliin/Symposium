<!--
----------------------------------------------------------------
@project      : Symposium Forum Software
@version      : v.0.1.0
@author       : Open-source
@description  : Creates and updates the database uisng the phpmyadmin-data given in the html form.
----------------------------------------------------------------
-->
<?php
function setup_db() {
	
    //if user posts nothing return error.
    if (empty(htmlspecialchars($_POST['servername'])) || empty(htmlspecialchars($_POST['username']))) {
    	return false;
    }

    //setup connection to phpmyadmin.
    $connection = new mysqli(htmlspecialchars($_POST['servername']), htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password']));

    //if connection fails, return with error.
    if ($connection->connect_error)
    {
    	die("connection to server failed: " . $connection->connect_error);
    	return false;
    } else {
    	echo 'connection successful';
    }

    //check if database symposium exists, otherwise create it, and select it.
    $createDB = "CREATE DATABASE IF NOT EXISTS symposium";
    mysqli_query($connection, $createDB);
    $dbconn = mysqli_select_db($connection, "symposium");
    if (!$dbconn) {
    	die("connection to database failed: ");
    	return false;
    }

    //deletes the relevant tables.
    $clearTables = "IF OBJECT_ID('posts', 'U') IS NOT NULL 
      DROP TABLE posts; IF OBJECT_ID('people', 'U') IS NOT NULL 
      DROP TABLE people; IF OBJECT_ID('categories', 'U') IS NOT NULL 
      DROP TABLE categories";
	mysqli_query($connection, $clearTables);

    //creates the post table which holds all the data a forum post has.
    $sql = "CREATE TABLE posts(
     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     author_id INT UNSIGNED NOT NULL,
     title VARCHAR(255) NOT NULL,
     body TEXT NOT NULL,
     category_id INT NOT NULL,
     reg_date TIMESTAMP
     )";
    mysqli_query($connection, $sql);
     
    //the people table holds user information, for example for post authors.
    $sql = "CREATE TABLE people (
     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     username VARCHAR(15) NOT NULL,
     first_name VARCHAR(15) NOT NULL,
     last_name VARCHAR(15) NOT NULL,
     password VARCHAR(15) NOT NULL,
     email VARCHAR(50) NOT NULL,
     url VARCHAR(155)
     )";
    mysqli_query($connection, $sql);

    //the table holds the categories.
    $sql = "CREATE TABLE categories (
      id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(20) NOT NULL
      )";
    mysqli_query($connection, $sql);

    //insert test values into tables
    $sql = "INSERT INTO categories (name) VALUES ('Thriller'), ('Horror'), ('Romance')";
    mysqli_query($connection, $sql);
    $sql = "INSERT INTO people (username, first_name, last_name, password, email) VALUES ('John123', 'John', 'Smith', 'mypw', 'js@mail.com'),
        		('Fred456', 'Fred', 'Gardner', 'passW', 'fg@mail.com')";
    mysqli_query($connection, $sql);
    $sql = "INSERT INTO posts (author_id, title, body, category_id) VALUES
        		(0, 'James Bond', 'This is a suspenseful movie', 0),
        		(1, 'Notting Hill', 'This is a romantic movie', 2)";
    mysqli_query($connection, $sql);
          
    mysqli_close($connection);
    	
    return true;
}