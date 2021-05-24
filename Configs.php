<?php
require 'vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseSessionStorage;

session_start();

try {
    ParseClient::initialize('HYCScpeirFRGRGRPTpjYPQVqSvGDHS', null, 'JUG4YRDEDGRGRFRlb3CJJDssDFfdfdUJHY87k');
    ParseClient::setServerURL('https://PARSESERVER.URL/','/');
    ParseClient::setStorage( new ParseSessionStorage());
} catch (Exception $e) {
}

$health = ParseClient::getServerHealth();
if($health['status'] !== 200) {

}

// Website root url
$GLOBALS['WEBSITE_PATH'] = 'http://localhost:8080/';