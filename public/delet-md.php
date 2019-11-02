<?php   
    include('templates/header.php');
?>
<?php
   if(isset($error_message)){
        echo $error_message;
    }
?>

    <h1 class="pots">Delet Book  On Bank</h1>

    <h3>
        <?php
            if(!empty($id)){
                echo "Book Delet";
            } else {
                echo "Book on bank";
            }
        ?>
    </h3>

<?php
    require('../account/functions.php');

    require('../account/paramos.php');

    foreach(get_eventos_list() as $post){
                echo '<form method="post" action="delet-post.php" class="cardContenairJeux">'; 
                
                    echo '<h3>';
                    echo $post["titre"];
                echo '</h3><br/><p>';

                    echo $post["date"];

                echo '</p><br/><p>';

                    echo $post["hour"];
 
                echo '</p><br/><textarea id="" cols="30" rows="3">'; 
                    echo $post["description"];
                echo '</textarea><br/>';

                echo '<img src="'; 
                    echo $post["image"];                
                echo'" alt="photo de couverture"><br/><br/>';

                echo'<textarea id="" cols="40" rows="5">'; 
                echo $post["livre"];
                
                echo'</textarea><br/><h2>';
                echo $post["name"];
                echo'</h2>';


                if(!empty($id)){
                    echo '<input type="hidden" name="id" value="'.$id.'">';
                }
     
                echo'<input type="submit" name="submit" value="Détruire">';
                echo'<br/><br/></form><br/><br/>';

        }
    ?>

    <a href="home.php"><button>Back to home</button></a><br/><br/>

<?php include('templates/footer.php'); ?>