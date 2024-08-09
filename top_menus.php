<!--
<nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primary mb-3">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="collapsingNavbar">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<h2><a class="nav-link" href="dashboard.php">Gestión de Librería <span class="sr-only">CWEB</span></a></h2>
			</li>

		</ul>
		<ul class="navbar-nav ml-auto">
			<?php /* if (!empty($_SESSION) && $_SESSION["userid"]) { ?>
				<li class="nav-item">
					<a class="nav-link"><?php echo ucfirst($_SESSION["name"]); ?></a>
				</li>
			<?php } else { ?>
			<?php } */?> 
		</ul>
	</div>
</nav>
			
			<nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primary mb-3">
        <div class="navbar-collapse collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <h2><a class="nav-link" href="dashboard.php">Gestión de Librería <span class="sr-only">CWEB</span></a></h2>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if (!empty($_SESSION) && $_SESSION["userid"]) { ?>
                    <li class="nav-item">
                        <a class="nav-link"><?php echo ucfirst($_SESSION["name"]); ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
				-->

				<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-inverse bg-primary mb-3">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Gestión de Librería</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <?php if (!empty($_SESSION) && $_SESSION["userid"]) { ?>
                        <li class="nav-item">
                            <a class="nav-link"><?php echo ucfirst($_SESSION["name"]); ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        $(document).ready(function() {
            $(".navbar-toggler").on("click", function() {
                $("#navbarNav").toggleClass("show");
            });
        });
    </script>