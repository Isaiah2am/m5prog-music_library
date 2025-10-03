<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$env_array = parse_ini_file(dirname(__DIR__, 1) . '/.env');

/**
 * Definieer een aantal constante met de waardes uit je .env file
 */
define('DB_HOST', isset($env_array['DB_HOST']) ? $env_array['DB_HOST'] : '127.0.0.1');
define('DB_SCHEMA_NAME', isset($env_array['DB_SCHEMA_NAME']) ? $env_array['DB_SCHEMA_NAME'] : 'm5prog');
define('DB_USER', isset($env_array['DB_USER']) ? $env_array['DB_USER'] : 'm5prog_user');
define('DB_PASSWORD', isset($env_array['DB_PASSWORD']) ? $env_array['DB_PASSWORD'] : 'wachtwoord');