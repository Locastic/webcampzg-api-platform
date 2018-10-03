Task 4: Add serialization & deserialization groups
==================================================

Prerequisite
------------
git checkout task4

Goal
----
- Field createdAt for Review should not be writable

- Field averageReviewRate in Book should not be writable

- Fields that need to be exposed for GET Book collection operation:
    `title`, `publishingDate`, `author.firstname`, `author.lastname`

- Fields that need to be exposed for GET Book item operation:
    `title`, `isbn`, `publishingDate`, `averageReviewRate`, `description`, `author.firstname`, `author.lastname`

Steps
-----
- Define normalization and denormalization context groups in `config/packages/api_platform/` 
config for Author, Book and Review entity.
- Add groups for each field in Author, Book and Review entity using serialization group annotations

Extra credit
------------
- Disable DELETE action for Review

More info
---------
API Platform Core allows to choose which attributes of the resource are exposed during
the normalization (read) and denormalization (write) process. It relies on the serialization
(and deserialization) groups feature of the Symfony Serializer component.

Documentation
---------
https://api-platform.com/docs/core/serialization

Solution
--------
`git checkout task5`