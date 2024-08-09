<!DOCTYPE html>

<?php
include_once 'config/Database.php';
include_once 'class/Books.php';
include('inc/header4.php');
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
    <title>Librería</title>
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
<?php include('top_menus.php'); ?>
        <div class="container my-5">
                <h1 class="mb-4">Bienvenido a nuestra Librería</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
                <?php foreach ($homeBooks as $book) { ?>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                        <div class="card book-card h-100" >
                            <a href="#" class="">
                            <img src="images/<?php echo $book['picture']; ?>" class="card-img-top" alt="<?php echo $book['name']; ?>" style="height: 170px;">
                            </a>
                            <div class="card-body">
                                
                                    <h5 class="card-title"><?php echo $book['name']; ?></h5>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

            <?php
			    include("./footer.php");
			?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>