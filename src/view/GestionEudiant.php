<?php
declare(strict_types=1);

require_once '../../config/appConfig.php';
require_once '../../src/fonctionsUtiles.php';

$db = connectBdd($infoBdd);

use DTO\Etudiant;

if ($db) {
    $repo = new DAO\DAO_Etudiant($db);

    $lesEtudiants = $repo->getAll();
} else {
    $lesEtudiants = null;
}

?>

<!DOCTYPE html>
<HTML>
<HEAD>
    <TITLE>Gestion Etudiant</TITLE>
    <meta charset="UTF-8">
    <link rel="stylesheet" media="screen"type="text/css" href="../../public/css/style.css">

</HEAD>
<BODY>

<section id="corps">
    <h1>LISTES DES ETUDIANTS</h1>
    <p>Un petit extrait de notre base de données </p>
    <?php if (!is_null($lesEtudiants)): ?>
        <table id='table2'>
            <thead>
            <tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Mail</th><th>Adresse</th><th>Code postal</th><th>Ville</th><th>Tel</th></tr>
            </thead>
            <tbody>
            <?php
            foreach ($lesEtudiants as $value):
                ?>
                <tr>
                    <td> <?= $value->getIdEtu(); ?> </td>
                    <td id="colonneLargeur2"><?= $value->getNomEtu(); ?></td>
                    <td id="colonneLargeur2"><?= $value->getPreEtu(); ?></td>
                    <td><?= $value->getMaiEtu(); ?></td>
                    <td id="colonneLargeur3"><?= $value->getAdrEtu(); ?></td>
                    <td id="colonneLargeur3"><?= $value->getCpEtu(); ?></td>
                    <td id="colonneLargeur3"><?= $value->getVilEtu(); ?></td>
                    <td id="colonneLargeur3"><?= $value->getTelEtu(); ?></td>
                    <td><a href="formEditClubPOO.php?idClub=<?= $value->getIdEtu(); ?>"> <img src="../img/edit.png" alt="Modifier"/> </a></td>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else:?>
        <p>Oups... Il semble y avoir eu une erreur!</p>
    <?php endif; ?>
</section>

</body>
</html>