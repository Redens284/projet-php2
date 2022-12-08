<?php

namespace DAO;

use DTO\Profil;

class DAO_Profil
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
        $req = $this->bdd->query('SELECT * FROM profil');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new \DTO\Profil($row);

            }
        }
        return $resultSet;
    }

    public function GetById(int $id): ?Profil
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM profil WHERE id_pro=:id_pro;';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_pro' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if (!is_null($tab)) {
                // Si on récupère une occurence, on crée un objet PERSONNEL avec cette dernière
                $resultSet = new Profil($tab);
            }
        }
        return $resultSet;
    }
}