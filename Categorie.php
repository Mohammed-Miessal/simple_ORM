<?php

require_once 'crud.php';

class Categorie {

    private $crud;

    public function __construct() {
        $this->crud = new crud();
    }

    public function createCategory($data) {
        return $this->crud->executeQuery('categories', 'create', $data);
    }

    public function readCategory($id) {
        return $this->crud->executeQuery('categories', 'read', ['id' => $id]);
    }

    public function updateCategory($data) {
        return $this->crud->executeQuery('categories', 'update', $data);
    }

    public function deleteCategory($id) {
        return $this->crud->executeQuery('categories', 'delete', ['id' => $id]);
    }

}


// Usage example:

$categorie = new Categorie();
var_dump($categorie);

// // Example of creating a new record in the "categories" table
// $data = ['name' => 'My Cate', 'description' => 'This is my own Categorie'];
// $result = $categorie->createCategory($data);

//if ($result) {
//    echo "Category added successfully!";
//} else {
//    echo "Error adding the category.";
//}

// // Example of reading a record from the "categories" table by ID
// $result = $categorie->readCategory(1);
// print_r($result);

// // Example of updating a record in the "categories" table
// $data = ['id' => 1, 'name' => 'Updated Category', 'description' => 'Updated description'];
// $result = $categorie->updateCategory($data);

// if ($result) {
//    echo "Category updated successfully!";
// } else {
//    echo "Error updating the category.";
// }

// // Example of deleting a record from the "categories" table
//  $result = $categorie->deleteCategory(20);
//
//if ($result) {
//    echo "Category deleted successfully!";
//} else {
//   echo "Error deleting the category.";
//}