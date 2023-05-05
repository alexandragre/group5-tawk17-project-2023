<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

// Use "require_once" to load the files needed for the class

require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/../models/CocktailModel.php";

class CocktailsDatabase extends Database
{
    private $table_name = "cocktails";
    private $id_name = "cocktails_id";

    // Get one customer by using the inherited function getOneRowByIdFromTable
    public function getOne($cocktail_id)
    {
        $result = $this->getOneRowByIdFromTable($this->table_name, $this->id_name, $cocktail_id);

        $cocktail = $result->fetch_object("CocktailModel");

        return $cocktail;
    }


    // Get all customers by using the inherited function getAllRowsFromTable
    public function getAll()
    {
        $result = $this->getAllRowsFromTable($this->table_name);

        $cocktails = [];

        while ($cocktail = $result->fetch_object("CocktailModel")) {
            $cocktails[] = $cocktail;
        }

        return $cocktails;
    }

    // Create one by creating a query and using the inherited $this->conn 
    public function insert(CocktailModel $cocktail)
    {
        $query = "INSERT INTO cocktails (title, description, ingredients, instructions, image_url) VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("sssss", $cocktail->title, $cocktail->description, $cocktail->ingredients, $cocktail->instructions, $cocktail->image_url);

        $success = $stmt->execute();

        return $success;
    }

    // Update one by creating a query and using the inherited $this->conn 
    public function updateById($cocktail_id, CocktailModel $cocktail)
    {
        $query = "UPDATE cocktails SET title=?, description=?, ingredients=?, instructions=?, image_url=? WHERE cocktail_id=?;";

        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("sssssi", $cocktail->title, $cocktail->description, $cocktail->ingredients, $cocktail->instructions, $cocktail->image_url, $cocktail_id);

        $success = $stmt->execute();

        return $success;
    }

    // Delete one customer by using the inherited function deleteOneRowByIdFromTable
    public function deleteById($cocktail_id)
    {
        $success = $this->deleteOneRowByIdFromTable($this->table_name, $this->id_name, $cocktail_id);

        return $success;
    }
}