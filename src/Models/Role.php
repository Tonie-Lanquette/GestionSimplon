<?php

namespace src\Models;

use src\Services\Hydratation;

class Role
{
    private $IdRole;
    private $IdNom;

    use Hydratation;
   

    /**
     * Get the value of IdRole
     */
    public function getIdRole()
    {
        return $this->IdRole;
    }

    /**
     * Set the value of IdRole
     */
    public function setIdRole($IdRole): self
    {
        $this->IdRole = $IdRole;

        return $this;
    }

    /**
     * Get the value of IdNom
     */
    public function getIdNom()
    {
        return $this->IdNom;
    }

    /**
     * Set the value of IdNom
     */
    public function setIdNom($IdNom): self
    {
        $this->IdNom = $IdNom;

        return $this;
    }
}
