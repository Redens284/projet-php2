<?php
namespace DTO;

class utilisateur
{

    protected  $id_int;
    protected  $nom_uti;
    protected $prenom_uti;
    protected $login_uti;
    protected $tel_uti;
    protected $mdp_uti;
    protected $mail_uti;

    /**
     * @return mixed
     */
    public function getTelUti()
    {
        return $this->tel_uti;
    }

    /**
     * @param mixed $tel_uti
     */
    public function setTelUti($tel_uti): void
    {
        $this->tel_uti = $tel_uti;
    }

    /**
     * @return mixed
     */
    public function getMailUti()
    {
        return $this->mail_uti;
    }

    /**
     * @param mixed $mail_uti
     */
    public function setMailUti($mail_uti): void
    {
        $this->mail_uti = $mail_uti;
    }

    /**
     * @return mixed
     */
    public function getMdpUti()
    {
        return $this->mdp_uti;
    }

    /**
     * @param mixed $mdp_uti
     */
    public function setMdpUti($mdp_uti): void
    {
        $this->mdp_uti = $mdp_uti;
    }

    /**
     * @return mixed
     */
    public function getLoginUti()
    {
        return $this->login_uti;
    }

    /**
     * @param mixed $login_uti
     */
    public function setLoginUti($login_uti): void
    {
        $this->login_uti = $login_uti;
    }

    /**
     * @return mixed
     */
    public function getPrenomUti()
    {
        return $this->prenom_uti;
    }

    /**
     * @param mixed $prenom_uti
     */
    public function setPrenomUti($prenom_uti): void
    {
        $this->prenom_uti = $prenom_uti;
    }


    /**
     * @return mixed
     */
    public function getNomUti()
    {
        return $this->nom_uti;
    }

    /**
     * @param mixed $nom_uti
     */
    public function setNomUti($nom_uti): void
    {
        $this->nom_uti = $nom_uti;
    }

    /**
     * @return mixed
     */
    public function getIdInt()
    {
        return $this->id_int;
    }

    /**
     * @param mixed $id_int
     */
    public function setIdInt($id_int): void
    {
        $this->id_int = $id_int;
    }

    function __construct(?array $datas = null)
    {
        if ($datas !== null) {
            (isset($datas['id_uti'])) ? $this->id_uti = $datas['id_uti'] : $this->getid_uti(null);
            (isset($datas['nom_uti'])) ? $this->nom_uti = $datas['nom_uti'] : $this->getnom_uti(null);
            (isset($datas['prenom_uti'])) ? $this->prenom_uti = $datas['prenom_uti'] : $this->getprenom_uti(null);
            (isset($datas['login_uti'])) ? $this->login_uti = $datas['login_uti'] : $this->getlogin_uti(null);
            (isset($datas['mdp_uti'])) ? $this->mdp_uti = $datas['mdp_uti'] : $this->getmdp_uti(null);
            (isset($datas['mail_uti'])) ? $this->mail_uti = $datas['mail_uti'] : $this->getmail_uti(null);
            (isset($datas['tel_uti'])) ? $this->tel_uti = $datas['tel_uti'] : $this->gettel_uti(null);

        }
    }

}