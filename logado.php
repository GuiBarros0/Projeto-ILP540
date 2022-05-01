<?php
  include("verifica.php");
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/Logado.css">
  <!-- Icons -->
  <script src="https://kit.fontawesome.com/701f20bb44.js" crossorigin="anonymous"></script>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">To Do List</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Editar Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron">
    <div class="row w-100">
      <div class="col-md-3">
        <div class="card border-info mx-sm-1 p-3">
          <div class="card border-info shadow text-info p-3 my-card text-center"><span aria-hidden="true">Segunda</span>
          </div>
          <br>
          <input class="text-info mt-03 border-info" type="s1">
          <br>
          <input class="text-info mt-03 border-info" type="s2">
          <br>
          <input class="text-info mt-03 border-info" type="s3">
          <br>
          <input class="text-info mt-03 border-info" type="s4">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-success mx-sm-1 p-3">
          <div class="card border-success shadow text-success p-3 my-card text-center"><span
              aria-hidden="true">Terça</span></div>
          <br>
          <input class="text-success mt-03 border-success" type="t1">
          <br>
          <input class="text-success mt-03 border-success" type="t2">
          <br>
          <input class="text-success mt-03 border-success" type="t3">
          <br>
          <input class="text-success mt-03 border-success" type="t4">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-danger mx-sm-1 p-3">
          <div class="card border-danger shadow text-danger p-3 my-card text-center"><span
              aria-hidden="true">Quarta</span></div>
          <br>
          <input class="text-danger mt-03 border-danger" type="t1">
          <br>
          <input class="text-danger mt-03 border-danger" type="t2">
          <br>
          <input class="text-danger mt-03 border-danger" type="t3">
          <br>
          <input class="text-danger mt-03 border-danger" type="t4">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-warning mx-sm-1 p-3">
          <div class="card border-warning shadow text-warning p-3 my-card text-center"><span
              aria-hidden="true">Quinta</span></div>
          <br>
          <input class="text-warning mt-03 border-warning" type="t1">
          <br>
          <input class="text-warning mt-03 border-warning" type="t2">
          <br>
          <input class="text-warning mt-03 border-warning" type="t3">
          <br>
          <input class="text-warning mt-03 border-warning" type="t4">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-info mx-sm-1 p-3">
          <div class="card border-info shadow text-info p-3 my-card text-center"><span aria-hidden="true">Sexta</span>
          </div>
          <br>
          <input class="text-info mt-03 border-info" type="s1">
          <br>
          <input class="text-info mt-03 border-info" type="s2">
          <br>
          <input class="text-info mt-03 border-info" type="s3">
          <br>
          <input class="text-info mt-03 border-info" type="s4">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-success mx-sm-1 p-3">
          <div class="card border-success shadow text-success p-3 my-card text-center"><span
              aria-hidden="true">Sabado</span></div>
          <br>
          <input class="text-success mt-03 border-success" type="t1">
          <br>
          <input class="text-success mt-03 border-success" type="t2">
          <br>
          <input class="text-success mt-03 border-success" type="t3">
          <br>
          <input class="text-success mt-03 border-success" type="t4">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-danger mx-sm-1 p-3">
          <div class="card border-danger shadow text-danger p-3 my-card text-center"><span
              aria-hidden="true">Domingo</span></div>
          <br>
          <input class="text-danger mt-03 border-danger" type="t1">
          <br>
          <input class="text-danger mt-03 border-danger" type="t2">
          <br>
          <input class="text-danger mt-03 border-danger" type="t3">
          <br>
          <input class="text-danger mt-03 border-danger" type="t4">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-warning mx-sm-1 p-3">
          <div class="card border-warning shadow text-warning p-3 my-card text-center"><span
              aria-hidden="true">Outros</span></div>
          <br>
          <input class="text-warning mt-03 border-warning" type="t1">
          <br>
          <input class="text-warning mt-03 border-warning" type="t2">
          <br>
          <input class="text-warning mt-03 border-warning" type="t3">
          <br>
          <input class="text-warning mt-03 border-warning" type="t4">
        </div>
      </div>
    </div>

    voce está logado<br>
    <a href="sair.php">Sair</a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"></script>
</body>


</html>
