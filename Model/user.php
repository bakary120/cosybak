<?php

class user
{

    private $id;
    private $lastname;
    private $firstname;
    private $numero;
    private $email;
    private $password;
    private $adress;
    private $codepostal;
    private $ville;
    

    public function __construct($id,$lastname, $firstname, $numero, $email, $password, $adress, $codepostal, $ville)
    {
        $this->id = $id;
        $this->lastname = $lastname;
        $this->firstname = $firstname;        
        $this->numero = $numero;        
        $this->email = $email;
        $this->password = $password;
        $this->adress = $adress;
        $this->codepostal = $codepostal;
        $this->ville = $ville;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     */
    public function setLastname($lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     */
    public function setFirstname($firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of adress
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     */
    public function setAdress($adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of codepostal
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set the value of codepostal
     */
    public function setCodepostal($codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     */
    public function setVille($ville): self
    {
        $this->ville = $ville;

        return $this;
    }
}

   