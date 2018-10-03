Task 1: Create your first CRUD
=============================

Goal
----
Create CRUD api endpoints for Book, Author and Review entity.

Steps
-----
- Create Book, Author and Review entites (xml mapping, php classes)
- Create `resources.yml` file in `api/config/packages/api_platform`
- Add Book, Author and Review entities to `api/config/packages/api_platform/resources.yml`
- Import fixtures with following command: `docker-compose exec php bin/console fixtures:load --no-interaction`
- Open [http://localhost:8090](http://localhost:8090) in your browser and test endpoints in sandbox
- Open [http://localhost:90](http://localhost:90) in your browser and test endpoints in Admin

Extra credit
------------
- Use http://schema.org/Person for Author resource.

More info
---------
You can also use xml or annotations for defining resources.

**Documentation:** https://api-platform.com/docs/core/getting-started#mapping-the-entities

Solution
--------
`git checkout task1`