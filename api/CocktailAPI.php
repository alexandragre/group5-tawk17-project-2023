<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

require_once __DIR__ . "/../RestAPI.php";
require_once __DIR__ . "/../business-logic/CocktailsService.php";

// Class for handling requests to "api/Customer"

class CocktailAPI extends RestAPI
{

    // Handles the request by calling the appropriate member function
    public function handleRequest()
    {
        
        
        // If theres two parts in the path and the request method is GET 
        // it means that the client is requesting "api/Customers" and
        // we should respond by returning a list of all customers 
        if ($this->method == "GET" && $this->path_count == 2) {
            $this->getAll();
        } 

        // If there's three parts in the path and the request method is GET
        // it means that the client is requesting "api/Customers/{something}".
        // In our API the last part ({something}) should contain the ID of a 
        // customer and we should respond with the customer of that ID
        else if ($this->path_count == 3 && $this->method == "GET") {
            $this->getById($this->path_parts[2]);
        }

        // If theres two parts in the path and the request method is POST 
        // it means that the client is requesting "api/Customers" and we
        // should get ths contents of the body and create a customer.
        else if ($this->path_count == 2 && $this->method == "POST") {
            $this->postOne();
        }

        // If theres two parts in the path and the request method is PUT 
        // it means that the client is requesting "api/Customers/{something}" and we
        // should get the contents of the body and update the customer.
        else if ($this->path_count == 3 && $this->method == "PUT") {
            $this->putOne($this->path_parts[2]);
        } 

        // If theres two parts in the path and the request method is DELETE 
        // it means that the client is requesting "api/Customers/{something}" and we
        // should get the ID from the URL and delete that customer.
        else if ($this->path_count == 3 && $this->method == "DELETE") {
            $this->deleteOne($this->path_parts[2]);
        } 
        
        // If none of our ifs are true, we should respond with "not found"
        else {
            $this->notFound();
        }
    }

    // Gets all customers and sends them to the client as JSON
    private function getAll()
    {
        $cocktail = CocktailsService::getAllCocktails();

        $this->sendJson($cocktail);
    }

    // Gets one and sends it to the client as JSON
    private function getById($id)
    {
        $cocktail = CocktailsService::getCocktailById($id);

        if ($cocktail) {
            $this->sendJson($cocktail);
        }
        else {
            $this->notFound();
        }
    }

    // Gets the contents of the body and saves it as a customer by 
    // inserting it in the database.
    private function postOne()
    {
        $cocktail = new CocktailModel();

        $cocktail->cocktail_id = $this->body["cocktail_id"];
        $cocktail->title = $this->body["title"];
        $cocktail->description = $this->body["description"];
        $cocktail->ingredients = $this->body["ingredients"];
        $cocktail->instructions = $this->body["instructions"];
        $cocktail->image_url = $this->body["image"];

        $success = CocktailsService::saveCocktail($cocktail);

        if($success){
            $this->created();
        }
        else{
            $this->error();
        }
    }

    // Gets the contents of the body and updates the customer
    // by sending it to the DB
    private function putOne($id)
    {
        $cocktail = new CocktailModel();
        
        $cocktail->cocktail_id = $this->body["cocktail_id"];
        $cocktail->title = $this->body["title"];
        $cocktail->description = $this->body["description"];
        $cocktail->ingredients = $this->body["ingredients"];
        $cocktail->instructions = $this->body["instructions"];
        $cocktail->image_url = $this->body["image"];

        $success = CocktailsService::updateCocktailById($id, $cocktail);

        if($success){
            $this->ok();
        }
        else{
            $this->error();
        }
    }

    // Deletes the customer with the specified ID in the DB
    private function deleteOne($id)
    {
        $cocktail = CocktailsService::getCocktailById($id);

        if($cocktail == null){
            $this->notFound();
        }

        $success = CocktailsService::deleteCocktailById($id);

        if($success){
            $this->noContent();
        }
        else{
            $this->error();
        }
    }
}