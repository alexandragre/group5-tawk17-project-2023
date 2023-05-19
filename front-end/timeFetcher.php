<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

function getDayOfWeek() {

$currentDate = date('Y-M-D');

$base_url = 'https://timeapi.io/api/Conversion/DayOfTheWeek/{date}' . $currentDate;

$response = file_get_contents($base_url);
$data = json_decode($response, true);

// Check if the response was successful
if ($data['statusCode'] === 200) {
    // Access the day of the week from the response
    $date = $data['data'];

    // Display the day of the week
    echo "$date";
} else {
    // Display an error message
    echo "Error: Failed to retrieve data from the API.";
}

}
?>