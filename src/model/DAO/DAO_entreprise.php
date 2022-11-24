<?php

class DAO_entreprise
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
        $req = $this->bdd->query('SELECT * FROM Entreprise');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new \DTO\Entreprise($row);

            }
        }
        return $resultSet;
    }
}