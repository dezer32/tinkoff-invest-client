<?php

use Symfony\Component\Dotenv\Dotenv;

include_once __DIR__ . '/../vendor/autoload.php';
if (!isset($_SERVER['APP_ENV']) && $_ENV['APP_ENV'] === 'testing') {
    if (!class_exists(Dotenv::class)) {
        throw new \RuntimeException(
            'APP_ENV environment variable is not defined. You need to define environment variables for configuration or add "symfony/dotenv" as a Composer dependency to load variables from a .env file.'
        );
    }
    (new Dotenv())->loadEnv(__DIR__ . '/../.env');
}
