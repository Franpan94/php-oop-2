<?php

class products
{
    protected $name;
    protected $type;
    protected $genre;

    public function __construct($_name, $_type, $_genre)
    {

        $this->name = $_name;
        $this->type = $_type;
        $this->genre = $_genre;
    }

    public function getName()
    {

        return $this->name;
    }

    public function setName($_name)
    {

        $this->name = $_name;
    }

    public function getType()
    {

        return $this->type;
    }

    public function setType($_type)
    {

        $this->type = $_type;
    }

    public function getGenre()
    {

        return $this->genre;
    }

    public function setGenre($_genre)
    {

        $this->genre = $_genre;
    }
}
