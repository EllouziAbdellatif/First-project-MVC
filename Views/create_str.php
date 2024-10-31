
<?php
    $title = "Ajouter Stagiares";


    ob_start();
?>

<form method="post" action="index.php?action=store">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom:</label>
    <input type="text" class="form-control" id="nom" name="nom" >
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" >
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age:</label>
    <input type="number" class="form-control" id="age" name="age">
  </div>
  
  <button type="submit" class="btn btn-primary">Create</button>
</form>



        <?php $content = ob_get_clean();?>

    <?php include_once 'Views/layout.php'; ?>

    
