  <!--Inclusion du Header-->
  <?php 
include('Include/header.php');
include('Include/database.php');
 // Connexion à la base de données
 try {
     $stmt = $conn->prepare('SELECT * FROM effectif');
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
     <section id='saison' style="margin-left: 20px; margin-right: -90px">
     <div class="table-responsive">
     <table class="table">
     <tbody>
     <?php
     // Boucle pour récupérer les données et les afficher dans le tableau
     while($row = $stmt->fetch(PDO::FETCH_OBJ))
     {
         ?>
         <div class="card_shop">
<div class="justify-content-center">
<img class="photo" src="assets/img/photo/<?= $row->pro_id?>.<?= $row->pro_photo ?>" id="photo">
<button type="button" style="width: 100%; background-color: #555555; color: white; font-size: 15px; border: 2px solid #555555; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);"><?= $row->pro_libelle ?></button>
  </div>
  </div>
     <?php    
     } // Fermeture du tableau
 ?>
 </tbody>
 </table>
 </section>
 <?php  
 }
 catch(PDOException $e) {
     echo 'Error: ' . $e->getMessage();
 }
 $conn = null;
     ?>

  <!--Inclusion du Footer-->
  <?php 
include('Include/footer.php');
?>