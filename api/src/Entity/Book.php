<?php

namespace App\Entity;

class Book
{
    private $id;

    private $isbn;

    private $title;

    private $abstract;

    private $publicationDate;

    private $averageReviewRate = 0;

    private $author;

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getAbstract(): string
    {
        return $this->abstract;
    }

    public function setAbstract(string $abstract): void
    {
        $this->abstract = $abstract;
    }

    public function getPublicationDate(): \DateTime
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(\DateTime $publicationDate): void
    {
        $this->publicationDate = $publicationDate;
    }

    public function getAverageReviewRate(): string
    {
        return $this->averageReviewRate;
    }

    public function setAverageReviewRate(string $averageReviewRate): void
    {
        $this->averageReviewRate = $averageReviewRate;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function setAuthor(Author $author): void
    {
        $this->author = $author;
    }
}
