<?php

namespace App\EventSubscriber;

use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\Book;
use App\Entity\Review;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\KernelEvents;

final class ReviewSubscriber implements EventSubscriberInterface
{
    private $entityManager;

    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::VIEW => ['updateBookReviewAvgRate', EventPriorities::POST_WRITE],
        ];
    }

    public function updateBookReviewAvgRate(GetResponseForControllerResultEvent $event): void
    {
        $review = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if (!$review instanceof Review || Request::METHOD_POST !== $method) {
            return;
        }

        $book = $review->getBook();
        $book->setAverageReviewRate($this->calculateAvgRate($book));

        $this->entityManager->persist($book);
        $this->entityManager->flush();
    }

    private function calculateAvgRate(Book $book): float
    {
        $reviews = $book->getReviews();
        $avgRate = 0;

        /** @var Review $review */
        foreach ($reviews as $review) {
            $avgRate += $review->getRate();
        }

        return round($avgRate / $reviews->count(), 2);
    }
}