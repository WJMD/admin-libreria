<?php

include('inc/header4.php');
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
   
</head>
<body>
    <main>
    <?php include('top_menus.php'); ?>
        <section class="container my-5">
            <h1 class="mb-4">Sobre Nosotros</h1>
            <p>Somos un equipo de desarrolladores apasionados por crear soluciones tecnológicas innovadoras. Nuestro objetivo es brindar herramientas eficientes y fáciles de usar a nuestros clientes.</p>

            <h2 class="mt-5 mb-4">Nuestro Equipo</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/member1.jpg" class="card-img-top" alt="Miembro 1">
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">Estudiante de Ingeniería Informática</p>
                            <p class="card-text">john.doe@example.com</p>
                            <a href="https://www.linkedin.com/in/johndoe" target="_blank" class="btn btn-primary">LinkedIn</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/member2.jpg" class="card-img-top" alt="Miembro 2">
                        <div class="card-body">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">Estudiante de Ciencias de la Computación</p>
                            <p class="card-text">jane.smith@example.com</p>
                            <a href="https://www.linkedin.com/in/janesmith" target="_blank" class="btn btn-primary">LinkedIn</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/member3.jpg" class="card-img-top" alt="Miembro 3">
                        <div class="card-body">
                            <h5 class="card-title">David Lee</h5>
                            <p class="card-text">Estudiante de Desarrollo de Software</p>
                            <p class="card-text">david.lee@example.com</p>
                            <a href="https://www.linkedin.com/in/davidlee" target="_blank" class="btn btn-primary">LinkedIn</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
			include("./footer.php");
			?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>