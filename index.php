<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="images/photo-profil-JC.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>LIVRE-DOR</title>
</head>
<body>
	<main>
        <?php
            if (isset($_SESSION['userId'])) {
                header("Location: public/home.php");
                exit();
            }
            else {
				echo '<nav class="nav-extended blue">
						<div class="nav-wrapper">
							<a href="index.php" class="brand-logo">
								<div class="logo-num-comtenaire">
									<img class="logo-num" src="images/livre-d-or-p1.png" alt="gold - book">
								</div>								
							</a>
							<h3 class="brand-logo center">Livre d-Or</h3>
						</div>
						<br/><br/>
						<div class="nav-content">
							<ul class="tabs tabs-transparent">
								<li class="tab"><a href="portail.php">Connexion</a></li>
								<li class="tab"><a class="active" href="signup.php">Inscription</a></li>
							</ul>
						</div>
					</nav>
				';
                }
            ?>
	</main>
	<br/>

<div class="divBook">
	<img class="divBookImg" src="images/livre-d-or-p2.png" alt="gold - book">
</div>
<br/>

<footer class="page-footer blue">
    <div class="container">
        <div class="col l6 s12">                
            <p class="grey-text text-lighten-4">Made with a lot of by : <strong>Evinym</strong></p>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">© 2018 - 2019 Copyright Text
	        <a class="grey-text text-lighten-4 right" href="https://github.com/Evinym/portFolio/" target="black!" >More informations</a>
    	</div>
  	</div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>
</html>
