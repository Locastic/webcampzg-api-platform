Task 3: Change listing order and create subresources
=============================

Prerequisite
------------
git checkout task2

Goal
----
Usually some resources is "owning" some other resource so in this task we will create 
a subresource of our entities. A subresource is a collection or an item that belongs to another resource. 
The starting point of a subresource must be a relation on an existing resource.

Steps
-----
- Book is 'owning' reviews, create reviews subresource for books (book/{id}/reviews)
- Author is 'owning' books, create books subresource for author (author/{id}/books)
- Sort get /authors by lastname
- Sort get /books by title
- Sort get /reviews by createdAt

Documentation
-----
- https://api-platform.com/docs/core/operations#subresources
- https://api-platform.com/docs/core/default-order

Solution
--------
`git checkout task3`