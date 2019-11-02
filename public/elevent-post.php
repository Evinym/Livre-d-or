<?php
require "../account/functions.php";

if(isset($_GET['id'])){
	list($id, $titre, $date, $hour, $description, $image, $livre, $name) = get_books(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
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

	if(empty($titre) ||empty($date) || empty($hour) || empty($description) || empty($image) || empty($livre) || empty($name)){
		$error_message= "Please fill in the required fields";
	} else {

		if(add_books($titre, $date, $hour, $description, $image, $livre, $name, $id)){
			header('Location: elevent-md.php');
			exit;
		} else {
            $error_message = "Could not add book";
            header('Location: elevent-md-post.php');
		}
	}
}
