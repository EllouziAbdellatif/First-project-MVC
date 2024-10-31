
<?php
    $title = "Liste Stagiares";


    ob_start();
?>

    <a href="index.php?action=create"><button class="btn btn-primary mb-3">Ajouter Stagiaire</button></a>

            <table border="1" class="table  table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>AGE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($etudiants as $etudiant): ?>
                        <tr>
                            <td><?= $etudiant->id ?></td>
                            <td><?= $etudiant->nom ?></td>
                            <td><?= $etudiant->prenom ?></td>
                            <td><?= $etudiant->age ?></td>
                            <td>
                                <a href="index.php?action=delete&id= <?= $etudiant->id ?>" class="btn btn-danger btn-sm">Delete</a>
                                <a href="index.php?action=update&id= <?= $etudiant->id ?>" class="btn btn-warning btn-sm">Update</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
        </table>
        <?php $content = ob_get_clean();?>

    <?php include_once 'Views/layout.php'; ?>

    
