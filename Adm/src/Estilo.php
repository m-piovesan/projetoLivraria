<?php

class Estilo{

    private int $id;
    private String $estilo;


    /**
     * Get the value of estilo
     */ 
    public function getEstilo()
    {
        return $this->estilo;
    }

    /**
     * Set the value of estilo
     *
     * @return  self
     */ 
    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;

        return $this;
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
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}