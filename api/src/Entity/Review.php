<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

class Review
{
    private $id;

    /**
     * @Groups({"review:read", "review:write"})
     */
    private $author;

    /**
     * @Groups({"review:write", "review:read"})
     */
    private $review;

    /**
     * @Groups({"review:write", "review:read"})
     */
    private $rate;

    /**
     * @Groups({"review:read"})
     */
    private $createdAt;

    /**
     * @Groups({"review:write", "review:read"})
     */
    private $book;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getReview(): string
    {
        return $this->review;
    }

    public function setReview(string $review): void
    {
        $this->review = $review;
    }

    public function getRate(): int
    {
        return $this->rate;
    }

    public function setRate(int $rate): void
    {
        $this->rate = $rate;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function setBook(Book $book): void
    {
        $this->book = $book;
    }
}
