<?php
// Connect to your database
$pdo = new PDO("mysql:host=localhost;dbname=newproject", "root", "");

$input = $_GET['query'];
$query = "SELECT uname FROM users WHERE uname LIKE :input";
$stmt = $pdo->prepare($query);
$stmt->bindValue(':input', $input . '%');
$stmt->execute();

$suggestions = $stmt->fetchAll(PDO::FETCH_COLUMN);
echo implode("\n", $suggestions);
?>
