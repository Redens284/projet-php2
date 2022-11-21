<?php
namespace DTO;

class etudiant extends utilisateur
{

    private  $classe_etu;
    private  $spec_etu;
    private $nom_ent;
    private $adresse_ent;


    /**
     * @return mixed
     */
    public function getSpecEtu()
    {
        return $this->spec_etu;
    }

    /**
     * @return mixed
     */
    public function getNomEnt()
    {
        return $this->nom_ent;
    }

    /**
     * @param mixed $nom_ent
     */
    public function setNomEnt($nom_ent): void
    {
        $this->nom_ent = $nom_ent;
    }

    /**
     * @param mixed $spec_etu
     */
    public function setSpecEtu($spec_etu): void
    {
        $this->spec_etu = $spec_etu;
    }

    /**
     * @return mixed
     */
    public function getAdresseEnt()
    {
        return $this->adresse_ent;
    }

    /**
     * @param mixed $adresse_ent
     */
    public function setAdresseEnt($adresse_ent): void
    {
        $this->adresse_ent = $adresse_ent;
    }

    /**
     * @return mixed
     */
    public function getClasseEtu()
    {
        return $this->classe_etu;
    }

    /**
     * @param mixed $classe_etu
     */
    public function setClasseEtu($classe_etu): void
    {
        $this->classe_etu = $classe_etu;
    }



    function __construct(?array $datas = null)
    {
        if ($datas !== null) {
            (isset($datas['class_etu'])) ? $this->class_etu = $datas['class_etu'] : $this->getclass_etu(null);
            (isset($datas['spec_etu'])) ? $this->spec_etu = $datas['spec_etu'] : $this->getspec_etu(null);
            (isset($datas['nom_ent'])) ? $this->nom_ent = $datas['nom_ent'] : $this->getnom_ent(null);
            (isset($datas['adresse_ent'])) ? $this->adresse_ent = $datas['adresse_ent'] : $this->getadresse_ent(null);
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