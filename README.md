Article Class
The Article class represents a piece of writing for publication. It provides functionality to interact with article data in a database.

Properties
id: Unique identifier for the article.
title: The title of the article.
content: The content of the article.
published_at: The publication date and time of the article.
errors: Validation errors, if any.
Methods
getAll($conn): Retrieve all article records from the database.
getByID($conn, $id, $columns = '*'): Retrieve an article record by its ID.
update($conn): Update the article with current property values.
validate(): Validate the article properties.
delete($conn): Delete the current article from the database.
create($conn): Insert a new article with current property values into the database.
Usage
Include the Article class in your PHP script.
Establish a connection to your database.
Use class methods to perform CRUD operations on articles.
