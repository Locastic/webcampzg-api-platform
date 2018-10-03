<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Author
{
    private $id;

    private $firstname;

    private $lastname;

    private $birthday;

    private $books;

    public function __construct()
    {
        $this->books = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getBirthday(): \DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTime $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getBooks(): ArrayCollection
    {
        return $this->books;
    }

    public function setBooks(ArrayCollection $books): void
    {
        $this->books = $books;
    }
}
