<?php

namespace DAO;

use DTO\Responsable;
use PDO;

class DAO_Responsable
{
    private PDO $bdd;

    /**
     * @param PDO $bdd
     */
    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function getAll(): ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM responsable');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new \DTO\Responsable($row);

            }
        }
        return $resultSet;
    }

    public function GetById(int $id): ?Responsable
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM responsable WHERE id_res=:id_res;';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_res' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if (!is_null($tab)) {
                // Si on récupère une occurence, on crée un objet PERSONNEL avec cette dernière
                $resultSet = new Responsable($tab);
            }
        }
        return $resultSet;
    }
    public function authentify(Responsable $entity): bool{
        $resultSet = NULL;
        if ($entity != NULL) {
            if ($this->bdd) {
                //  Conversion de l'entité en tableau associatif (nécessaire pour le binding)
                $query = 'SELECT * FROM responsable WHERE log_res = :login';
                //  Préparation et exécution de la requête
                $reqPrep = $this->bdd->prepare($query);
                $reqPrep->bindValue(':login', $entity->getlog_res());
                $rqtResult = $reqPrep->execute();
                if ($rqtResult) {
                    //  Récupération des résultats d'exécution de la requête
                    $row = $reqPrep->fetch(\PDO::FETCH_ASSOC);
                    if ($row) {
                        //  On a un résultat
                        $responsable = new Responsable($row);
                        //  Vérification du mot de passe.
                        // A FIARE PLUS TARD DANS LE SUJET
                        if (password_verify($entity->getmdp_res(), $responsable->getresponsable())) {
                            // if ($entity->getMdpPersonnel()== $personnel->getMdpPersonnel()){
                            //  On ne conserve nulle part le password en dehors de la bdd...
                            $responsable->setresponsable('');
                            //  Mise en place des variables de session
                            // A FIARE PLUS TARD DANS LE SUJET
                            $_SESSION['Responsable'] = $responsable;
                            //  Authentification réussie, on retournera TRUE
                            $resultSet = TRUE;
                        } else
                            $resultSet = FALSE;
                    } else
                        $resultSet = FALSE;
                } else
                    $resultSet = FALSE;
            } else
                $resultSet = FALSE;
        }
        return $resultSet;
    }

    public function ajoutResponsable(Responsable $entity):?Responsable{
        $resultat = true;
        $query = "INSERT INTO responsable" .
            " (id_res,nom_res,pre_res,tel_res,mai_res,nb_res,log_res,mdp_res,lib_res,id_pro)"
            . " VALUES (:id_res, :nom_res, :pre_res, :tel_res,:mai_res,:nb_res,:log_res,:mdp_res,:lib_res,:id_pro)";
        $reqPrep = $this->bdd->prepare($query);
        $res = $reqPrep->execute(
            [':id_res'=>$entity->getid_res(),
                ':nom_res'=>$entity->getnom_res(),
                ':pre_res' => $entity->getpre_res(),
                ':tel_res' => $entity->gettel_res(),
                ':mai_res' => $entity->getmai_res(),
                ':nb_res' => $entity->getnb_res(),
                ':log_res' => $entity->getlog_res(),
                ':mdp_res' => $entity->getmdp_res(),
                ':lib_res' => $entity->getlib_res(),
                ':id_pro' => $entity->getid_pro(),
            ]
        );
        if ($res == FALSE) {
            $resultat = false;
        }
        else {
            $entity->setid_res($this->bdd->lastInsertId());
            $_SESSION['Responsable'] = $entity;
        }

        return $entity;
    }
}