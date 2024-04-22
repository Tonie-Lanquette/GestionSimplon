<?php

namespace src\Models;

use src\Services\Hydratation;

class User
{
    private $IdUser;
    private $Nom;
    private $Prenom;
    private $Password;
    private $Mail;

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
     * Get the value of Prenom
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     */
    public function setPrenom($Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of Password
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set the value of Password
     */
    public function setPassword($Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * Get the value of Mail
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * Set the value of Mail
     */
    public function setMail($Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }
}
