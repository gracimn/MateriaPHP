<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <style>
      body {
        background-color: #f5f0ff;
        color: #4d3872;
      }

      .container {
        max-width: 600px;
        margin-top: 50px;
      }

      .form-control {
        background-color: #ffffff;
        color: #4d3872;
        border-color: #b8a3d3;
      }

      .btn-primary {
        background-color: #9568c7;
        border-color: #9568c7;
        color: #ffffff;
      }

      .btn-primary:hover {
        background-color: #7c4f9f;
        border-color: #7c4f9f;
      }
    </style>
    <title>Alterar Aluno</title>
  </head>
  <body>
    <main class="container">
      <h3>Alterar Aluno</h3>
      <form action="/aluno/alterar" method="POST">
        <div class="row mb-3 mt-3">
          <div class="col-6">
            <input type="hidden" name="id" value="<?= $resultado["id"]; ?>">

            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" maxlength="60" name="nome" placeholder="Nome" value="<?= $_POST["nome"] ?? ''; ?>">

            <label for="idade" class="form-label">Idade:</label>
            <input type="number" class="form-control" name="idade" placeholder="Idade" value="<?= $_POST["idade"] ?? ''; ?>">

            <label for="pais" class="form-label">País:</label>
            <input type="text" class="form-control" maxlength="60" name="pais" placeholder="País" value="<?= $_POST["pais"] ?? ''; ?>">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Alterar</button>
      </form>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
