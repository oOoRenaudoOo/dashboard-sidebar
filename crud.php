<?php

include ("../config.php");




if (isset($_GET["action"])){
   
    switch($_GET["action"]) {
        
        case "ajouter":
            $maRequete = "INSERT INTO `plantes` (`id`, `nom`,`description`, `prix`, `dateIns`) VALUES (NULL, '".$_POST["nom"]."', '".$_POST["description"]."', '".$_POST["prix"]."', CURRENT_TIMESTAMP)";

        break;

        case "supprimer":
            $maRequete = "DELETE FROM plantes WHERE id = ".$_GET["id"];
           

        case "modifier":
         /*   $maRequete = "UPDATE `plantes` SET `description` = '$_POST["description"]', `prix` = '$_POST["prix"]' WHERE `plantes`.`id` = $_POST["id"]";

         */

        break;        
    }
    // echo $maRequete ;
    $resultat = $mysqli->query($maRequete);

}
    // redirection par defaut

    header("location: ".$dir_ws."admin/");


?>