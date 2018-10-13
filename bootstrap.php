<?php

/***
 * Bootstrap File
 * @author Htroy-Mod
 */

use App\Services\Boot;

//  BASE_PATH
define('BASE_PATH', __DIR__);
define('VERSION', '20181014');

// Vendor Autoload
require BASE_PATH.'/vendor/autoload.php';

require BASE_PATH."/config/.config.php";

Boot::loadEnv();
Boot::setDebug();
//Boot::setVersion(VERSION);
// config time zone
Boot::setTimezone();
// Init db
Boot::bootDb();