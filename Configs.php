<?php
require 'vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseSessionStorage;

session_start();

try {
    ParseClient::initialize('PzVaajhHDtqjW52nDC08ETFFmJ94G4mo3gTjKhww', 'B2IsSWRFxgWMrHxx0nHp54CTt6xf0fHnp1tCIY8D', 'laiUycgscH7vyoqFHOCbG2lG7uMemIQOmRReVy1a');
    ParseClient::setServerURL('https://parseapi.back4app.com/','/');
    ParseClient::setStorage( new ParseSessionStorage());
} catch (Exception $e) {
}

$health = ParseClient::getServerHealth();
if($health['status'] !== 200) {

}

// Website root url
$GLOBALS['WEBSITE_PATH'] = '/';