<?php

require 'partials/db.php';


$name = $_POST['name'];



// Create

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `tex_process`(`name`) VALUES(?,?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$name]);
}


// Read

$sql = $pdo->prepare("SELECT * FROM `tex_process``");
$sql->execute();
$result = $sql->fetchAll();


// Update

$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE tex_process SET name=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$name, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}


// Delete

if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM tex_process WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

