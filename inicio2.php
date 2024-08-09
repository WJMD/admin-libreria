<?php
// Incluir las clases necesarias
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

<!DOCTYPE html>
<html>
<head>
    <title>Página de Inicio</title>
    <style>
        .book-item {
            display: inline-block;
            margin: 10px;
            text-align: center;
        }
        .book-item img {
            width: 150px;
            height: 200px;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a la Página de Inicio</h1>

    <div class="book-container">
        <?php foreach ($homeBooks as $book) { ?>
            <div class="book-item">
                <img src="images/<?php echo $book['picture']; ?>" alt="<?php echo $book['name']; ?>">
                <h3><?php echo $book['name']; ?></h3>
            </div>
        <?php } ?>
    </div>
</body>
</html>