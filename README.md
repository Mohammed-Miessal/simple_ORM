# Categorie Class

The `Categorie` class provides a simple interface for CRUD operations on the 'categories' table in a database. It utilizes a `crud` object to perform these operations.

## Installation

1. Ensure that the `crud.php` file is present in the same directory as the `Categorie` class.

## Usage

### Initialization

```php
// Creating an instance of the Categorie class
$categorie = new Categorie();
```

## Create a Category (PHP)

```php
// Example of creating a new record in the "categories" table
$data = ['name' => 'My Cate', 'description' => 'This is my own Categorie'];
$result = $categorie->createCategory($data);

if ($result) {
    echo "Category added successfully!";
} else {
    echo "Error adding the category.";
```
## Read a Category (PHP)

```php
// Example of reading a record from the "categories" table by ID
$result = $categorie->readCategory(1);
print_r($result);
```



}
