<?php
require_once __DIR__ . "/../Template.php";

Template::header("New Cocktail");
?>

<?php

// Get post data
$title = $_POST["title"];
$description = $_POST["description"];
$ingredients = $_POST["ingredients"];
$instructions = $_POST["instructions"];
$image_url = $_POST["image_url"];

// Skickar data till Databasen 
$query = "INSERT INTO cocktails (title, description, ingredients, instructions, image_url) VALUES (?, ?, ?, ?, ?)"; // Create the query (command) for the database
$stmt = $conn->prepare($query); // Prepare the query for execution
$stmt->bind_param("ssssi", $title, $description, $ingredients, $instructions, $image_url); // Add values to query

$success = $stmt->execute(); // Execute command / query

// Redirect user to index.php
if($success){
    header("location: template.php");
}
else{
    echo "Error";
}

?>
