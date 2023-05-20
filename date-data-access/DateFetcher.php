<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

class DateFetcher {

    $currentDate = date('Y-M-D');
    private $base_url = "https://timeapi.io/api/Conversion/DayOfTheYear/ . $currentDate";
    
    // Fetches all available currencies from the API
    function fetchDate(){
        // Construct the URL for the API request using the base URL
        $url = $this->base_url;
      
        // Fetch the data from the API using the constructed URL
        $data = file_get_contents($url);
      
        // Decode the JSON data
        // The "true" argument to json_decode returns an associative array instead of an object
        $date = json_decode($data, true);
      
        // Return the currency codes to the caller
        return $date;
    }

}

?>