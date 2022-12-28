<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link rel="shortcut icon" href="assets\Mesa de trabajo 1.png" type="image/x-icon">
    <link rel="stylesheet" href="style\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeraFlops Components</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-primary bg-opacity-25">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets/Mesa de trabajo 2.png" alt="Logo" width="200" height="48"
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
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          </li>
          <a class="nav-link active" aria-current="page" href="page/carrito.html">Carrito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#formulario">Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#local">Local</a>
          </li>
          <li class="nav-item">
                <a class="nav-link active" href="page/iniciar.php">Crear cuenta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="galeria" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/vga-20220920-6.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/Untitled-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/MSI-GeForce-RTX-4090-y-GeForce-RTX-4080-SUPRIM.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <h2 id="categoria">Categorias</h2>
  <div class="cards">
    <div class="card">
      <img src="assets/ar-t35f-388813-lf27t350fhlczb-456992076.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Monitores</h5>
        <p class="card-text">El monitor de PC, también llamado pantalla, monitor de ordenador y monitor de
          computadora, es el principal dispositivo de salida (interfaz), que muestra datos o información a todos los
          usuarios.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
              <div class="modal-body">
                Desea cambiar de pagina?
              </div>
             
              <div class="modal-footer">
                <a href="page/carrito.html">
                <button type="button" class="btn btn-primary">Si</button>
                </a>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img src="assets/D_NQ_NP_696492-MLA49851449808_052022-W.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tarjetas Graficas</h5>
        <p class="card-text">Una tarjeta gráfica o tarjeta de video se encarga de procesar los datos provenientes del
          procesador y transformarlos en información comprensible y representable en el dispositivo de salida (por
          ejemplo: monitor, televisor o proyector).</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
    <div class="card">
      <img src="assets/1366_2000.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Procesadores</h5>
        <p class="card-text">Su función es interpretar las instrucciones de un programa informático mediante la
          realización de las operaciones básicas aritméticas, lógicas, y externas (procedentes de la unidad de
          entrada/salida). Su diseño y su avance ha variado notablemente desde su creación</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
    <div class="card">
      <img src="assets/1631906533_1000.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Motherboards</h5>
        <p class="card-text">La placa base, también conocida como tarjeta madre, placa madre o placa principal
          (motherboard o mainboard en inglés), es una tarjeta de circuito impreso a la que se conectan los componentes
          que constituyen la computadora.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
    <div class="card">
      <img src="assets/1651252924_jhjh.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Memorias ram</h5>
        <p class="card-text">La memoria de acceso aleatorio (Random Access Memory, RAM) es una memoria de
          almacenamiento a corto plazo. El sistema operativo de ordenadores u otros dispositivos utiliza la memoria
          RAM para almacenar de forma temporal todos los programas y sus procesos de ejecución.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
    <div class="card">
      <img src="assets/ssd-green-1tb_11-5637aa9f459b355c5c15622559663168-1024-1024.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Memorias SSD y HDD</h5>
        <p class="card-text">En informática, unidad de disco duro o unidad de disco rígido (en inglés: hard disk
          drive, HDD) es un dispositivo de almacenamiento de datos que emplea un sistema de grabación magnética para
          almacenar y recuperar archivos digitales.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
    <div class="card">
      <img src="assets/871396-MLA44596001559_012021-F.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Fuentes</h5>
        <p class="card-text">En electrónica, la fuente de alimentación o fuente de potencia es el dispositivo que
          convierte la corriente alterna (CA), en una o varias corrientes continuas (CC), que alimentan los distintos
          circuitos del aparato electrónico al que se conecta.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
    <div class="card">
      <img src="assets/e0a51fcabe241700d849b66d0eff4058f7843e9e.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Gabinetes</h5>
        <p class="card-text">En informática, la caja, carcasa, chasis, tarro, gabinete o torre de computadora u
          ordenador es la estructura metálica o plástica, cuya función consiste en albergar y proteger la mayoría de
          los componentes de una computadora personal.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
    <div class="card">
      <img src="assets/1552413522_kl.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Parlantes</h5>
        <p class="card-text">Un altavoz (también conocido como parlante, altoparlante, bocina o corneta, mayormente en
          América del Sur) es un transductor electroacústico, esto es, un dispositivo que convierte una señal
          eléctrica de audio en ondas mecánicas de sonido.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
    <div class="card">
      <img src="assets/mouse-logitech-gamer-rgb-lila_38560_5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mouse</h5>
        <p class="card-text">El ratón o mouse (en inglés pronunciado /maʊs/) es un dispositivo apuntador utilizado
          para facilitar el manejo de un entorno gráfico en una computadora. Generalmente está fabricado en plástico,
          y se utiliza con una de las manos.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
    <div class="card">
      <img src="assets/G733-FOB-Lilac.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Auriculares</h5>
        <p class="card-text">Un auricular (también conocido audífono en América; generalmente se usa uno en cada
          oído, por lo que es frecuente emplear el nombre en plural: auriculares, audífonos o también cascos​) es un
          transductor que recibe una señal eléctrica originada desde una fuente electrónica</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
    <div class="card">
      <img src="assets/concepto-4787599.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Teclados</h5>
        <p class="card-text">En informática, un teclado es un dispositivo de entrada, en parte inspirado en el teclado
          de las máquinas de escribir, que utiliza un sistema de puntadas o márgenes, para que actúen como palancas
          mecánicas o interruptores electrónicos que envían toda la información a la computadora o al teléfono móvil.
        </p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver mas
        </button>
      </div>
    </div>
  </div>
  <h2 id="formulario">Contactanos</h2>
  <div class="mapa-formulario">
    <form method="post" class="formulario-contacto">
      <label for="Email" class="form-label">Email</label>
      <input type="email" class="form-control" name="Email" placeholder="Jose@hotmail.com" required>
      <label for="Nombre" class="form-label">Nombre Completo</label>
      <input type="text" class="form-control" name="Nombre" placeholder="Jose Lopez" required>
      <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3" required></textarea>
      <input type="submit" class="btn btn-primary" placeholder="Enviar" name="boton">
    </form>
    <?php
    include("contacto.php")
    ?>
    <h2 class="titulo-local">Local</h2>
    <iframe class="mapa" id="local"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6567.366017391076!2d-58.44391050909699!3d-34.61217641206246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca13af9216e1%3A0x31409c54e9f91576!2sDistelec%20-%20Componentes%20Electr%C3%B3nicos!5e0!3m2!1ses-419!2sar!4v1669567974372!5m2!1ses-419!2sar"
      width="550" height="350" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <footer class="bg-primary bg-opacity-25 justyf">
    <img src="assets/Mesa de trabajo 2.png" alt="Logo" width="300" height="72">
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
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>