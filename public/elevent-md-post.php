<?php
    include('elevent-post.php');
    require('../account/paramos.php');

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = 'SELECT * FROM event WHERE id= '.$id;

$result = mysqli_query($conn, $query);

$post = mysqli_fetch_assoc($result);
//var_dump($posts);

mysqli_free_result($result);

mysqli_close($conn);



?>

<?php require('templates/header.php'); ?>

<?php 
    if(isset($error_message)){
        echo $error_message;
    }
?>

<h2>
    <?php
    if(!empty($id)){
        echo "Modifier le Livre";
    } else {
        echo "Livre modifier";
    }
    ?>
</h2>

    <form class="cardContenairJeuxAD" method="post" action="elevent-post.php">
        <?php
	        if(!empty($id)){
		        echo '<input type="hidden" name="id" value="'.$id.'">';
	        }
        ?>
        <div class="cardContenairJeux">
            <h3><?php echo $post["titre"]; ?></h3><br/>
            <p><?php echo $post["date"]; ?></p><br/>
            <p><?php echo $post["hour"]; ?></p><br/>
            <textarea id="" cols="20" rows="5"><?php echo $post["description"]; ?></textarea><br/>
            <img src='<?php echo $post["image"]; ?>' alt="photo de couverture"><br/><br/>
            <textarea id="" cols="40" rows="5"><?php echo $post["livre"]; ?></textarea><br/>
            <h2><?php echo $post["name"]; ?></h2>
        </div> 
        <br/><br/>


        <br/>

        <input type="submit" name="submit" value="Modiffier">
        
    </form>

    <br/><br/><a href="<?php echo ROOT_A_URL; ?>" class="btn btn-default"><button><h2 class="pots">Annuler</h2></button></a><br/>

  
<?php include('templates/footer.php'); ?>