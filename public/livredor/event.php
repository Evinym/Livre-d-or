<?php
require "functions.php";

if(isset($_GET['id'])){
	list($id, $titre, $date, $hour, $description, $image, $livre, $name, $surname, $passwordd) = get_books(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
	$id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$titre = trim(filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING));
	$date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_URL));
	$hour = trim(filter_input(INPUT_POST, 'hour', FILTER_SANITIZE_URL));
	$description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
    $image = trim(filter_input(INPUT_POST, 'image', FILTER_SANITIZE_URL));
    $livre = trim(filter_input(INPUT_POST, 'livre', FILTER_SANITIZE_STRING));
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $surname = trim(filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING));
    $passwordd = trim(filter_input(INPUT_POST, 'passwordd', FILTER_SANITIZE_STRING));

	if(empty($titre) ||empty($date) || empty($hour) || empty($description) || empty($image) || empty($livre) || empty($name) || empty($surname) || empty($passwordd)){
		$error_message= "Please fill in the required fields";
	} else {

		if(add_books($titre, $date, $hour, $description, $image, $livre, $name, $surname, $passwordd, $id)){
			header('Location: ../index.php');
			exit;
		} else {
			$error_message = "Could not add book";
		}
	}
}
?>

<?php include "../templates/teplhead/createbook.php"; ?>

<?php 
if(isset($error_message)){
	echo $error_message;
}
?>

<h2>
<?php
if(!empty($id)){
	echo "Update";
} else {
	echo "Book on bank";
}
?></h2>


<form method="post" action="event.php">

	<label for="titre">title book</label>
	<input type="text" name="titre" id="titre" value="">

	<label for="date">Date</label>
	<input type="date" name="date" id="date" value="">

	<label for="hour">Start</label>
	<input type="time" name="hour" id="hour" value="">

	<label for="description">Description</label>
    <textarea id="description" name="description"></textarea></br>

	<label for="image">Photo de couverture</label>
	<input type="text" name="image" id="image" value=""></br>

	<label for="livre">Esquis d'oeuvre</label>
	<textarea id="livre" name="livre"></textarea></br>

    <label for="name">name user</label>
    <input type="text" name="name" id="name" value=""></br>

    <label for="surname">surname user</label>
    <input type="text" name="surname" id="surname" value=""></br>

    <label for="passwordd">password user</label>
    <input type="password" name="passwordd" id="passwordd" value=""></br></br>

<?php
	if(!empty($id)){
		echo '<input type="hidden" name="id" value="'.$id.'">';
	}
?>
	<input type="submit" name="submit" value="Envoyer">

</form></br></br>


<a href="../index.php">Back to home</a>

<?php include "../templates/footer.php"; ?>