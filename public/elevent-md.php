<?php include('templates/header.php'); ?>

    <h1 class="pots">Book Bank</h1>

    <?php
    require('../account/functions.php');
    require('../account/paramos.php');
    foreach(get_eventos_list() as $post){
        echo '
            <div class="cardContenairJeux">
                <h2>'; 
                echo $post["name"];
                
                echo'</h2><h3>'; 
                echo $post["titre"];
                
                echo'</h3><br/><p>'; 
                echo $post["date"];
                
                echo'</p><br/><p>'; 
                echo $post["hour"];
                
                echo'</p><br/><img src="'; 
                echo $post["image"];
                
                echo'" alt="photo de couverture"><br/><br/>
                <textarea id="" cols="30" rows="3">'; 
                echo $post["description"];
                
                echo'</textarea><br/>
                <textarea id="" cols="40" rows="5">'; 
                echo $post["livre"];
                
                echo'</textarea><br/>
                <a class="btn btn-default" href="'; 
                echo ROOT_E_URL;
                
                echo'elevent-md-post.php?id=';             
                echo $post["id"];            
                echo'">Modifier</a>
            </div>
        ';
    }
?>

<?php include('templates/footer.php'); ?>