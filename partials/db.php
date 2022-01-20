<?php
session_start();


try {
	$pdo = new PDO('mysql:dbname=global; host=localhost', 'root', 'root');
} catch (PDOException $e) {
	die($e->getMessage());
}



?>

