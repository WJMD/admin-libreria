<!DOCTYPE html>

<?php
include_once 'config/Database.php';
include_once 'class/Books.php';

// Conectar a la base de datos
$database = new Database();
$db = $database->getConnection();

// Instanciar la clase Books
$book = new Books($db);

// Obtener los libros para la página de inicio
$homeBooks = $book->showHomeBooks();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio 2 prub</title>
    <link rel="stylesheet" href="/css/inicio.css?v=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 
  <style>
    .book-card {
      transition: transform 0.3s ease;
    }

    .book-card:hover {
      transform: translateY(-10px);
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Librería</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-nav" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Libros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>    

  <div class="container my-5">
        <h1 class="mb-4">Bienvenido a nuestra Librería</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
    <?php foreach ($homeBooks as $book) { ?>
        <div class="col-6 col-sm-6 col-md-4 col-lg-2">
            <div class="card book-card h-60" style="width: 100%;">
                <img src="images/<?php echo $book['picture']; ?>" class="card-img-top" alt="<?php echo $book['name']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $book['name']; ?></h5>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>