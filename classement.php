  <!--Inclusion du Header-->
<?php 
include('Include/header.php');
?>

<section id= classement>	
<?php 
include('Include/database.php');
 // Connexion à la base de données
 try {
     $stmt = $conn->prepare('SELECT * FROM classement');
     $stmt->execute();
     // Vérification de la requête
     if (!$stmt){
         $tableauErreurs = $conn->errorInfo();
         echo $tableauErreurs[2];
         die('Erreur dans la requête');
     }
     // Vérification de la présence de données
     if($stmt->rowCount() == 0){
         die('La table est vide');
     }
     // Déclaration de la table
     ?>
     <div class="table-responsive">
     <table class="table" style="margin-top: 3%; margin-bottom: 3%;">
     <thead>
     <tr>
     <th>POS.</th>
     <th>ÉCUSSON</th>
     <th>ÉQUIPE</th>
     <th>POINTS</th>
     <th>JOUÉS</th>
     <th>GAGNÉS</th>
     <th>NULS</th>
     <th>PERDUS</th>
     <th>DIFF.</th>
     </tr>
     </thead>
     <tbody>
     <?php
     // Boucle pour récupérer les données et les afficher dans le tableau
     while($row = $stmt->fetch(PDO::FETCH_OBJ))
     {
         ?>
     <tr>
     <td><?= $row->c_team ?></td>
     <td><img class="photo" src="assets/img/team/<?= $row->c_team?>.<?= $row->c_photo ?>" title="photo" id="photo2"></td>
     <td><?= $row->c_libelle ?></td>
     <td><?= $row->c_points ?></td>
     <td><?= $row->c_play ?></td>
     <td><?= $row->c_win ?></td>
     <td><?= $row->c_egal ?></td>
     <td><?= $row->c_lose ?></td>
     <td><?= $row->c_diff ?></td>
     </tr>
     <?php    
     }
 // Fermeture du tableau
 ?>
 </tbody>
 </table>
 <?php  
 }
 catch(PDOException $e) {
     echo 'Error: ' . $e->getMessage();
 }
 $conn = null;
     ?>
</section>

  <!--Inclusion du Footer-->
<?php 
include('Include/footer.php');
?>