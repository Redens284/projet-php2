<?php
namespace DTO;

class Responsable
{


    /**
     * @return int|mixed
     */
    public function getIdRes(): mixed
    {
        return $this->id_res;
    }

    /**
     * @param int|mixed $id_res
     */
    public function setIdRes(mixed $id_res): void
    {
        $this->id_res = $id_res;
    }

    /**
     * @return string
     */
    public function getNomRes(): string
    {
        return $this->nom_res;
    }

    /**
     * @param string $nom_res
     */
    public function setNomRes(string $nom_res): void
    {
        $this->nom_res = $nom_res;
    }

    /**
     * @return string
     */
    public function getPreRes(): string
    {
        return $this->pre_res;
    }

    /**
     * @param string $pre_res
     */
    public function setPreRes(string $pre_res): void
    {
        $this->pre_res = $pre_res;
    }

    /**
     * @return string
     */
    public function getTelRes(): string
    {
        return $this->tel_res;
    }

    /**
     * @param string $tel_res
     */
    public function setTelRes(string $tel_res): void
    {
        $this->tel_res = $tel_res;
    }

    /**
     * @return string
     */
    public function getMaiRes(): string
    {
        return $this->mai_res;
    }

    /**
     * @param string $mai_res
     */
    public function setMaiRes(string $mai_res): void
    {
        $this->mai_res = $mai_res;
    }

    /**
     * @return int
     */
    public function getNbRes(): int
    {
        return $this->nb_res;
    }

    /**
     * @param int $nb_res
     */
    public function setNbRes(int $nb_res): void
    {
        $this->nb_res = $nb_res;
    }

    /**
     * @return string
     */
    public function getLogRes(): string
    {
        return $this->log_res;
    }

    /**
     * @param string $log_res
     */
    public function setLogRes(string $log_res): void
    {
        $this->log_res = $log_res;
    }

    /**
     * @return string
     */
    public function getMdpRes(): string
    {
        return $this->mdp_res;
    }

    /**
     * @param string $mdp_res
     */
    public function setMdpRes(string $mdp_res): void
    {
        $this->mdp_res = $mdp_res;
    }

    /**
     * @return string
     */
    public function getLibRes(): string
    {
        return $this->lib_res;
    }

    /**
     * @param string $lib_res
     */
    public function setLibRes(string $lib_res): void
    {
        $this->lib_res = $lib_res;
    }

    /**
     * @return int
     */
    public function getIdPro(): int
    {
        return $this->id_pro;
    }

    /**
     * @param int $id_pro
     */
    public function setIdPro(int $id_pro): void
    {
        $this->id_pro = $id_pro;
    }

    private int $id_res;
    private string $nom_res;
    private string $pre_res;
    private string $tel_res;
    private string $mai_res;
    private int $nb_res;
    private string $log_res;
    private string $mdp_res;
    private string $lib_res;
    private int $id_pro;


    public function __construct($data)
    {
        $this->id_res = $data['id_res'];
        $this->nom_res = $data['nom_res'];
        $this->pre_res = $data['pre_res'];
        $this->tel_res = $data['tel_res'];
        $this->mai_res = $data['mai_res'];
        $this->nb_res = $data['nb_res'];
        $this->log_res = $data['log_res'];
        $this->mdp_res = $data['mdp_res'];
        $this->lib_res = $data['lib_res'];
        $this->id_pro = $data['id_pro'];

    }
}