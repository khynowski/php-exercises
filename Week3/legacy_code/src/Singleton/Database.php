<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Singleton;

class Database 
{
    private static $instance = null;

    private function __construct() {}

    public static function getInstance(): Database
    {
        if (self::$instance === NULL)
        {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}