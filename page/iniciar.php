<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets\Mesa de trabajo 1.png" type="image/x-icon">
    <link rel="stylesheet" href="../style/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary bg-opacity-25">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php">
            <img src="../assets/Mesa de trabajo 2.png" alt="Logo" width="200" height="48"
              class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Categorias
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Monitores</a></li>
                  <li><a class="dropdown-item" href="#">Tarjetas graficas</a></li>
                  <li><a class="dropdown-item" href="#">Procesadores</a></li>
                  <li><a class="dropdown-item" href="#">Motherboards</a></li>
                  <li><a class="dropdown-item" href="#">Memorias ram</a></li>
                  <li><a class="dropdown-item" href="#">Memorias SSD y HDD</a></li>
                  <li><a class="dropdown-item" href="#">Fuentes</a></li>
                  <li><a class="dropdown-item" href="#">Gabinetes</a></li>
                </ul>
              </li>
              <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
              </li>
              </li>
              <a class="nav-link active" aria-current="page" href="../index.php">Carrito</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../index.php">Contactos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../index.php">Local</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <form class="row g-3 p-10 m-5 g bg-primary bg-opacity-25 rounded-2">
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="validationDefault01" name="Nombre" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="validationDefault02" name="Apellido" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefaultUsername" class="form-label">Username</label>
          <input type="text" class="form-control" id="validationDefaultUsername" name="Usuario"  aria-describedby="inputGroupPrepend2" required>
        </div>
        <div class="col-md-6">
          <label for="validationDefault03" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="validationDefault03" name="Ciudad" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Estado</label>
          <select class="form-select" id="validationDefault04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Zip</label>
          <input type="text" class="form-control" id="validationDefault05" name="ZIP" required>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
      </form>
      <?php
      include("registro.php")
      ?>
      <footer class="bg-primary bg-opacity-25 justyf mt-5">
        <img src="../assets/Mesa de trabajo 2.png" alt="Logo" width="300" height="72">
        <ul class="nav">
          <li>
            <a class="nav-link" href="https://www.instagram.com">Instagam</a>
          </li>
          <li>
            <a class="nav-link" href="https://www.facebook.com">Facebook</a>
          </li>
          <li>
            <a class="nav-link" href="https://www.tiktok.com">Tiktok</a>
          </li>
          <li>
            <a class="nav-link" href="https://www.gmail.com">Email</a>
          </li>
          <li>
            <a class="nav-link" href="https://www.youtube.com">YouTube</a>
          </li>
          <li>
            <a class="nav-link" href="https://twitter.com">Twitter</a>
          </li>
        </ul>
        <ul class="nav">
          <li>
            <a class="nav-link" href="#">
              Acerca
            </a>
          </li>
          <li>
            <a class="nav-link" href="#">
              Ayuda/FAQ
            </a>
          </li>
          <li>
            <a class="nav-link" href="#">
              Términos de Uso
            </a>
          </li>
          <li>
            <a class="nav-link" href="#">
              Política de Privacidad
            </a>
          </li>
          <li>
            <a class="nav-link" href="#">
              Aceptación de cookies
            </a>
          </li>
          <li>
            <a class="nav-link" href="#">
              Contacto de prensa
            </a>
          </li>
        </ul>
        <ul class="nav">
          <li>
            <a class="nav-link" href="#">
              Crear cuenta
            </a>
          </li>
          <li>
            <a class="nav-link" href="#">
              Acceder
            </a>
          </li>
        </ul>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>