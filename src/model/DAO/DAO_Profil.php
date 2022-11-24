<?php

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
        $req = $this->bdd->query('SELECT * FROM Profil');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new \DTO\Profil($row);

            }
        }
        return $resultSet;
    }
}