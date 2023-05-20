<?php 

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

require_once __DIR__ . "/../date-data-access/DateFetcher.php";

class DateService{

    // Fetches date from the API
    public static function getTime(){
        $date_fetcher = new DateFetcher();

        $date = $date_fetcher->fetchDate();

        return $date;
    }

}