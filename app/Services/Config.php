<?php
namespace App\Services;
class Config
{
    public static function get($key)
    {
        global $System_Config;
        return $System_Config[$key];
    }
    public static function set($key, $value)
    {
        global $System_Config;
        $System_Config[$key] = $value;
    }
    public static function getPublicConfig()
    {
        return [
            "appName" => self::get("appName"),
            "baseUrl" => self::get("baseUrl"),
            "jump_delay" => self::get("jump_delay")
        ];
    }
    public static function getDbConfig()
    {
        return [
            'driver'    => self::get('db_driver'),
            'host'      => self::get('db_host'),
            'database'  => self::get('db_database'),
            'username'  => self::get('db_username'),
            'password'  => self::get('db_password'),
            'charset'   => self::get('db_charset'),
            'collation' => self::get('db_collation'),
            'prefix'    => self::get('db_prefix')
        ];
    }
}