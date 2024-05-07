<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Excluir Curso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f0ff;
            color: #4d3872;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #ffffff;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <main class="container mt-5">
        <h3>Excluir Curso</h3>
        <form action="/curso/excluir" method="POST">
            <div class="row mb-3 mt-3">
                <div class="col-6">
                    <input type="hidden" name="id" value="<?= $curso["id"]; ?>">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" disabled value="<?= $curso["nome"]; ?>">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <input type="text" class="form-control" name="descricao" placeholder="Descrição" disabled value="<?= $curso["descricao"]; ?>">
                    <label for="tempo" class="form-label">Tempo:</label>
                    <input type="time" class="form-control" name="tempo" disabled value="<?= $curso["tempo"]; ?>">
                </div>
            </div>
            <p>Você deseja realmente excluir esse registro?</p>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
