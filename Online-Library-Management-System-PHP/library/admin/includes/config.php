<?php 

// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','ourinsti_perfect');
define('DB_PASS','Zum@nge!12');
define('DB_NAME','ourinsti_nes_library');
// Establish database connection.

// DB credentials.
// // define('DB_HOST','localhost');
// // define('DB_USER','root');
// // define('DB_PASS','');
// // define('DB_NAME','nes_library');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>