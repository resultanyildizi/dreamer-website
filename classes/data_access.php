<?php 
 class DataAccess {



 	private static function CreateDatabase($dbname) {

	 	$server_name = "localhost";
	 	$user_name = "pma";
		$password = "";

 		try {

 			$conn = new PDO("mysql:host=$server_name", $user_name, $password);
 			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 			$query = "create database if not exists $dbname";
 			$conn->exec($query);
 		} catch(PDOException $e) {
 			echo "sql query : " . $query . "<br>";
 			echo "error message . " . $e->getMessage() . "<br>";
 		}
 	}



 	public static function CreateTables() {
 		// Users tablosunu oluşturan query
 		$query = "create table if not exists users (" .
 				 "id int(6) unsigned auto_increment not null primary key, ".
 				 "firstname varchar(30) not null," .
 				 "surname varchar(40) not null," .
 				 "password varchar(20) not null,".
 				 "email varchar(30) not null, ".
 				 "picture_url text not null, ".  
 				 "reg_date timestamp default current_timestamp on update current_timestamp)";

 		// Non-query nin çalıştırılması
		DataAccess::ExecuteNonQuery($query);

		// Admins tablosunu oluşturan query
		$query = "create table if not exists admin (" .
				 "id int(6) unsigned auto_increment not null primary key, ".
 				 "firstname varchar(30) not null," .
 				 "surname varchar(40) not null," .
 				 "password varchar(20) not null,".
 				 "email varchar(30) not null, ".
 				 "picture_url text not null, ".  
 				 "reg_date timestamp default current_timestamp on update current_timestamp)";

 		// Non-query nin çalıştırılması
 		DataAccess::ExecuteNonQuery($query);

 		// City tablosunun oluşturulması
 		$query = "create table if not exists city(" .
 		         "id int(6) unsigned auto_increment not null primary key, ".
 		         "name varchar(40) not null," . 
 		         "country varchar(40) not null, ".
 		         "price float not null, " . 
 		         "small_picture_url text not null, " . 
 		         "back_picture_url text not null, " .
 		         "details text not null, ".
 		         "reg_date timestamp default current_timestamp on update current_timestamp)";

 		// Non-query nin çalıştırılması
 		DataAccess::ExecuteNonQuery($query);

 		$query = "create table if not exists reservations(" .
 				 "id int(6) unsigned auto_increment not null primary key, ".
 				 "people_count int(2) unsigned not null, " .
 				 "city_id int(6) unsigned not null ," . 
 				 "user_id int(6) unsigned not null ," .
 				 "start_date date not null, " .
 				 "end_date date not null, " .
				 "price float not null) " .
				 "reg_date timestamp default current_timestamp on update current_timestamp)";

 		// Non-query nin çalıştırılması
 		DataAccess::ExecuteNonQuery($query);
 	}


 	public static function ExecuteNonQuery($query, $dbname = "dreamer_db") {
 		$server_name = "localhost";
	 	$user_name = "pma";
	 	$password = "";
 		$db_name = $dbname;
 		
 		DataAccess::CreateDatabase($db_name);
 		
 		try {
 			$conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
 			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 			$stmt = $conn->prepare($query);
			$stmt->execute();
			$last_insert_id = $conn->lastInsertId();
			return $last_insert_id;

 		} catch(PDOException $e) {
 			echo "sql query : " . $query . "<br>";
 			echo "error message . " . $e->getMessage() . "<br>";
 			return 0;
 		}
 	}


 	public static function ExecuteQuery($query, $dbname = "dreamer_db") {
 		$server_name = "localhost";
	 	$user_name = "pma";
	 	$password = "";
 		$db_name = $dbname;
 		
 		DataAccess::CreateDatabase($db_name);
 		
 		try {
 			$conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
 			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 			$stmt = $conn->prepare($query);
 			$stmt->execute();
 			$stmt->setFetchMode(PDO::FETCH_ASSOC);
 			$all = $stmt->fetchAll();

 			return $all;

 		} catch(PDOException $e) {
 			echo "sql query : " . $query . "<br>";
 			echo "error message . " . $e->getMessage() . "<br>";
 		}
 	}







 }





?>