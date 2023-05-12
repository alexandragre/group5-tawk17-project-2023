<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

require_once __DIR__ . "/../ControllerBase.php";
require_once __DIR__ . "/../../business-logic/CocktailsService.php";

// Class for handling requests to "home/Customer"

class CocktailsController extends ControllerBase
{

    public function handleRequest()
    {

        // Check for POST method before checking any of the GET-routes
        if ($this->method == "POST") {
            $this->handlePost();
        }



        // Path count is 2 meaning the current URL must be "/home/customers"
        // Load start page for customers
        if ($this->path_count == 2) {
            $this->showAll();
        }

        // Path count is 3 meaning the current URL must be "/home/customers/{SOMETHING}"
        // if {SOMETHING} id "new" we want to show the form for creating a customer
        else if ($this->path_count == 3 && $this->path_parts[2] == "new") {
            $this->showNewCocktailForm();
        }

        // Path count is 3 meaning the current URL must be "/home/customers/{SOMETHING}"
        // {SOMETHING} is probably the customer_id
        else if ($this->path_count == 3) {
            $this->showOne();
        }


        // Path count is 4 meaning the current URL must be "/home/customers/{SOMETHING1}/{SOMETHING2}"
        // {SOMETHING1} is probably the customer_id
        // if {SOMETHING2} is "edit" we will show the edit form
        else if ($this->path_count == 4 && $this->path_parts[3] == "edit") {
            $this->showEditForm();
        }

        // Show "404 not found" if the path is invalid
        else {
            $this->notFound();
        }
    }



    // Gets all customers and shows them in the index view
    private function showAll()
    {
       $this->requireAuth(); 

       if ($this->user->user_setting === "admin") {
           $cocktails = CocktailsService::getAllCocktails();
       } else {
           $cocktails = CocktailsService::getCocktailsByUser($this->user->user_id);
       }


        // $this->model is used for sending data to the view
        $this->model = $cocktails;

        $this->viewPage("cocktails/index");
    }



    // Gets one customer and shows the in the single customer-view
    private function showOne()
    {
       
        // Get the customer with the ID from the URL
        $cocktail = $this->getCocktail();

        // $this->model is used for sending data to the view
        $this->model = $cocktail;

        // Shows the view file customers/single.php
        $this->viewPage("cocktails/single");
    }



    // Gets one customer and shows the in the edit customer-view
    private function showEditForm()
    {
        $this->requireAuth(["admin"]); 
        // Get the customer with the ID from the URL
        $cocktail = $this->getCocktail();

        // $this->model is used for sending data to the view
        $this->model = $cocktail;

        // Shows the view file customers/edit.php
        $this->viewPage("cocktails/edit");
    }



    // Gets one customer and shows the in the edit customer-view
    private function showNewCocktailForm()
    {
        $this->requireAuth(); 
        // Shows the view file customers/new.php
        $this->viewPage("cocktails/new");
    }



    // Gets one customer based on the id in the url
    private function getCocktail()
    {
        $this->requireAuth(); 

        // Get the customer with the specified ID
        $id = $this->path_parts[2];

        $cocktail = CocktailsService::getCocktailById($id);

        // Show not found if customer doesn't exist
        if (!$cocktail) {
            $this->notFound();
        }
        if ($this->user->user_setting !== "admin" && $cocktail->user_id !== $this->user_id){
            $this->forbidden();
        }

        return $cocktail;
    }


    // handle all post requests for customers in one place
    private function handlePost()
    {
        // Path count is 2 meaning the current URL must be "/home/customers"
        // Create a customer
        if ($this->path_count == 2) {
            $this->createCocktail();
        }

        // Path count is 4 meaning the current URL must be "/home/customers/{SOMETHING1}/{SOMETHING2}"
        // {SOMETHING1} is probably the customer_id
        // if {SOMETHING2} is "edit" we will update the user
        else if ($this->path_count == 4 && $this->path_parts[3] == "edit") {
            $this->updateCocktail();
        }

        // Path count is 4 meaning the current URL must be "/home/customers/{SOMETHING1}/{SOMETHING2}"
        // {SOMETHING1} is probably the customer_id
        // if {SOMETHING2} is "edit" we will show the edit form
        else if ($this->path_count == 4 && $this->path_parts[3] == "delete") {
            $this->deleteCocktail();
        }

        // Show "404 not found" if the path is invalid
        else {
            $this->notFound();
        }
    }


    // Create a user with data from the URL and body
    private function createCocktail()
    {
        $this->requireAuth(); 

        $cocktail = new CocktailModel();

        // Get updated properties from the body
        $cocktail->title = $this->body["title"];
        $cocktail->description = $this->body["description"];
        $cocktail->ingredients = $this->body["ingredients"];
        $cocktail->instructions = $this->body["instructions"];
        $cocktail->image_url = $this->body["image_url"];

        if ($this->user->user_setting === "admin") {
            $cocktail->user_id = $this->body["user_id"];
        }

        else{
            $cocktail->user_id = $this->user->user_id;
        }

        // Save the customer
        $success = CocktailsService::saveCocktail ($cocktail);

        // Redirect or show error based on response from business logic layer
        if ($success) {
            $this->redirect($this->home . "/cocktails");
        } else {
            $this->error();
        }
    }


    // Update a user with data from the URL and body
    private function updateCocktail()
    {   
        $this->requireAuth(["admin"]); 
        $cocktail = new CocktailModel();

        // Get ID from the URL
        $id = $this->path_parts[2];

        $existing_cocktail = CocktailsService::getCocktailById($id);

        // Get updated properties from the body
        $cocktail->title = $this->body["title"];
        $cocktail->description = $this->body["description"];
        $cocktail->ingredients = $this->body["ingredients"];
        $cocktail->instructions = $this->body["instructions"];
        $cocktail->image_url = $this->body["image_url"];


        // Update the customer
        $success = CocktailsService::updateCocktailById($id, $cocktail);

        // Redirect or show error based on response from business logic layer
        if ($success) {
            $this->redirect($this->home . "/cocktails");
        } else {
            $this->error();
        }
    }


    // Delete a user with data from the URL
    private function deleteCocktail()
    {
        $this->requireAuth(["admin"]); 

        // Get ID from the URL
        $id = $this->path_parts[2];

        // Delete the customer
        $success = CocktailsService::deleteCocktailById($id);

        // Redirect or show error based on response from business logic layer
        if ($success) {
            $this->redirect($this->home . "/cocktails");
        } else {
            $this->error();
        }
    }
}