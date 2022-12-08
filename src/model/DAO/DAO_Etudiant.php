<?php

namespace DAO;

use DTO\Etudiant;

class DAO_Etudiant
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
        $req = $this->bdd->query('SELECT * FROM etudiant');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new \DTO\Etudiant($row);

            }
        }
        return $resultSet;
    }

    public function GetById(int $id): ?Etudiant
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM etudiant WHERE id_etu=:id_etu;';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_etu' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if (!is_null($tab)) {
                // Si on récupère une occurence, on crée un objet PERSONNEL avec cette dernière
                $resultSet = new Etudiant($tab);
            }
        }
        return $resultSet;
    }
}