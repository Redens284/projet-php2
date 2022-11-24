<?php

class DAO_responsable
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
        $req = $this->bdd->query('SELECT * FROM Responsable');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new \DTO\Responsable($row);

            }
        }
        return $resultSet;
    }
}
