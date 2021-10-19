<?php

// Keep database credentials in a separate file
// 1. Easy to exclude this file from source code managers
// 2. Unique credentials on development and production servers
// 3. Unique credentials if working with multiple developers

// Development
define("DB_SERVER", "localhost");
define("DB_USER", "chain_gang");
define("DB_PASS", "");
define("DB_NAME", "chain_gang");

// The Host
// define("DB_SERVER", "mi3-ss64.a2hosting.com");
// define("DB_USER", "joshuaat_birdQueris");
// define("DB_PASS", "birdQueris");
// define("DB_NAME", "joshuaat_birdQueris");
?>
