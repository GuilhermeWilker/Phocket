<?php

namespace app\config\database;

class Connection
{
    private static $connection = null;

    public static function getConnection()
    {
        if (empty(self::$connection)) {
            if (isset($_ENV['DATABASE_HOST']) && isset($_ENV['DATABASE_NAME']) && isset($_ENV['DATABASE_USER']) && isset($_ENV['DATABASE_PASSWORD'])) {
                self::$connection = new \PDO(
                    "mysql:host={$_ENV['DATABASE_HOST']};dbname={$_ENV['DATABASE_NAME']};",
                    $_ENV['DATABASE_USER'],
                    $_ENV['DATABASE_PASSWORD'],
                    [
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                    ]
                );
            } else {
                throw new \Exception('Missing database configuration');
            }
        }

        return self::$connection;
    }
}
