<?php

require_once 'Database.php';
require_once 'crud.php';

class Categorie extends crud{
    

}


$categorie = new Categorie();

// Example of creating a new record in the "categories" table
$data = ['name' => 'New Category', 'description' => 'Description of the new category'];
$result = $categorie->executeQuery('categories', 'create', $data);

if ($result) {
    echo "Category added successfully!";
} else {
    echo "Error adding the category.";
}

// Example of reading a record from the "categories" table by ID
$data = ['id' => 1];
$result = $categorie->executeQuery('categories', 'read', $data);
print_r($result);

// Example of updating a record in the "categories" table
$data = ['id' => 1, 'name' => 'Updated Category', 'description' => 'Updated description'];
$result = $categorie->executeQuery('categories', 'update', $data);

if ($result) {
    echo "Category updated successfully!";
} else {
    echo "Error updating the category.";
}

// Example of deleting a record from the "categories" table
$data = ['id' => 1];
$result = $categorie->executeQuery('categories', 'delete', $data);

if ($result) {
    echo "Category deleted successfully!";
} else {
    echo "Error deleting the category.";
}