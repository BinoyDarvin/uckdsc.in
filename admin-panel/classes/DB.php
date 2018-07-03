<?php
//this script makes connection to database
class DB{

public static function connect(){
  //below variables will contain data for the database connection
  $username = 'root';
  $password = '';
  $host = '127.0.0.1';
  $db   = 'uck_admin_users';
  $charset = 'utf8mb4';
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  //now making the connection
  $pdo = new PDO($dsn, $username, $password);
  return $pdo;
}//end of connect()

public static function query($query, $param){
  $stmt = self::connect()->prepare($query);
  $stmt->execute($param);
  if (explode(' ', $query)[0] == 'SELECT') {
    $result = $stmt->fetchAll();
    return $result;
  }//end of query
}//end of query
}//end of class
?>
