<?php

declare(strict_types=1);

namespace src;

class Api
{
    public function __construct()
    {
    }

    public function run(): void
    {
        dump(__METHOD__);

        dump('Hello, World! | PHP Version: ' . PHP_VERSION);
    }
}
