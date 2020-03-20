<!--Connexions à la base de donnée (login/register)-->
<?php
$servername = 'localhost';
$username = 'valentin';
$password = 'Bototo';
$dbname = 'valentin';

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
?>