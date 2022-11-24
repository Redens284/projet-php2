<?php
namespace DTO;

class Entreprise
{

    private int $id_ent;
    private string $adr_ent;
    private string $cp_ent;
    private string $vil_ent;
    private string $nom_ent;
    private string $nom_mai_app;
    private string $pre_mai_app;
    private string $tel_app;
    private string $mai_app;

    /**
     * @return int|mixed
     */
    public function getIdEnt(): mixed
    {
        return $this->id_ent;
    }

    /**
     * @param int|mixed $id_ent
     */
    public function setIdEnt(mixed $id_ent): void
    {
        $this->id_ent = $id_ent;
    }

    /**
     * @return mixed|string
     */
    public function getAdrEnt(): mixed
    {
        return $this->adr_ent;
    }

    /**
     * @param mixed|string $adr_ent
     */
    public function setAdrEnt(mixed $adr_ent): void
    {
        $this->adr_ent = $adr_ent;
    }

    /**
     * @return mixed|string
     */
    public function getCpEnt(): mixed
    {
        return $this->cp_ent;
    }

    /**
     * @param mixed|string $cp_ent
     */
    public function setCpEnt(mixed $cp_ent): void
    {
        $this->cp_ent = $cp_ent;
    }

    /**
     * @return mixed|string
     */
    public function getVilEnt(): mixed
    {
        return $this->vil_ent;
    }

    /**
     * @param mixed|string $vil_ent
     */
    public function setVilEnt(mixed $vil_ent): void
    {
        $this->vil_ent = $vil_ent;
    }

    /**
     * @return mixed|string
     */
    public function getNomEnt(): mixed
    {
        return $this->nom_ent;
    }

    /**
     * @param mixed|string $nom_ent
     */
    public function setNomEnt(mixed $nom_ent): void
    {
        $this->nom_ent = $nom_ent;
    }

    /**
     * @return mixed|string
     */
    public function getNomMaiApp(): mixed
    {
        return $this->nom_mai_app;
    }

    /**
     * @param mixed|string $nom_mai_app
     */
    public function setNomMaiApp(mixed $nom_mai_app): void
    {
        $this->nom_mai_app = $nom_mai_app;
    }

    /**
     * @return mixed|string
     */
    public function getPreMaiApp(): mixed
    {
        return $this->pre_mai_app;
    }

    /**
     * @param mixed|string $pre_mai_app
     */
    public function setPreMaiApp(mixed $pre_mai_app): void
    {
        $this->pre_mai_app = $pre_mai_app;
    }

    /**
     * @return mixed|string
     */
    public function getTelApp(): mixed
    {
        return $this->tel_app;
    }

    /**
     * @param mixed|string $tel_app
     */
    public function setTelApp(mixed $tel_app): void
    {
        $this->tel_app = $tel_app;
    }

    /**
     * @return mixed|string
     */
    public function getMaiApp(): mixed
    {
        return $this->mai_app;
    }

    /**
     * @param mixed|string $mai_app
     */
    public function setMaiApp(mixed $mai_app): void
    {
        $this->mai_app = $mai_app;
    }




    public function __construct($data)
    {
        $this->id_ent = $data['id_ent'];
        $this->adr_ent = $data['adr_ent'];
        $this->cp_ent = $data['cp_ent'];
        $this->vil_ent = $data['vil_ent'];
        $this->nom_ent= $data['nom_ent'];
        $this->nom_mai_app = $data['nom_mai_app'];
        $this->pre_mai_app = $data['pre_mai_app'];
        $this->tel_app = $data['tel_app'];
        $this->mai_app = $data['mai_app'];
    }

}