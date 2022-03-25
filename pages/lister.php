<div class="text">Lister-Editer-Supprimer</div>

<?php 
    $resultQueryPlante = $mysqli->query("SELECT * FROM plantes LIMIT 15");
    $mysqli->close();

?>

<table class="styled-table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if ($resultQueryPlante ->num_rows > 0 ) {

            foreach($resultQueryPlante as $rowPlante) {


        ?>
        <tr>
        
            <td>
                <?php echo $rowPlante['nom'] ?>
            </td>
             <td>    
                <?php echo $rowPlante['description'] ?>
            </td>
            <td>    
                <?php echo $rowPlante['prix'] ?>
            </td>
            <td>
                <a href="index.php?mod=modifier&id=<?php echo $rowPlante['id']  ?>"><i class='bx bxs-edit sizeIconXL'></i></a>
            </td>
            <td>
                <a href="index.php?mod=supprimer&id=<?php echo $rowPlante['id']  ?>">
                <i class='bx bx-trash sizeIconXL' ></i></a>
            </td>
            
        </tr>
        
        <?php

                }

            } 
      
        ?>     
       <!-- <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
        </tr>
         and so on... -->
    </tbody>
</table>