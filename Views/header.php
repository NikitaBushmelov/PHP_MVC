<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vols MVC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Vols MVC</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" href="index.php?controller=vol&action=mostrarvols">Mostrar vols</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="index.php?controller=vol&action=insertarvols">Insertar vols</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=usuari&action=mostrarusuari">Mostrar Usuari</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=usuari&action=insertarusuari">Insertar Usuari</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=reserva&action=mostrarreserva">Mostrar Reserva</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=ticket&action=insertarticket">Insertar Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=ticket&action=mostrarticket">Mostrar Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
