<?php

namespace core;

use JetBrains\PhpStorm\NoReturn;
use LogicException;

trait TSingleton
{
    private function __construct()
    {
        static $hasInstance = false;

        if ($hasInstance) {
            \trigger_error('Class is already instantiated', \E_USER_ERROR);
        }

        $hasInstance = true;
    }

    #[NoReturn] private function __clone(): void
    {
        \trigger_error('Class could not be cloned', \E_USER_ERROR);
    }

    public static function getInstance(): static
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}