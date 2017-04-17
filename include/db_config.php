<?php
include("dBug.php");
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'oop_log_mod');

class DB_con {

    /* function __construct() {
        $connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die('Oops connection error -> ' . mysql_error());
        mysql_select_db(DB_DATABASE, $connection) or die('Database error -> ' . mysql_error());
    } */
	//replace mysql function with mysqli
	
	function __construct(){
		@$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);
		
		if ($connection->connect_error) die('Database error -> ' . $connection->connect_error);
		
	}

}
