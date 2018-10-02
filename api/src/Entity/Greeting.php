<?php

namespace App\Entity;

class Greeting
{
    private $id;

    public $name = '';

    public function getId(): int
    {
        return $this->id;
    }
}
