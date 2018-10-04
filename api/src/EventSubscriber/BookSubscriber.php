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

final class BookSubscriber implements EventSubscriberInterface
{
    private $entityManager;

    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::VIEW => ['setBookRank', EventPriorities::PRE_SERIALIZE],
        ];
    }

    public function setBookRank(GetResponseForControllerResultEvent $event): void
    {
        $book = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if (!$book instanceof Book || Request::METHOD_GET !== $method) {
            return;
        }

        $book->setRank($this->calculateRank($book));
    }

    private function calculateRank(Book $book): string
    {
        if ($book->getAverageReviewRate() < 3) {
            return 'not so good';
        }

        if ($book->getAverageReviewRate() < 4) {
            return 'good';
        }

        return 'great';
    }
}