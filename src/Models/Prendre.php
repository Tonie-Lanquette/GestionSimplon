<?php

namespace src\Models;

use src\Services\Hydratation;

class Prendre
{
    private $IdUser;
    private $Idcours;
    private $Absence;
    private $Retard;

    use Hydratation;

    /**
     * Get the value of IdUser
     */
    public function getIdUser()
    {
        return $this->IdUser;
    }

    /**
     * Set the value of IdUser
     */
    public function setIdUser($IdUser): self
    {
        $this->IdUser = $IdUser;

        return $this;
    }

    /**
     * Get the value of Idcours
     */
    public function getIdcours()
    {
        return $this->Idcours;
    }

    /**
     * Set the value of Idcours
     */
    public function setIdcours($Idcours): self
    {
        $this->Idcours = $Idcours;

        return $this;
    }

    /**
     * Get the value of Absence
     */
    public function getAbsence()
    {
        return $this->Absence;
    }

    /**
     * Set the value of Absence
     */
    public function setAbsence($Absence): self
    {
        $this->Absence = $Absence;

        return $this;
    }

    /**
     * Get the value of Retard
     */
    public function getRetard()
    {
        return $this->Retard;
    }

    /**
     * Set the value of Retard
     */
    public function setRetard($Retard): self
    {
        $this->Retard = $Retard;

        return $this;
    }
}
