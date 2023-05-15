<?php
session_start();

if (!isset($_SESSION) || !$_SESSION['online']) {
    die('<marquee> Sai daqui cara faz o login </marquee>');
}

require('./Models/User.php');


$model = new User();
$me = $model->getMe();

echo "Olá " . $me['name'];

?>

<?php


$sql = "SELECT * FROM animes";
$stmt = $model->pdo->prepare($sql);
$stmt->execute();

$animes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/bootstrap.min.css">
    <link rel="stylesheet" href="resources/jhonsons.css">
</head>

<body>

<h1 class="text-center">Trabalho Super Incrivel</h1>

    <div class="anime-list d-flex flex-wrap">
        <?php foreach ($animes as $anime) : ?>
            <div class="card col-2">
                <img src="<?php echo $anime["imagem"]; ?>" class="card-img-top" alt="Imagem do Anime">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $anime["nome"]; ?></h2>
                    <p class="card-text"><?php echo $anime["sinopse"]; ?></p>
                    <p class="card-text">Número de episódios: <?php echo $anime["num_episodios"]; ?></p>
                    <p class="card-text">Status: <?php echo $anime["status"]; ?></p>
                    <p class="card-text">Estreia: <?php echo $anime["estreia"]; ?></p>
                    <p class="card-text">Gênero: <?php echo $anime["genero"]; ?></p>
                </div>
                <div class="d-flex m-2">
                    <form action="updateAnime.php" method="POST">
                        <input type="hidden" name="id" value="<?= $anime['id'] ?>">
                        <button class="btn btn-warning" type="submit">Update</button>
                    </form>
                </div>
                <div class="d-flex m-2">
                    <form action="deleteAnime.php" method="POST" onsubmit="return pedirConfirmacao();">
                        <input type="hidden" name="id" value="<?= $anime['id'] ?>">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a class="d-flex flex-row-reverse mb-4" href="logout.php"><button class="btn btn-outline-danger">Logout</button></a>

    <footer class="footer fixed-bottom">
        <a class="btn btn-secondary" href="form.php">Adicionar novo anime</a>
    </footer>
    <script src="resources/jhonson.js"></script>
</body>

</html>