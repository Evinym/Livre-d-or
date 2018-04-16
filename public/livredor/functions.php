<?php

function get_books_list(){
    include "../../connection.php";

    try{
        return $reponse = $connection->query("SELECT * FROM event");
    } catch(PDOException $e){
       echo "Error : ". $e->getMessage();
       return false; 
    }
}

function get_eventos_list(){
    include "../connection.php";

    try{
        return $reponse = $connection->query("SELECT * FROM event WHERE name=? AND surname=? AND passwordd=? ");
    } catch(PDOException $e){
       echo "Error : ". $e->getMessage();
       return false; 
    }
}

function get_books($id){
    include "../../connection.php";

    try{
        $sql= "SELECT * FROM event WHERE id= ?";
        $result=$connection->prepare($sql);
        $result->bindValue(1, $id, PDO::PARAM_INT);
        $result->execute();
    }
    catch(Exception $e){
        echo $e->getMessage();
        return false;
    }
    return $result->fetch();
}

function add_books($titre, $date, $hour, $description, $image, $livre, $name, $surname, $passwordd, $id=null){
    include "../../connection.php";

    if($id){
        $sql = "UPDATE event SET titre = ?, date = ?, hour = ?, description = ?, image = ?, livre = ?, name = ?, surname = ?, passwordd = ? WHERE id = ?";
    } else {
        $sql = "INSERT INTO event (titre, date, hour, description, image, livre, name, surname, passwordd) VALUE(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    }

    try{
        $result= $connection->prepare($sql);
        $result->bindValue(1, $titre, PDO::PARAM_STR);
        $result->bindValue(2, $date, PDO::PARAM_STR);
        $result->bindValue(3, $hour, PDO::PARAM_STR);
        $result->bindValue(4, $description, PDO::PARAM_STR);
        $result->bindValue(5, $image, PDO::PARAM_STR);
        $result->bindValue(6, $livre, PDO::PARAM_STR);
        $result->bindValue(7, $name, PDO::PARAM_STR);
        $result->bindValue(8, $surname, PDO::PARAM_STR);
        $result->bindValue(9, $passwordd, PDO::PARAM_STR);

        if($id){
            $result->bindValue(10, $id,PDO::PARAM_INT);
        }
        $result->execute();
    } catch(Exception $e){
        echo $e->getMessage();
        return false;
    }
    return true;
}

function delete_event($id){
    include "../../connection.php";

    $sql="DELETE FROM event WHERE id= ?";

    try{
        $result=$connection->prepare($sql);
        $result->bindValue(1, $id, PDO::PARAM_INT);
        $result->execute();
    }
    catch(Exception $e){
        echo $e->getMessage();
        return false;
    }
    return true;
}
?>