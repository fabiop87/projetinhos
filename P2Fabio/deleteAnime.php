<?php
require "./Models/conexao.php";

$conn = new conexao();

$id = $_POST["id"];

$sql = "DELETE FROM animes WHERE id = :id";

$stmt = $conn->pdo->prepare($sql);
$stmt->bindParam(':id', $id);

$stmt->execute();

header('Location: dashboard.php');
