<?php

namespace src\Models;

use src\Services\Hydratation;

class Promo
{
    private $IdPromo;
    private $Eleves;
    private $Nom;
    private $Debut;
    private $Fin;

    use Hydratation;
    

    /**
     * Get the value of IdPromo
     */
    public function getIdPromo()
    {
        return $this->IdPromo;
    }

    /**
     * Set the value of IdPromo
     */
    public function setIdPromo($IdPromo): self
    {
        $this->IdPromo = $IdPromo;

        return $this;
    }

    /**
     * Get the value of Eleves
     */
    public function getEleves()
    {
        return $this->Eleves;
    }

    /**
     * Set the value of Eleves
     */
    public function setEleves($Eleves): self
    {
        $this->Eleves = $Eleves;

        return $this;
    }

    /**
     * Get the value of Nom
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     */
    public function setNom($Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Debut
     */
    public function getDebut()
    {
        return $this->Debut;
    }

    /**
     * Set the value of Debut
     */
    public function setDebut($Debut): self
    {
        $this->Debut = $Debut;

        return $this;
    }

    /**
     * Get the value of Fin
     */
    public function getFin()
    {
        return $this->Fin;
    }

    /**
     * Set the value of Fin
     */
    public function setFin($Fin): self
    {
        $this->Fin = $Fin;

        return $this;
    }
}
