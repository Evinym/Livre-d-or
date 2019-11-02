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
    <div>
        <h1>Inscription</h1>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                           echo '<p>Fill in all fields!</p>'; 
                    }
                    else if ($_GET["error"] == "invaliduidmail") {
                            echo '<p>Invalid username and e-mail!</p>';
                    }
                    else if ($_GET["error"] == "invaliduid") {
                            echo '<p>Invalid username!</p>';
                    }
                    else if ($_GET["error"] == "invalidmail") {
                            echo '<p>Invalid e-mail</p>';
                    }
                    else if ($_GET["error"] == "passwordcheck") {
                            echo '<p>Your passwords do not match!</p>';
                    }
                    else if ($_GET["error"] == "usertaken") {
                            echo '<p>Username is already taken!</p>';
                    }
                    else if ($_GET["signup"] == "success") {
                            echo '<p>Signup successfull!</p>';
                    }
                }                   
            ?>
        <form action="account/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button class="allButton button2Conexion" type="submit" name="signup-submit">Inscription</button>                    
        </form>
    </div>
    <br/><br/><br/><br/>

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