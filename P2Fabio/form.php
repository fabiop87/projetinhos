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
    <h1>Adicionar Anime</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 mt-5">

                <form action="addAnime.php" method="post" enctype="multipart/form-data" autocomplete="off">

                    <div class="form-group">
                        <label class="form-label">Nome:</label>
                        <input type="text" name="nome" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Sinopse:</label>
                        <textarea name="sinopse" required class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Número de episódios:</label>
                        <input type="number" name="num_episodios" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status:</label>
                        <select name="status" required>
                            <option value="Em andamento">Em andamento</option>
                            <option value="Finalizado">Finalizado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Estreia:</label>
                        <input type="date" name="estreia" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gênero:</label>
                        <input type="text" name="genero" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Imagem:</label>
                        <input type="file" name="imagem" accept="image/*">
                    </div>

                    <div class="d-flex justify-content-center">
                    <input type="submit" value="Adicionar" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    <footer class="footer fixed-bottom">
        <a class="btn btn-secondary" href="dashboard.php">Pagina Inicial</a>
    </footer>
</body>

</html>