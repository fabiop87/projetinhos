<?php

require "./Models/conexao.php";

$conn = new conexao();

$nome = $_POST["nome"];
$sinopse = $_POST["sinopse"];
$num_episodios = $_POST["num_episodios"];
$status = $_POST["status"];
$estreia = $_POST["estreia"];
$genero = $_POST["genero"];
$imagem = $_FILES["imagem"]["name"];

$sql = "INSERT INTO animes (nome, sinopse, num_episodios, status, estreia, genero, imagem) VALUES (:nome, :sinopse, :num_episodios, :status, :estreia, :genero, :imagem)";
$stmt = $conn->pdo->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sinopse", $sinopse);
$stmt->bindParam(":num_episodios", $num_episodios);
$stmt->bindParam(":status", $status);
$stmt->bindParam(":estreia", $estreia);
$stmt->bindParam(":genero", $genero);
$stmt->bindParam(":imagem", $imagem);

if ($stmt->execute()) {
    $id = $conn->pdo->lastInsertId();

    if (!empty($_FILES["imagem"]["name"])) {
        $caminho_imagem = "imagens/" . $id . "_" . $_FILES["imagem"]["name"];

        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem)) {
            $sql = "UPDATE animes SET imagem = :imagem WHERE id = :id";
            $stmt = $conn->pdo->prepare($sql);
            $stmt->bindParam(":imagem", $caminho_imagem);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }
    }
    header("Location: dashboard.php");
} else {
    echo "Erro ao cadastrar anime";
}
