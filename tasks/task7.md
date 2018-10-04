Task 7: Create event subscriber for adding virtual property to Book item response
====================================================

Prerequisite
------------
git checkout task6

Goal
----
Create event subscriber for GET /reviews/{id} which will add value for ranking book (property: rank). 
If averageReviewRate is < 3 set value to 'not so good', if value is <3 and <4 set value to 'good', and 
if value is >4 set value to 'great'.

Steps
-----
- Add property rank in Book entity, don't map it to database (it is virtual field)
- Create event subscriber for PRE_SERIALIZE event:
``` php
/**
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => [
                'setRank', EventPriorities::PRE_SERIALIZE
            ],
        ];
    }
```

- Ensure method is GET and object is type of Book before implementing logic in event
- Update Book rank value in POST_READ event


More info
---------
- Event subscriber is auto wired, so there is no need to define it as service.
- ApiPlatform event methods have 
 `Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent` object as argument. 
 This class has method `getControllerResult` which returns current object (in this case Book object)

Documentation
---------
- https://api-platform.com/docs/core/events


Solution
--------
`git checkout task7`