<?php
namespace Entities;

class Tuteur extends Utilisateur
{

    private $mesEtudiants;

    /**
     * @return mixed
     */
    public function getMesEtudiants()
    {
        return $this->mesEtudiants;
    }

    /**
     * @param mixed $mesEtudiants
     */
    public function setMesEtudiants($mesEtudiants): void
    {
        $this->mesEtudiants = $mesEtudiants;
    }
    function __construct(?array $datas = null)
    {
        if ($datas !== null) {
            (isset($datas['mesEtud'])) ? $this->mesEtud = $datas['mesEtud'] : $this->getmesEtud(null);
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