<?php
// Log system integrated
require_once('/src/logger.php');
$logger = new Logger('Main');

// Insert log type info not have error
$logger->insertLog('1', 1, 'User is logged in a main error logger page.');

?>