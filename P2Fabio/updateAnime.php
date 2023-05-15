<?php

$id = $_POST['id'];
require "./Models/conexao.php";

$conn = new conexao();


$sql = "SELECT * FROM animes WHERE id = '$id'";
$stmt = $conn->pdo->prepare($sql);
$stmt->execute();

$anime = $stmt->fetch(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($anime);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/bootstrap.min.css">
</head>

<body>
    <h1>Update Anime</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 mt-5">

                <form action="update.php" method="post" enctype="multipart/form-data" autocomplete="off">

                    <div class="form-group">
                        <label class="form-label">Nome:</label>
                        <input type="text" name="nome" required class="form-control" value="<?=$anime['nome'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Sinopse:</label>
                        <textarea name="sinopse" required class="form-control">  <?=$anime['sinopse']?> </textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Número de episódios:</label>
                        <input type="number" name="num_episodios" required class="form-control"  value="<?= $anime['num_episodios'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status:</label>
                        <select name="status" required>
                            <option value="Em andamento" <?php echo ($anime['status']=='Em andamento')? "Selected" : "" ?>>Em andamento</option>
                            <option value="Finalizado" <?php echo ($anime['status']=='Finalizado')? "Selected" : "" ?> >Finalizado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Estreia:</label>
                        <input type="date" name="estreia" class="form-control"  value="<?= $anime['estreia'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gênero:</label>
                        <input type="text" name="genero" class="form-control"  value="<?= $anime['genero'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Imagem:</label>
                        <input type="file" name="imagem" accept="image/*"  value="<?= $anime['imagem'] ?>">
                    </div>

                    <div class="d-flex justify-content-center">
                
                    <input type="hidden" name="id" value="<?= $anime['id'] ?>">

                    <input type="submit" value="Update" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
</body>

</html>