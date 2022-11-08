<?php
namespace Entities;

class Bilan{

    private $id_note;
    private $remarque;
    private $date;
    private $note_dossier;
    private $note_ent;
    private $note_oral;
    /**
     * @return mixed
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * @param mixed $remarque
     */
    public function setRemarque($remarque): void
    {
        $this->remarque = $remarque;
    }

    /**
     * @return mixed
     */
    public function getIdNote()
    {
        return $this->id_note;
    }

    /**
     * @return mixed
     */
    public function getNoteOral()
    {
        return $this->note_oral;
    }

    /**
     * @param mixed $note_oral
     */
    public function setNoteOral($note_oral): void
    {
        $this->note_oral = $note_oral;
    }

    /**
     * @return mixed
     */
    public function getNoteEnt()
    {
        return $this->note_ent;
    }

    /**
     * @param mixed $note_ent
     */
    public function setNoteEnt($note_ent): void
    {
        $this->note_ent = $note_ent;
    }

    /**
     * @return mixed
     */
    public function getNoteDossier()
    {
        return $this->note_dossier;
    }

    /**
     * @param mixed $note_dossier
     */
    public function setNoteDossier($note_dossier): void
    {
        $this->note_dossier = $note_dossier;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @param mixed $id_note
     */
    public function setIdNote($id_note): void
    {
        $this->id_note = $id_note;
    }

    function __construct(?array $datas = null)
    {
        if ($datas !== null) {
            (isset($datas['id_note'])) ? $this->id_note = $datas['id_note'] : $this->getid_note(null);
            (isset($datas['remarque'])) ? $this->remarque = $datas['remarque'] : $this->getremarque(null);
            (isset($datas['date'])) ? $this->date = $datas['date'] : $this->getdate(null);
            (isset($datas['note_dossier'])) ? $this->note_dossier = $datas['note_dossier'] : $this->getnote_dossier(null);
            (isset($datas['note_ent'])) ? $this->note_ent = $datas['note_ent'] : $this->getnote_ent(null);
            (isset($datas['note_oral'])) ? $this->note_oral = $datas['note_oral'] : $this->getnote_oral(null);

        }
    }

}