# Database Class

The `Database` class provides a simple interface for establishing a connection to a MySQL database using PDO (PHP Data Objects). The connection details are retrieved from an external `config.php` file.

## Installation

1. Ensure that the `config.php` file is available in the same directory as the `Database` class.

## Usage

### Initialization

```php
// Creating an instance of the Database class
$database = new Database();
```

## Connection Details

The connection details are fetched from the `config.php` file, which should define the following global variables:

- `$host`: The database host.
- `$username`: The database username.
- `$password`: The database password.
- `$database`: The database name.

## Get Database Connection (PHP)

```php
// Get the PDO database connection
$connection = $database->getConnection();
```

## Destructor

The class includes a destructor method to close the database connection when the object is destroyed.

```php
public function __destruct() {
    $this->conn = null;
}

```

## Example Usage (PHP)

```php
// Creating an instance of the Database class
$database = new Database();

// Example of getting the PDO database connection
$connection = $database->getConnection();
```



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
