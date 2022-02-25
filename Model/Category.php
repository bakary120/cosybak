<?php
class category
{
    private $id;
    private $name;
    private $subtitle;
    private $picture;

    public function __construct($id, $name, $subtitle, $picture )
    {
       $this->id = $id;
       $this->name = $name; 
       $this->subtitle = $subtitle; 
       $this->picture = $picture; 
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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     */
    public function setSubtitle($subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     */
    public function setPicture($picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}