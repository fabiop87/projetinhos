<?php

require "./Models/conexao.php";

$conn = new conexao();

$id = $_POST["id"];
$nome = $_POST["nome"];
$sinopse = $_POST["sinopse"];
$num_episodios = $_POST["num_episodios"];
$status = $_POST["status"];
$estreia = $_POST["estreia"];
$genero = $_POST["genero"];
$imagem = $_FILES["imagem"]["name"];

$sql = "UPDATE animes SET nome = :nome, sinopse = :sinopse, num_episodios = :num_episodios, status = :status, estreia = :estreia, genero = :genero";

// Adiciona a cláusula WHERE somente se o valor de $id estiver definido
if (isset($id)) {
    $sql .= " WHERE id = :id";
}

$stmt = $conn->pdo->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sinopse", $sinopse);
$stmt->bindParam(":num_episodios", $num_episodios);
$stmt->bindParam(":status", $status);
$stmt->bindParam(":estreia", $estreia);
$stmt->bindParam(":genero", $genero);

// Adiciona o parâmetro :id somente se o valor de $id estiver definido
if (isset($id)) {
    $stmt->bindParam(":id", $id);
}

if (!empty($_FILES["imagem"]["name"])) {
    $caminho_imagem = "imagens/" . $id . "_" . $_FILES["imagem"]["name"];

    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem)) {
        $sql2 = "UPDATE animes SET imagem = :imagem WHERE id = :id";
        $stmt2 = $conn->pdo->prepare($sql2);
        $stmt2->bindParam(":imagem", $caminho_imagem);
        $stmt2->bindParam(":id", $id);
        $stmt2->execute();
    }
}

if ($stmt->execute()) {
    // Atualização realizada com sucesso
    header("Location: dashboard.php");
} else {
    // Erro ao atualizar anime
    echo "Erro ao atualizar anime";
}
