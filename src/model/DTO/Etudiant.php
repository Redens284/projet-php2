<?php
namespace DTO;

class Etudiant
{
    private  int $id_etu;
    private string $nom_etu;
    private string $pre_etu;
    private string $mai_etu;
    private string $adr_etu;
    private string $cp_etu;
    private string $vil_etu;
    private string $tel_etu;
    private string $lib_clas;
    private string $lib_spe;
    private int $id_res;
    private int $id_ent;



    /**
     * @return mixed
     */
    public function getAdresseEnt(): mixed
    {
        return $this->adresse_ent;
    }

    /**
     * @param mixed $adresse_ent
     */
    public function setAdresseEnt(mixed $adresse_ent): void
    {
        $this->adresse_ent = $adresse_ent;
    }

    /**
     * @return int
     */
    public function getIdEtu(): int
    {
        return $this->id_etu;
    }

    /**
     * @param int $id_etu
     */
    public function setIdEtu(int $id_etu): void
    {
        $this->id_etu = $id_etu;
    }

    /**
     * @return string
     */
    public function getNomEtu(): string
    {
        return $this->nom_etu;
    }

    /**
     * @param string $nom_etu
     */
    public function setNomEtu(string $nom_etu): void
    {
        $this->nom_etu = $nom_etu;
    }

    /**
     * @return string
     */
    public function getPreEtu(): string
    {
        return $this->pre_etu;
    }

    /**
     * @param string $pre_etu
     */
    public function setPreEtu(string $pre_etu): void
    {
        $this->pre_etu = $pre_etu;
    }

    /**
     * @return string
     */
    public function getMaiEtu(): string
    {
        return $this->mai_etu;
    }

    /**
     * @param string $mai_etu
     */
    public function setMaiEtu(string $mai_etu): void
    {
        $this->mai_etu = $mai_etu;
    }

    /**
     * @return string
     */
    public function getAdrEtu(): string
    {
        return $this->adr_etu;
    }

    /**
     * @param string $adr_etu
     */
    public function setAdrEtu(string $adr_etu): void
    {
        $this->adr_etu = $adr_etu;
    }

    /**
     * @return string
     */
    public function getCpEtu(): string
    {
        return $this->cp_etu;
    }

    /**
     * @param string $cp_etu
     */
    public function setCpEtu(string $cp_etu): void
    {
        $this->cp_etu = $cp_etu;
    }

    /**
     * @return string
     */
    public function getVilEtu(): string
    {
        return $this->vil_etu;
    }

    /**
     * @param string $vil_etu
     */
    public function setVilEtu(string $vil_etu): void
    {
        $this->vil_etu = $vil_etu;
    }

    /**
     * @return string
     */
    public function getTelEtu(): string
    {
        return $this->tel_etu;
    }

    /**
     * @param string $tel_etu
     */
    public function setTelEtu(string $tel_etu): void
    {
        $this->tel_etu = $tel_etu;
    }

    /**
     * @return string
     */
    public function getLibClas(): string
    {
        return $this->lib_clas;
    }

    /**
     * @param string $lib_clas
     */
    public function setLibClas(string $lib_clas): void
    {
        $this->lib_clas = $lib_clas;
    }

    /**
     * @return string
     */
    public function getLibSpe(): string
    {
        return $this->lib_spe;
    }

    /**
     * @param string $lib_spe
     */
    public function setLibSpe(string $lib_spe): void
    {
        $this->lib_spe = $lib_spe;
    }

    /**
     * @return int
     */
    public function getIdRes(): int
    {
        return $this->id_res;
    }

    /**
     * @param int $id_res
     */
    public function setIdRes(int $id_res): void
    {
        $this->id_res = $id_res;
    }

    /**
     * @return int
     */
    public function getIdEnt(): int
    {
        return $this->id_ent;
    }

    /**
     * @param int $id_ent
     */
    public function setIdEnt(int $id_ent): void
    {
        $this->id_ent = $id_ent;
    }

    public function __construct($data)
    {
        $this->id_etu = $data['id_etu'];
        $this->nom_etu = $data['nom_etu'];
        $this->pre_etu = $data['pre_etu'];
        $this->mai_etu = $data['mai_etu'];
        $this->adr_etu= $data['adr_etu'];
        $this->cp_etu = $data['cp_etu'];
        $this->vil_etu = $data['vil_etu'];
        $this->tel_etu = $data['tel_etu'];
        $this->lib_clas = $data['lib_clas'];
        $this->lib_spe = $data['lib_spe'];
        $this->id_res = $data['id_res'];
        $this->id_ent = $data['id_ent'];
    }
}