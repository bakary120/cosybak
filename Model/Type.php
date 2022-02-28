<?php
class Type
{
    private $id;
    private $name;
    private $footer_order;
   

    public function __construct($id, $name, $footer_order)
    {
       $this->id = $id;
       $this->name = $name; 
       $this->color = $footer_order; 
       
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
     * Get the value of footer_order
     */
    public function getFooterOrder()
    {
        return $this->footer_order;
    }

    /**
     * Set the value of footer_order
     */
    public function setFooterOrder($footer_order): self
    {
        $this->footer_order = $footer_order;

        return $this;
    }
}