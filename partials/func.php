<?php

require 'partials/db.php';


$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$k_press = $_POST['k_press'];
$k_papers = $_POST['k_papers'];
$limit_oplata = $_POST['limit_oplata'];


// Create

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `clients_table`(`name`, `login`, `password`, `k_press`, `k_papers`, `limit_oplata`) VALUES(?,?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$name, $login, $password, $k_press, $k_papers, $limit_oplata]);
}


// Read

$sql = $pdo->prepare("SELECT * FROM `clients_table`");
$sql->execute();
$result = $sql->fetchAll();


// Update

$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE clients_table SET name=?, login=?, password=?, k_press=?, k_papers=?, limit_oplata=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$name, $login, $password, $k_press, $k_papers, $limit_oplata, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}


// Delete

if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM clients_table WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

