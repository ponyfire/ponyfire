<?php

// Base Path /path/to/ponyfire
defined('BASE_PATH') || define('BASE_PATH', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);

// Base Path /path/to/ponyfire/<app>
defined('APP_PATH') || define('APP_PATH', BASE_PATH . 'app' . DIRECTORY_SEPARATOR);

// Base Path /path/to/ponyfire/<storage>
defined('STORAGE_PATH') || define('STORAGE_PATH', BASE_PATH . 'storage' . DIRECTORY_SEPARATOR);

// Base Path /path/to/ponyfire/<front_controller>
defined('FC_PATH') || define('FC_PATH', BASE_PATH . 'public' . DIRECTORY_SEPARATOR);
