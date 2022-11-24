<?php
namespace DTO;

class Bilan
{
    private int $id_bil;
    private string $rem_bil;
    private string $date_bil;
    private float $not_dos;
    private float $not_ent;
    private float $not_ora;
    private int $id_etu;

    /**
     * @return string
     */
    public function getRemBil(): string
    {
        return $this->rem_bil;
    }

    /**
     * @param string $rem_bil
     */
    public function setRemBil(string $rem_bil): void
    {
        $this->rem_bil = $rem_bil;
    }

    /**
     * @return string
     */
    public function getDateBil(): string
    {
        return $this->date_bil;
    }

    /**
     * @param string $date_bil
     */
    public function setDateBil(string $date_bil): void
    {
        $this->date_bil = $date_bil;
    }

    /**
     * @return int
     */
    public function getIdBil(): int
    {
        return $this->id_bil;
    }

    /**
     * @return string
     */
    public function getNotDos(): string
    {
        return $this->not_dos;
    }

    /**
     * @param string $not_dos
     */
    public function setNotDos(string $not_dos): void
    {
        $this->not_dos = $not_dos;
    }

    /**
     * @return string
     */
    public function getNotEnt(): string
    {
        return $this->not_ent;
    }

    /**
     * @param string $not_ent
     */
    public function setNotEnt(string $not_ent): void
    {
        $this->not_ent = $not_ent;
    }

    /**
     * @return string
     */
    public function getNotOra(): string
    {
        return $this->not_ora;
    }

    /**
     * @param string $not_ora
     */
    public function setNotOra(string $not_ora): void
    {
        $this->not_ora = $not_ora;
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
     * @param int $id_bil
     */
    public function setIdBil(int $id_bil): void
    {
        $this->id_bil = $id_bil;
    }


    public function __construct($data)
    {
        $this->id_bil = $data['id_bil'];
        $this->rem_bil = $data['rem_bil'];
        $this->date_bil = $data['date_bil'];
        $this->not_dos = $data['not_dos'];
        $this->not_ent = $data['not_ent'];
        $this->not_ora = $data['not_ora'];
        $this->id_etu = $data['id_etu'];
    }
}