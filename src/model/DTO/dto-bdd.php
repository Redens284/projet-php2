<?php

namespace DTO;

use PDO;

class bdd
{
    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $pdo = new \PDO("mysql:host=;dbname=;charset=UTF8", "", "");
        $this->pdo = $pdo;
    }

    /**
     * @return PDO|\PDO
     */
    public function getPdo(): \PDO
    {
        return $this->pdo;
    }

    /**
     * @param PDO|\PDO $pdo
     */
    public function setPdo(\PDO $pdo): void
    {
        $this->pdo = $pdo;
    }


}