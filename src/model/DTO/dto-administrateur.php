<?php
namespace DTO;
class administrateur
{
private int $id_uti;
private string $nom_uti;
private string $prenom_uti;
private string $login_uti;
private string $mdp_uti;
private string $mail_uti;
private int $tel_uti;

    /**
     * @param int $id_uti
     * @param string $nom_uti
     * @param string $prenom_uti
     * @param string $login_uti
     * @param string $mdp_uti
     * @param string $mail_uti
     * @param int $tel_uti
     */
    public function __construct($data)
    {
        $this->id_uti = $data['id_uti'];
        $this->nom_uti = $data['nom_uti'];
        $this->prenom_uti = $data['prenom_uti'];
        $this->login_uti = $data['login_uti'];
        $this->mdp_uti = $data['mdp_uti'];
        $this->mail_uti = $data['mail_uti'];
        $this->tel_uti = $data['tel_uti'];
    }


    /**
     * @return int
     */
    public function getIdUti(): int
    {
        return $this->id_uti;
    }

    /**
     * @param int $id_uti
     */
    public function setIdUti(int $id_uti): void
    {
        $this->id_uti = $id_uti;
    }

    /**
     * @return string
     */
    public function getNomUti(): string
    {
        return $this->nom_uti;
    }

    /**
     * @param string $nom_uti
     */
    public function setNomUti(string $nom_uti): void
    {
        $this->nom_uti = $nom_uti;
    }

    /**
     * @return string
     */
    public function getPrenomUti(): string
    {
        return $this->prenom_uti;
    }

    /**
     * @param string $prenom_uti
     */
    public function setPrenomUti(string $prenom_uti): void
    {
        $this->prenom_uti = $prenom_uti;
    }

    /**
     * @return string
     */
    public function getLoginUti(): string
    {
        return $this->login_uti;
    }

    /**
     * @param string $login_uti
     */
    public function setLoginUti(string $login_uti): void
    {
        $this->login_uti = $login_uti;
    }

    /**
     * @return string
     */
    public function getMdpUti(): string
    {
        return $this->mdp_uti;
    }

    /**
     * @param string $mdp_uti
     */
    public function setMdpUti(string $mdp_uti): void
    {
        $this->mdp_uti = $mdp_uti;
    }

    /**
     * @return string
     */
    public function getMailUti(): string
    {
        return $this->mail_uti;
    }

    /**
     * @param string $mail_uti
     */
    public function setMailUti(string $mail_uti): void
    {
        $this->mail_uti = $mail_uti;
    }

    /**
     * @return int
     */
    public function getTelUti(): int
    {
        return $this->tel_uti;
    }

    /**
     * @param int $tel_uti
     */
    public function setTelUti(int $tel_uti): void
    {
        $this->tel_uti = $tel_uti;
    }


}