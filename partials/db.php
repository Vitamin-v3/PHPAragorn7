<?php
session_start();


try {
	$pdo = new PDO('mysql:dbname=aragorn7; host=localhost', 'root', 'root');
} catch (PDOException $e) {
	die($e->getMessage());
}



?>

