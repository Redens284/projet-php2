<?php
namespace DTO;

class Profil
{
    private int $id_pro;
    private string $lib_pro;

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

    /**
     * @return string
     */
    public function getLibPro(): string
    {
        return $this->lib_pro;
    }

    /**
     * @param string $lib_pro
     */
    public function setLibPro(string $lib_pro): void
    {
        $this->lib_pro = $lib_pro;
    }



    public function __construct($data)
    {
        $this->id_pro = $data['id_pro'];
        $this->lib_pro = $data['lib_pro'];

    }
}
