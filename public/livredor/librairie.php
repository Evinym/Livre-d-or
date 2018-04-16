<?php include "templates/header.php"; ?>

<ul>
	<li><a href="index.php"><strong>Back</strong></a> - Add an event</li>
</ul>

<?php
	require "functions.php";
	require "../connection.php";
?>

<ul>
<?php
foreach(get_eventos_list() as $event){
	echo "<div id='container-flex'><a href='event.php?id=".$event['id']."'>". $event["name"] .",". $event["price"] . "</a>";
	echo "<form method='post' action='index.php' />\n";
	echo "<input type='hidden' value='".$event['id']."' name='delete' />\n";
	echo "<input type='submit' value='Update' />\n";
	echo "<button><a href='event.php?id=".$event['id']."'>"."modifier</a>\n";	echo "</form>";
	echo "</div>";
}
?>
</ul>


<?php include "templates/footer.php"; ?>
	echo "<button><a href='event.php?id=".$event['id']."'>"."modifier</a><button/>\n";