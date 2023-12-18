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

## Update a Category (PHP)

```php
// Example of updating a record in the "categories" table
$data = ['id' => 1, 'name' => 'Updated Category', 'description' => 'Updated description'];
$result = $categorie->updateCategory($data);

if ($result) {
    echo "Category updated successfully!";
} else {
    echo "Error updating the category.";
}
```
## Delete a Category (PHP)

```php
// Example of deleting a record from the "categories" table
$result = $categorie->deleteCategory(20);

if ($result) {
    echo "Category deleted successfully!";
} else {
    echo "Error deleting the category.";
}

}
```
