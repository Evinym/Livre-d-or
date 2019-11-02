<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="shortcut icon" href="images/photo-profil-JC.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>LIVRE-DOR</title>
</head>
<body>
	<main>
        <?php
            if (isset($_SESSION['userId'])) {
                echo '<nav class="nav-extended blue">
                        <div class="nav-wrapper">
                            <a href="home.php" class="brand-logo">
                                <div class="logo-num-comtenaire">
                                    <img class="logo-num" src="../images/livre-d-or-p1.png" alt="gold - book">
                                </div>								
                            </a>
                            <h3 class="brand-logo center">Livre d-Or</h3>
                        </div>
                        <br/>
                        <div class="nav-content">
                            <ul class="tabs tabs-transparent">
                                <li class="tab"><a href="home.php">Acceuil</a></li>
                                <li class="tab"><a class="active" href="event.php">Ajouter Livre</a></li>
                                <li class="tab"><a class="active" href="elevent-md.php">Afficher Livre</a></li>
                                <li class="tab"><a href="delet-md.php">Supprimer Livre</a></li>
                                <li class="tab">
                                    <form action="../account/logout.inc.php" method="post">
                                        <button type="submit" class="allButton buttonDconexion" name="logout-submit">Déconnexion</button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </nav>
                ';
            }
            else {
				echo '<nav class="nav-extended blue">
						<div class="nav-wrapper">
							<a href="index.php" class="brand-logo">
								<div class="logo-num-comtenaire">
									<img class="logo-num" src="../images/livre-d-or-p1.png" alt="gold - book">
								</div>								
							</a>
							<h3 class="brand-logo center">Livre d-Or</h3>
						</div>
						<br/>
						<div class="nav-content">
							<ul class="tabs tabs-transparent">
                                <li class="tab"><a href="home.php">Acceuil</a></li>
                                <li class="tab"><a href="../portail.php">Connexion</a></li>
                                <li class="tab"><a href="../signup.php">Inscription</a></li>
							</ul>
						</div>
					</nav>
				';
                }
            ?>
	</main>
    <br/  >
    