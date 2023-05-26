<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

class DateFetcher {

    //$currentDate = date("Y-m-d");
    private $base_url = "https://timeapi.io/api/Conversion/DayOfTheYear/";
    
    // Fetches all available currencies from the API
    function fetchDate($YearMonthDay){
        // Construct the URL for the API request using the base URL
        $url = $this->base_url . $YearMonthDay;
      
        // Fetch the data from the API using the constructed URL
        $data = file_get_contents($url);
      
      
        // Return the currency codes to the caller
        return json_decode($data, true);
    }

    public function getSpecficDate()
}

$currentDate = DateService::getDate();

?>