<?php

namespace DAO;

use DTO\Bilan;

class DAO_bilan
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
        $req = $this->bdd->query('SELECT * FROM bilan');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new \DTO\Bilan($row);

            }
        }
        return $resultSet;
    }

    public function ajoutBilan(Bilan $entity):?Bilan{
        $resultat = true;
        $query = "INSERT INTO bilan" .
            " (id_bil,dat_bil,not_ent,not_dos,not_ora,rem_bil,id_etu)"
            . " VALUES (:id_bil, :dat_bil, :not_ent, :not_dos,:not_ora,:rem_bil,:id_etu)";
        $reqPrep = $this->bdd->prepare($query);
        $res = $reqPrep->execute(
            [':id_bil'=>$entity->getid_bil(),
                ':dat_bil'=>$entity->getdat_bil(),
                ':not_ent' => $entity->getnot_ent(),
                ':not_dos' => $entity->getnot_dos(),
                ':not_ora' => $entity->getnot_ora(),
                ':rem_bil' => $entity->getrem_bil(),
                ':id_etu' => $entity->getid_etu(),
            ]
        );
        if ($res == FALSE) {
            $resultat = false;
        }
        else {
            $entity->setid_bil($this->bdd->lastInsertId());
            $_SESSION['Bilan'] = $entity;
        }

        return $entity;
    }

    public function ModifBilan(int $id,float $not_ent,float $not_dos,float $not_ora): void
    {

        $query = 'UPDATE bilan set not_ent =:not_ent,not_dos =:not_dos,not_ora =:not_ora where id_etu =:id_etu';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([
            ':not_ent' => $not_ent,
            ':not_dos' => $not_dos,
            ':not_ora' => $not_ora,
            ':id_etu' => $id,
        ]);

    }
}
