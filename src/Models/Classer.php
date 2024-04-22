<?php

namespace src\Models;

use src\Services\Hydratation;

class Classer
{
    private $IdUser;
    private $IdRole;
   
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
}
