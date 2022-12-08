<?php
//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
declare(strict_types=1);

//  Les inclusions nécessaires
require_once '../../config/appConfig.php';
require_once '../../src/fonctionsUtiles.php';

//  Par principe, mettez le maximum du code PHP nécessaire ici.

$etudiant = null;
$id_etu=null;

$nom_etu = NULL;
$pre_etu= NULL;
$mai_etu = NULL;
$adr_etu = NULL;
$cp_etu = NULL;
$vil_etu = NULL;
$tel_etu = NULL;
$lib_clas = NULL;
$lib_spe = NULL;
$id_res = NULL;
$id_ent = NULL;

//Récupération de l'idClub envoyée en GET
$id_etu = $_GET['id_etu'];

use DTO\Etudiant;

//Si on a un idClub qui a été passé en get à la page on se connecte à la BDD
if($id_etu !== false && !is_null($id_etu)) {
    //Connexion à la BDD
    $bdd = connectBdd($infoBdd);
    if ($bdd) {
        $repo = new DAO\DAO_Etudiant($bdd);

        $etudiant = $repo->getById(intval($id_etu));

        if ($etudiant!== NULL) {
            $nom_etu = $etudiant->getNomEtu();
            $pre_etu = $etudiant->getPreEtu();
            $mai_etu = $etudiant->getMaiEtu();
            $adr_etu = $etudiant->getAdrEtu();
            $cp_etu = $etudiant->getCpEtu();
            $vil_etu = $etudiant->getVilEtu();
            $tel_etu = $etudiant->getTelEtu();
            $lib_clas = $etudiant->getLibClas();
            $lib_spe = $etudiant->getLibSpe();
            $id_res = $etudiant->getIdRes();
            $id_ent = $etudiant->getIdEnt();

        }
    }
}
?>
<!DOCTYPE>
<HTML>
<HEAD>
    <TITLE> Gestion Etudiant </TITLE>
    <meta charset="UTF-8">
    <link rel="stylesheet" media="screen"type="text/css" href="../css/style.css">

</HEAD>
<BODY>


<section id="corps">
    <h1> Gestion des Etudiants </h1> <!--A modifier pour la partie Optimisation !-->
    </header>

    <form method="POST" action="../controller/traitEditClub.php">
        <input type="hidden" id="id_etu" name="id_etu" value="<?= $id_etu ?>" /> <!--Permet de garder l'id quand on envoie les données du formulaire !-->
        <div>
            <label for="nom_etu">Nom de l'Etudiant :</label><br/>
            <input type="text" id="nom_etu" placeholder="nom de l'Etudiant" name="nom_etu" value="<?= $nom_etu ?>" size="40">
        </div>
        <div>
            <label for="pre_etu">Prenom de l'Etudiant :</label><br/>
            <input type="text"id="pre_etu" placeholder="Prenom de l'Etudiant" name="pre_etu" size="100"  value="<?= $pre_etu ?>" required="required">
        </div>
        <div>
            <label for="mai_etu">Mail Etudiant :</label><br/>
            <input type="text"id="mai_etu" placeholder="Mail Etudiant" name="mai_etu" size="20" value="<?= $mai_etu ?>" required="required">
        </div>
        <div>
            <label for="adr_etu">Adresse Etudiant :</label><br/>
            <input type="text" id="adr_etu" placeholder="Adresse Etudiant" name="adr_etu" size="40" value="<?= $adr_etu ?>" required="required">
        </div>
        <div>
            <label for="cp_etu">Code Postal Etudiant :</label><br/>
            <input type="text" id="cp_etu" placeholder="Code Postal Etudiant" name="cp_etu" size="40" value="<?= $cp_etu ?>" required="required">
        </div>
        <div>
            <label for="vil_etu">Ville Etudiant :</label><br/>
            <input type="text" id="vil_etu" placeholder="Ville Etudiant" name="vil_etu" size="40" value="<?= $vil_etu ?>" required="required">
        </div>
        <div>
            <label for="tel_etu">Tel Etudiant :</label><br/>
            <input type="text" id="tel_etu" placeholder="Tel Etudiant" name="tel_etu" size="40" value="<?= $tel_etu ?>" required="required">
        </div>
        <div>
            <label for="lib_clas">Libeller Classe :</label><br/>
            <input type="text" id="lib_clas" placeholder="Libeller Classe" name="lib_clas" size="40" value="<?= $lib_clas ?>" required="required">
        </div>
        <div>
            <label for="lib_spe">Libellé Spe :</label><br/>
            <input type="text" id="lib_spe" placeholder="Libellé Spe" name="lib_spe" size="40" value="<?= $lib_spe ?>" required="required">
        </div>
        <div>
            <label for="id_res">IDRES :</label><br/>
            <input type="text" id="id_res" placeholder="IDRES" name="id_res" size="40" value="<?= $id_res ?>" required="required">
        </div>
        <div>
            <label for="id_ent">IDENT :</label><br/>
            <input type="text" id="id_ent" placeholder="IDENT" name="id_ent" size="40" value="<?= $id_ent ?>" required="required">
        </div>
        <br/>
        <div class="form-group">
            <button type="submit"> Modifier/Ajouter</button>
        </div>

    </form>

</section>

</body>
</html>
