<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "db_urlShortener";

// Create database connection
try{
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    //$db->setAttribute(PDO::ATTR_ERRMODE), PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

/*
require ('config.php');

class Connection {

	protected db_connection;

	public function Connection(){

		this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);

		if (this->db_connection->connect_errno){

			echo "MySQL connection failed: " . this->db_connection->connect_error;

			return;

		}

		this->db_connection->set_charset(DB_CHARSET);

	}

}*/

?>