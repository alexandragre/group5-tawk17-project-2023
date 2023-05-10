<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

require_once __DIR__ . "/../data-access/CocktailsDatabase.php";

class CocktailsService{

    // Get one customer by creating a database object 
    // from data-access layer and calling its getOne function.
    public static function getCocktailById($user_id){
        $cocktails_database = new CocktailsDatabase();

        $cocktail = $cocktails_database->getOne($user_id);

        // If you need to remove or hide data that shouldn't
        // be shown in the API response you can do that here
        // An example of data to hide is users password hash 
        // or other secret/sensitive data that shouldn't be 
        // exposed to users calling the API

        return $cocktails;
    }

    // Get all customers by creating a database object 
    // from data-access layer and calling its getAll function.
    public static function getAllCocktails(){
        $cocktails_database = new CocktailsDatabase();

        $cocktails = $cocktails_database->getAll();

        // If you need to remove or hide data that shouldn't
        // be shown in the API response you can do that here
        // An example of data to hide is users password hash 
        // or other secret/sensitive data that shouldn't be 
        // exposed to users calling the API

        return $cocktails;
    }

    public static function getCocktailsByUser($user_id){
        $cocktails_database = new CocktailsDatabase();

        $cocktails = $cocktails_database->getByUserId($user_id);

        return $purchases;
    }

    // Save a customer to the database by creating a database object 
    // from data-access layer and calling its insert function.
    public static function saveCocktail(CocktailModel $cocktail){
        $cocktails_database = new CocktailsDatabase();

        // If you need to validate data or control what 
        // gets saved to the database you can do that here.
        // This makes sure all input from any presentation
        // layer will be validated and handled the same way.

        $success = $cocktails_database->insert($cocktail);

        return $success;
    }

    // Update the customer in the database by creating a database object 
    // from data-access layer and calling its update function.
    public static function updateCocktailById($cocktail_id, CocktailModel $cocktail){
        $cocktails_database = new CocktailsDatabase();

        // If you need to validate data or control what 
        // gets saved to the database you can do that here.
        // This makes sure all input from any presentation
        // layer will be validated and handled the same way.

        $success = $cocktails_database->updateById($cocktail_id, $cocktail);

        return $success;
    }

    // Delete the customer from the database by creating a database object 
    // from data-access layer and calling its delete function.
    public static function deleteCocktailById($cocktail_id){
        $cocktails_database = new CocktailsDatabase();

        // If you need to validate data or control what 
        // gets deleted from the database you can do that here.
        // This makes sure all input from any presentation
        // layer will be validated and handled the same way.

        $success = $cocktails_database->deleteById($cocktail_id);
        return $success;
    }
}