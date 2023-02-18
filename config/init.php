<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/my_cms');
define("HELPERS", ROOT . '/vendor/my_cms/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'default');
define("PATH", "http://localhost:8098");
define("ADMIN", "http://localhost:8098/admin");
define("NO_IMAGE_PLACEHOLDER", "uploads/no_img.jpg");

require_once ROOT . "/vendor/autoload.php";