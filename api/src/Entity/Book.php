<?php

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;

class Book
{
    private $id;

    /**
     * @Groups({"book:read", "book:write"})
     */
    private $isbn;

    /**
     * @Groups({"book:read", "book:write", "book:read-collection"})
     */
    private $title;

    /**
     * @Groups({"book:read", "book:write"})
     */
    private $abstract;

    /**
     * @Groups({"book:read", "book:write", "book:read-collection"})
     */
    private $publicationDate;

    /**
     * @Groups({"book:read"})
     */
    private $averageReviewRate = 0;

    /**
     * @Groups({"book:read", "book:write", "book:read-collection"})
     */
    private $author;

    private $reviews;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

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

    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function setReviews(Collection $reviews): void
    {
        $this->reviews = $reviews;
    }
}
