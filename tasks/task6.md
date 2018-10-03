Task 6: Create event subscriber for posting new Book
====================================================

Prerequisite
------------
git checkout task5

Goal
----
Create event subscriber for POST /reviews which will update average score for Book reviews

Steps
-----
- Create event subscriber for  POST_WRITE events:
``` php
/**
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => [
                'updateBookReviewAvgRate', EventPriorities::POST_WRITE
            ],
        ];
    }
```

- Ensure method is POST and object is type of Review before implementing logic in event
- Update Book averageReview in POST_WRITE event


More info
---------
- Event subscriber is auto wired, so there is no need to define it as service.
- ApiPlatform event methods have 
 `Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent` object as argument. 
 This class has method `getControllerResult` which returns current object (in this case Review object)

Documentation
---------
- https://api-platform.com/docs/core/events


Solution
--------
`git checkout task6`