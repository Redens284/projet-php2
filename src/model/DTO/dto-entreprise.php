<?php
namespace Entities;

class Entreprise
{

    private $id_ent;
    private $libelle;
    private $adresse_entreprise;

    /**
     * @return mixed
     */
    public function getIdEnt()
    {
        return $this->id_ent;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @return mixed
     */
    public function getAdresseEntreprise()
    {
        return $this->adresse_entreprise;
    }

    /**
     * @param mixed $adresse_entreprise
     */
    public function setAdresseEntreprise($adresse_entreprise): void
    {
        $this->adresse_entreprise = $adresse_entreprise;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle): void
    {
        $this->libelle = $libelle;
    }

    /**
     * @param mixed $id_ent
     */
    public function setIdEnt($id_ent): void
    {
        $this->id_ent = $id_ent;
    }
    function __construct(?array $datas = null)
    {
        if ($datas !== null) {
            (isset($datas['id_ent'])) ? $this->id_ent = $datas['id_ent'] : $this->getid_ent(null);
            (isset($datas['libelle'])) ? $this->libelle = $datas['libelle'] : $this->getlibelle(null);
            (isset($datas['adresse_ent'])) ? $this->adresse_ent = $datas['adresse_ent'] : $this->getadresse_ent(null);

        }

    }

}