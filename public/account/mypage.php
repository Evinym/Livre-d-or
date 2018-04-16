<?php include "../templates/teplhead/createbook.php"; ?>

<?php

require "../functions.php";

if(isset($_GET['id'])){
	list($id, $name, $surname, $passwordd) = get_event(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
	$id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
	$surname = trim(filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING));
	$passwordd = trim(filter_input(INPUT_POST, 'passwordd', FILTER_SANITIZE_STRING));

	if(empty($name) ||empty($surname) || empty($passwordd)){
		$error_message= "Please fill in the required fields";
	} else {

		if(add_event($name, $surname, $passwordd, $id)){
			header('Location: index.php');
			exit;
		} else {
			$error_message = "Could not add account";
		}
	}
}

?>
<a href="../livredor/event.php">LIVRES OKAZIO MIEL</a>

<?php include "../templates/footer.php"; ?>