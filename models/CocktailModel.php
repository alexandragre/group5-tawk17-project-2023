<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

// Model class for customers-table in database

class CocktailModel{
    public $cocktail_id;
    public $title;
    public $description;
    public $ingredients;
    public $instructions;
    public $image_url;
    public $user_id;
}